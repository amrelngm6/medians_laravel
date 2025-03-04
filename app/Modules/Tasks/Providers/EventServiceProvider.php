<?php

namespace App\Modules\Tasks\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Listeners\TasksReportWidget;
use App\Modules\Tasks\Listeners\DealReportWidget;
use App\Modules\Deals\Event\OverviewWidget;
use App\Modules\Projects\Events\ProjectOverviewWidget;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ProjectOverviewWidget::class => [
            TasksReportWidget::class,
        ],
        OverviewWidget::class => [
            DealReportWidget::class,
        ],
    ];
}
