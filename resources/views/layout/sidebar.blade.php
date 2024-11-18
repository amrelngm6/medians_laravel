
<div class="page-sidebar fixedscroll">

<!-- MAIN MENU - START -->
<div class="page-sidebar-wrapper" id="main-menu-wrapper">

    <ul class='wraplist pb-20'>
        <li class='menusection'>Main</li>
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/dashboard.svg" alt="" class="width-20">
                </i>
                <span class="title">Dashboards</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li class="">
                    <a href="{{route(App::getLocale() . '.dashboard_analytics')}}" class="">
                        <span class="title">Analytics Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route(App::getLocale() . '.dashboard_saas')}}" class="">
                        <span class="title">SaaS Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route(App::getLocale() . '.dashboard_crm')}}" class="">
                        <span class="title">CRM Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route(App::getLocale() . '.dashboard_ecommerce')}}" class="">
                        <span class="title">E-Commerce Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route(App::getLocale() . '.dashboard_sales')}}" class="">
                        <span class="title">Sales Dashboard</span>
                    </a>
                </li>
            </ul>
        </li>



        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/users.svg" alt="" class="width-20">
                </i>
                <span class="title">Profile</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route(App::getLocale() . '.profile_overview')}}" class="">Overview</a>
                </li>
                <li>
                    <a href="{{route(App::getLocale() . '.profile_setting')}}" class="">Setting</a>
                </li>
                <li>
                    <a href="{{route(App::getLocale() . '.profile_billing')}}" class="">Billing</a>
                </li>
                <li>
                    <a href="{{route(App::getLocale() . '.profile_activity')}}" class="">Activity</a>
                </li>
                <li>
                    <a href="{{route(App::getLocale() . '.profile_referrals')}}" class="">Referrals</a>
                </li>
            </ul>
        </li>
        
        
        
        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/lock.svg" alt="" class="width-20">
                </i>
                <span class="title">Access Pages</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li class="">
                    <a href="javascript:;" class="">
                        <span class="title">Login</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu ">
                        <li>
                            <a class="" target="_blank" href="{{route(App::getLocale() . '.pages_login')}}">Style 1</a>
                        </li>
                        <li>
                            <a class="" target="_blank" href="{{route(App::getLocale() . '.pages_login2')}}">Style 2</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;" class="">
                        <span class="title">Signup</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu ">
                        <li>
                            <a class="" target="_blank" href="{{route(App::getLocale() . '.pages_signup')}}">Style 1</a>
                        </li>
                        <li>
                            <a class="" target="_blank" href="{{route(App::getLocale() . '.pages_signup2')}}">Style 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        
        <li class='menusection'>APPs</li>
        
        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/cart.svg" alt="" class="width-20">
                </i>
                <span class="title">E-Commerce</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ecommerce_list')}}">Products</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ecommerce_new')}}">Add Product</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ecommerce_edit')}}">Edit Product</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ecommerce_merchants')}}">Merchants</a>
                </li>
            </ul>
        </li>

        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/hr.svg" alt="" class="width-20">
                </i>
                <span class="title">HR</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.hr_attendance')}}">Attendance</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.hr_employees')}}">Employees</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/sparkles.svg" alt="" class="width-20">
                </i>
                <span class="title">Projects</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_grid')}}">Grid view</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_list')}}">List</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_project')}}">Overview</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_tasks')}}">Tasks</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_team')}}">Team</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_files')}}">Files</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.projects_activity')}}">Activity</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="{{route(App::getLocale() . '.apps_kanban')}}">
                <i class="img">
                    <img src="/data/icons/layout.svg" alt="" class="width-20">
                </i>
                <span class="title">Kanban Board</span>
            </a>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/calendar.svg" alt="" class="width-20">
                </i>
                <span class="title">Calendar</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.events_calendar')}}">Calendar</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.events_day-calendar')}}">Day Events</a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/mailbox.svg" alt="" class="width-20">
                </i>
                <span class="title">Email</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.apps_inbox')}}">Inbox</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.apps_mail-details')}}">Read Mail</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="{{route(App::getLocale() . '.apps_chat')}}">
                <i class="img">
                    <img src="/data/icons/chat.svg" alt="" class="width-20">
                </i>
                <span class="title">Chat</span>
            </a>
        </li>
        
        <li class="">
            <a href="{{route(App::getLocale() . '.apps_file-manager')}}">
                <i class="img">
                    <img src="/data/icons/folder.svg" alt="" class="width-20">
                </i>
                <span class="title">Files manager</span>
            </a>
        </li>
        
        <li class="">
            <a href="{{route(App::getLocale() . '.apps_pos')}}">
                <i class="img">
                    <img src="/data/icons/pos.svg" alt="" class="width-20">
                </i>
                <span class="title">Point of sale</span>
            </a>
        </li>

        <li class="">
            <a href="{{route(App::getLocale() . '.apps_todo')}}">
                <i class="img">
                    <img src="/data/icons/plan-3.svg" alt="" class="width-20">
                </i>
                <span class="title">To-Do</span>
            </a>
        </li>
        

        

        <li class='menusection'>Pages</li>
        <li class="">
            <a href="{{route(App::getLocale() . '.pages_pricing')}}">
                <i class="img">
                    <img src="/data/icons/price.svg" alt="" class="width-20">
                </i>
                <span class="title">Pricing</span>
            </a>
        </li>
        <li class="">
            <a href="{{route(App::getLocale() . '.pages_payments')}}">
                <i class="img">
                    <img src="/data/icons/bank-card.svg" alt="" class="width-20">
                </i>
                <span class="title">Payments</span>
            </a>
        </li>
        <li class="">
            <a href="{{route(App::getLocale() . '.pages_create_invoice')}}">
                <i class="img">
                    <img src="/data/icons/bank-card.svg" alt="" class="width-20">
                </i>
                <span class="title">Create Invoice</span>
            </a>
        </li>
        <li class="">
            <a href="{{route(App::getLocale() . '.pages_invoice')}}">
                <i class="img">
                    <img src="/data/icons/bank-card.svg" alt="" class="width-20">
                </i>
                <span class="title">Invoice</span>
            </a>
        </li>
        
        <li class="">
            <a href="{{route(App::getLocale() . '.pages_faq')}}">
                <i class="img">
                    <img src="/data/icons/faq.svg" alt="" class="width-20">
                </i>
                <span class="title">FAQ</span>
            </a>
        </li>
        
        <li class='menusection'>Data Visualization</li>
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/map.svg" alt="" class="width-20">
                </i>
                <span class="title">Highcharts</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_map')}}">Static Map</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_map2')}}">World Map</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/chart-bar.svg" alt="" class="width-20">
                </i>
                <span class="title">Bar Charts</span>
                <span class="arrow "></span>
            </a>
            
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_chartjs-bar')}}">ChartJS</a>
                </li>
                
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_morris-bar')}}">Bar & Stacked Charts</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/chart-line.svg" alt="" class="width-20">
                </i>
                <span class="title">Line & Area Charts</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_chartjs-line')}}">Charts JS</a>
                </li>
                
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_morris-line')}}">Morris JS</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_flot-line')}}">Flot JS</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_morris-area')}}">Area Morris JS</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_flot-area')}}">Area FlotJS</a>
                </li>
            </ul>
        </li>
        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/chart-pie.svg" alt="" class="width-20">
                </i>
                <span class="title">Pie & Donuts</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_chartjs-donut')}}">Dougnut ChartsJS</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_chartjs-pie')}}">Pie ChartsJS</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.charts_morris-pie')}}">Pie MorrisJS</a>
                </li>
            </ul>
        </li>


        <li class='menusection'>User Interface</li>
        
        <li class="">
            <a href="{{route(App::getLocale() . '.ui_widgets')}}"> 
            <i class="img">
                <img src="/data/icons/paint.svg" alt="" class="width-20">
            </i>
             <span class="title">Widgets</span> </a>
        </li>
        
        <li class="">
            <a href="javascript:;"> 
            <i class="img">
                <img src="/data/icons/box.svg" alt="" class="width-20">
            </i>
             <span class="title">Icons</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_fontawesome')}}">Font Awesome</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_glyphicons')}}">Glyph Icons</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_icons')}}">Icon Styles</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;"> 
            <i class="img">
                <img src="/data/icons/layout.svg" alt="" class="width-20">
            </i>
            <span class="title">Form Elements</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.form-elements-premade')}}">Pre Made Forms</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.form-elements')}}">Field Elements</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.form-elements-icheck')}}">Checkbox & Radio</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.form-elements-grid')}}">Form Grid</a>
                </li>
                    
                <li>
                    <a href="{{route(App::getLocale() . '.form-wizard')}}"> <span class="title">Form Wizard</span> </a>
                </li>
                <li>
                    <a href="{{route(App::getLocale() . '.form-validation')}}"> <span class="title">Form Validations</span> </a>
                </li>
                
            </ul>
        </li>
        
        <li class="">
            <a href="javascript:;">
                <i class="img">
                <img src="/data/icons/award.svg" alt="" class="width-20">
            </i>
                <span class="title">Components</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_panels')}}">Draggable Panels</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_accordion')}}">Accordions</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_alerts')}}">Alerts</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_progress')}}">Progress Bars</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_buttons')}}">Buttons</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_modals')}}">Modals</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_tabs')}}">Tabs</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_notifications')}}">Notifications</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_popovers')}}">Tooltips & Popovers</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_navbars')}}">Navbars</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_dropdowns')}}">Dropdowns</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_breadcrumbs')}}">Breadcrumbs</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_pagination')}}">Pagination</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_labels-badges')}}">Labels & Badges</a>
                </li>
                
            </ul>
        </li>

        <li class="">
            <a href="javascript:;">
                <i class="img">
                    <img src="/data/icons/layout2.svg" alt="" class="width-20">
                </i>
                <span class="title">Appearance</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_typography')}}">Typography</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_grids')}}">Grids</a>
                </li>
                <li>
                    <a class="" href="{{route(App::getLocale() . '.ui_group-list')}}">Group Listing</a>
                </li>
            </ul>
        </li>

    </ul>

</div>
<!-- MAIN MENU - END -->

</div>