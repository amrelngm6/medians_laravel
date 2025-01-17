<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Modules\Customers\Controllers\StaffController;
use App\Models\Auth;
use thiagoalessio\TesseractOCR\TesseractOCR;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;


Route::get('', function () {


//     $apiKey = 'K84715321088957';
//     $url = 'https://api.ocr.space/parse/image';

//     $imagePath = './image.png';
// print_r(new CURLFile($imagePath));
//     $data = [
//         'apikey' => $apiKey,
//         'file' => new CURLFile($imagePath),
//         'language' => 'eng',
//     ];

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     $response = curl_exec($ch);
//     curl_close($ch);

//     $result = json_decode($response, true);
//     print_r($result);


//     return ;
    // $text = (new TesseractOCR('./1724736274414.jpg'))
    //     ->lang('ara') // Specify language
    //     ->psm(3)
    //     // ->oem(1)
    //     ->run();

    // echo $text;


    // Mail::to('amrelngm6@gmail.com')->send(new TestEmail());

    // return view('dashboard.analytics');
})->name('index');

Route::get('webhooks/medians_wp', function () {
    echo 'medians_wp';
})->name('webhooks_wp');

// Staff Login / Signup
Route::prefix('staff')->group(function() {
    Route::view('/login', 'pages.staff-login')->name('Staff.login');
    Route::view('/signup', 'pages.signup')->name('Staff.signup');
});
Route::post('/signin', [StaffController::class, 'login'])->name('Staff.signin');
Route::post('/register', [StaffController::class, 'register'])->name('Staff.register');


// Users Login
Route::view('login', 'pages.login')->name('login');
Route::view('signup', 'pages.signup')->name('signup_page');
Route::get('logout', [UserController::class, 'logout']);

Route::prefix('dashboard')->middleware(['web', 'auth:superadmin,staff'])->group(function() {
    
    Route::get('', function () {
        $user = Auth::guard('staff')->user();
        if ($user && empty($user->business))
        {
            return redirect()->route('Business.subscription');
        }
        return view('dashboard.crm');
    })->name('dashboard');

});

Route::prefix('users')->middleware(['web', 'auth:superadmin'])->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('Users');
    Route::get('/create', [UserController::class, 'create'])->name('User.create');
    Route::get('/edit', [UserController::class, 'edit'])->name('User.edit');
    Route::post('/store', [UserController::class, 'store'])->name('User.store');
    Route::post('{id}', [UserController::class, 'update'])->name('User.update');
    Route::delete('{id}', [UserController::class, 'destroy'])->name('User.delete');

    Route::get('{id}/overview', [UserController::class, 'overview'])->name('User.tabs.overview');

});

Route::prefix('modules')->middleware(['web', 'auth:superadmin'])->group(function() {
    Route::get('/', [ModuleController::class, 'index'])->name('Modules');
    Route::view('/upload', 'includes.modals.new-module')->name('Modules.upload');
    Route::post('/install', [ModuleController::class, 'install'])->name('Modules.install');
    Route::post('/update/{id}', [ModuleController::class, 'update'])->name('Modules.update');
    
});

Route::group(['prefix'=>'api'], function() {

    Route::get('/', [UserController::class, 'register']);
    Route::post('/register', [UserController::class, 'register'])->name('api.signup');
    Route::post('/login', [UserController::class, 'login'])->name('api.login');
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
});





Route::group(['prefix' => 'ar', 'as' => 'ar.'], function () {

    Route::view('/', 'dashboard.analytics')->name('index');
    Route::view('dashboard/analytics', 'dashboard.analytics')->name('dashboard_analytics');
    Route::view('dashboard/analytics', 'dashboard.analytics')->name('dashboard_analytics');
    Route::view('dashboard/crm', 'dashboard.crm')->name('dashboard_crm');
    Route::view('dashboard/saas', 'dashboard.saas')->name('dashboard_saas');
    Route::view('dashboard/ecommerce', 'dashboard.ecommerce')->name('dashboard_ecommerce');
    Route::view('dashboard/sales', 'dashboard.sales')->name('dashboard_sales');

    

    Route::view('apps/chat', 'apps.chat')->name('apps_chat');
    Route::view('apps/file-manager', 'apps.file-manager')->name('apps_file-manager');
    Route::view('apps/inbox', 'apps.inbox')->name('apps_inbox');
    Route::view('apps/mail-details', 'apps.mail-details')->name('apps_mail-details');
    Route::view('apps/pos', 'apps.pos')->name('apps_pos');
    Route::view('apps/todo', 'apps.todo')->name('apps_todo');
    Route::view('apps/kanban', 'apps.kanban')->name('apps_kanban');


    Route::view('charts/chartjs-bar', 'charts.chartjs-bar')->name('charts_chartjs-bar');
    Route::view('charts/chartjs-line', 'charts.chartjs-line')->name('charts_chartjs-line');
    Route::view('charts/chartjs-donut', 'charts.chartjs-donut')->name('charts_chartjs-donut');
    Route::view('charts/chartjs-pie', 'charts.chartjs-pie')->name('charts_chartjs-pie');

    Route::view('charts/flot-area', 'charts.flot-area')->name('charts_flot-area');
    Route::view('charts/flot-line', 'charts.flot-line')->name('charts_flot-line');
    Route::view('charts/morris-area', 'charts.morris-area')->name('charts_morris-area');
    Route::view('charts/morris-bar', 'charts.morris-bar')->name('charts_morris-bar');
    Route::view('charts/morris-line', 'charts.morris-line')->name('charts_morris-line');
    Route::view('charts/morris-pie', 'charts.morris-pie')->name('charts_morris-pie');
    Route::view('charts/map', 'charts.map')->name('charts_map');
    Route::view('charts/map2', 'charts.map2')->name('charts_map2');


    Route::view('ecommerce/list', 'ecommerce.list')->name('ecommerce_list');
    Route::view('ecommerce/new', 'ecommerce.new')->name('ecommerce_new');
    Route::view('ecommerce/edit', 'ecommerce.edit')->name('ecommerce_edit');
    Route::view('ecommerce/merchants', 'ecommerce.merchants')->name('ecommerce_merchants');

    Route::view('events/calendar', 'events.calendar')->name('events_calendar');
    Route::view('events/day-calendar', 'events.day-calendar')->name('events_day-calendar');


    Route::view('forms/form-elements-grid', 'forms.form-elements-grid')->name('form-elements-grid');
    Route::view('forms/form-elements-icheck', 'forms.form-elements-icheck')->name('form-elements-icheck');
    Route::view('forms/form-elements-premade', 'forms.form-elements-premade')->name('form-elements-premade');
    Route::view('forms/form-elements', 'forms.form-elements')->name('form-elements');
    Route::view('forms/form-validation', 'forms.form-validation')->name('form-validation');
    Route::view('forms/form-wizard', 'forms.form-wizard')->name('form-wizard');


    Route::view('hr/attendance', 'hr.attendance')->name('hr_attendance');
    Route::view('hr/employees', 'hr.employees')->name('hr_employees');


    Route::view('profile/overview', 'profile.overview')->name('profile_overview');
    Route::view('profile/setting', 'profile.setting')->name('profile_setting');
    Route::view('profile/billing', 'profile.billing')->name('profile_billing');
    Route::view('profile/referrals', 'profile.referrals')->name('profile_referrals');
    Route::view('profile/activity', 'profile.activity')->name('profile_activity');


    Route::view('projects/grid', 'projects.grid')->name('projects_grid');
    Route::view('projects/list', 'projects.list')->name('projects_list');
    Route::view('projects/project', 'projects.project')->name('projects_project');
    Route::view('projects/tasks', 'projects.tasks')->name('projects_tasks');
    Route::view('projects/team', 'projects.team')->name('projects_team');
    Route::view('projects/activity', 'projects.activity')->name('projects_activity');
    Route::view('projects/files', 'projects.files')->name('projects_files');


    Route::view('pages/create_invoice', 'pages.create-invoice')->name('pages_create_invoice');
    Route::view('pages/invoice', 'pages.invoice')->name('pages_invoice');
    Route::view('pages/pricing', 'pages.pricing')->name('pages_pricing');
    Route::view('pages/faq', 'pages.faq')->name('pages_faq');
    Route::view('pages/payments', 'pages.payments')->name('pages_payments');
    Route::view('pages/login', 'pages.login')->name('pages_login');
    Route::view('pages/login2', 'pages.login2')->name('pages_login2');
    Route::view('pages/signup', 'pages.signup')->name('pages_signup');
    Route::view('pages/signup2', 'pages.signup2')->name('pages_signup2');


    Route::view('ui/widgets', 'ui.widgets')->name('ui_widgets');
    Route::view('ui/accordion', 'ui.accordion')->name('ui_accordion');
    Route::view('ui/breadcrumbs', 'ui.widgets')->name('ui_breadcrumbs');
    Route::view('ui/buttons', 'ui.buttons')->name('ui_buttons');
    Route::view('ui/dropdowns', 'ui.dropdowns')->name('ui_dropdowns');
    Route::view('ui/fontawesome', 'ui.fontawesome')->name('ui_fontawesome');
    Route::view('ui/glyphicons', 'ui.glyphicons')->name('ui_glyphicons');
    Route::view('ui/grids', 'ui.grids')->name('ui_grids');
    Route::view('ui/group-list', 'ui.group-list')->name('ui_group-list');
    Route::view('ui/icons', 'ui.icons')->name('ui_icons');
    Route::view('ui/labels-badges', 'ui.labels-badges')->name('ui_labels-badges');
    Route::view('ui/modals', 'ui.modals')->name('ui_modals');
    Route::view('ui/navbars', 'ui.navbars')->name('ui_navbars');
    Route::view('ui/notifications', 'ui.notifications')->name('ui_notifications');
    Route::view('ui/pagination', 'ui.pagination')->name('ui_pagination');
    Route::view('ui/panels', 'ui.panels')->name('ui_panels');
    Route::view('ui/popovers', 'ui.popovers')->name('ui_popovers');
    Route::view('ui/progress', 'ui.progress')->name('ui_progress');
    Route::view('ui/tabs', 'ui.tabs')->name('ui_tabs');
    Route::view('ui/typography', 'ui.typography')->name('ui_typography');
    Route::view('ui/alerts', 'ui.alerts')->name('ui_alerts');

});

Route::group(['prefix' => 'en', 'as' => 'en.'],function () {

    Route::view('/', 'dashboard.analytics')->name('index');

    Route::view('dashboard/analytics', 'dashboard.analytics')->name('dashboard_analytics');
    Route::view('dashboard/crm', 'dashboard.crm')->name('dashboard_crm');
    Route::view('dashboard/saas', 'dashboard.saas')->name('dashboard_saas');
    Route::view('dashboard/ecommerce', 'dashboard.ecommerce')->name('dashboard_ecommerce');
    Route::view('dashboard/sales', 'dashboard.sales')->name('dashboard_sales');

    

    Route::view('apps/chat', 'apps.chat')->name('apps_chat');
    Route::view('apps/file-manager', 'apps.file-manager')->name('apps_file-manager');
    Route::view('apps/inbox', 'apps.inbox')->name('apps_inbox');
    Route::view('apps/mail-details', 'apps.mail-details')->name('apps_mail-details');
    Route::view('apps/pos', 'apps.pos')->name('apps_pos');
    Route::view('apps/todo', 'apps.todo')->name('apps_todo');
    Route::view('apps/kanban', 'apps.kanban')->name('apps_kanban');


    Route::view('charts/chartjs-bar', 'charts.chartjs-bar')->name('charts_chartjs-bar');
    Route::view('charts/chartjs-line', 'charts.chartjs-line')->name('charts_chartjs-line');
    Route::view('charts/chartjs-donut', 'charts.chartjs-donut')->name('charts_chartjs-donut');
    Route::view('charts/chartjs-pie', 'charts.chartjs-pie')->name('charts_chartjs-pie');

    Route::view('charts/flot-area', 'charts.flot-area')->name('charts_flot-area');
    Route::view('charts/flot-line', 'charts.flot-line')->name('charts_flot-line');
    Route::view('charts/morris-area', 'charts.morris-area')->name('charts_morris-area');
    Route::view('charts/morris-bar', 'charts.morris-bar')->name('charts_morris-bar');
    Route::view('charts/morris-line', 'charts.morris-line')->name('charts_morris-line');
    Route::view('charts/morris-pie', 'charts.morris-pie')->name('charts_morris-pie');
    Route::view('charts/map', 'charts.map')->name('charts_map');
    Route::view('charts/map2', 'charts.map2')->name('charts_map2');


    Route::view('ecommerce/list', 'ecommerce.list')->name('ecommerce_list');
    Route::view('ecommerce/new', 'ecommerce.new')->name('ecommerce_new');
    Route::view('ecommerce/edit', 'ecommerce.edit')->name('ecommerce_edit');
    Route::view('ecommerce/merchants', 'ecommerce.merchants')->name('ecommerce_merchants');

    Route::view('events/calendar', 'events.calendar')->name('events_calendar');
    Route::view('events/day-calendar', 'events.day-calendar')->name('events_day-calendar');


    Route::view('forms/form-elements-grid', 'forms.form-elements-grid')->name('form-elements-grid');
    Route::view('forms/form-elements-icheck', 'forms.form-elements-icheck')->name('form-elements-icheck');
    Route::view('forms/form-elements-premade', 'forms.form-elements-premade')->name('form-elements-premade');
    Route::view('forms/form-elements', 'forms.form-elements')->name('form-elements');
    Route::view('forms/form-validation', 'forms.form-validation')->name('form-validation');
    Route::view('forms/form-wizard', 'forms.form-wizard')->name('form-wizard');


    Route::view('hr/attendance', 'hr.attendance')->name('hr_attendance');
    Route::view('hr/employees', 'hr.employees')->name('hr_employees');


    Route::view('profile/overview', 'profile.overview')->name('profile_overview');
    Route::view('profile/setting', 'profile.setting')->name('profile_setting');
    Route::view('profile/billing', 'profile.billing')->name('profile_billing');
    Route::view('profile/referrals', 'profile.referrals')->name('profile_referrals');
    Route::view('profile/activity', 'profile.activity')->name('profile_activity');


    Route::view('projects/grid', 'projects.grid')->name('projects_grid');
    Route::view('projects/list', 'projects.list')->name('projects_list');
    Route::view('projects/project', 'projects.project')->name('projects_project');
    Route::view('projects/tasks', 'projects.tasks')->name('projects_tasks');
    Route::view('projects/team', 'projects.team')->name('projects_team');
    Route::view('projects/activity', 'projects.activity')->name('projects_activity');
    Route::view('projects/files', 'projects.files')->name('projects_files');


    Route::view('pages/create_invoice', 'pages.create-invoice')->name('pages_create_invoice');
    Route::view('pages/invoice', 'pages.invoice')->name('pages_invoice');
    Route::view('pages/pricing', 'pages.pricing')->name('pages_pricing');
    Route::view('pages/faq', 'pages.faq')->name('pages_faq');
    Route::view('pages/payments', 'pages.payments')->name('pages_payments');
    Route::view('pages/login', 'pages.login')->name('pages_login');
    Route::view('pages/login2', 'pages.login2')->name('pages_login2');
    Route::view('pages/signup', 'pages.signup')->name('pages_signup');
    Route::view('pages/signup2', 'pages.signup2')->name('pages_signup2');


    Route::view('ui/widgets', 'ui.widgets')->name('ui_widgets');
    Route::view('ui/accordion', 'ui.accordion')->name('ui_accordion');
    Route::view('ui/breadcrumbs', 'ui.widgets')->name('ui_breadcrumbs');
    Route::view('ui/buttons', 'ui.buttons')->name('ui_buttons');
    Route::view('ui/dropdowns', 'ui.dropdowns')->name('ui_dropdowns');
    Route::view('ui/fontawesome', 'ui.fontawesome')->name('ui_fontawesome');
    Route::view('ui/glyphicons', 'ui.glyphicons')->name('ui_glyphicons');
    Route::view('ui/grids', 'ui.grids')->name('ui_grids');
    Route::view('ui/group-list', 'ui.group-list')->name('ui_group-list');
    Route::view('ui/icons', 'ui.icons')->name('ui_icons');
    Route::view('ui/labels-badges', 'ui.labels-badges')->name('ui_labels-badges');
    Route::view('ui/modals', 'ui.modals')->name('ui_modals');
    Route::view('ui/navbars', 'ui.navbars')->name('ui_navbars');
    Route::view('ui/notifications', 'ui.notifications')->name('ui_notifications');
    Route::view('ui/pagination', 'ui.pagination')->name('ui_pagination');
    Route::view('ui/panels', 'ui.panels')->name('ui_panels');
    Route::view('ui/popovers', 'ui.popovers')->name('ui_popovers');
    Route::view('ui/progress', 'ui.progress')->name('ui_progress');
    Route::view('ui/tabs', 'ui.tabs')->name('ui_tabs');
    Route::view('ui/typography', 'ui.typography')->name('ui_typography');
    Route::view('ui/alerts', 'ui.alerts')->name('ui_alerts');

});
