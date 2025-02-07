<?php $user = auth()->user(); ?>

        <div class='page-topbar'>
            <div class='logo-area'>

            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="topnav-item item1">
                            <a href="#!" class="new-link w-text">Voice commands
                                <span class="badge bg-primary ml-5 pt-1"><i class='bx bxs-microphone-alt' ></i> Start</span>
                            </a>
                        </li>


                        <li class="hidden-sm hidden-xs searchform show-child">

                            <form action="#" method="get">
                                <div class="input-group ">
                                    <span class="p-5 ml-0 input-group-addon">
                                        <i class="fa fa-search"></i>
                                    </span>
                                    <div class="hidden fadeIn position-absolute  show-on-hover top-100 w-300px">
                                        <input type="text"
                                            class="w-100 rounded-4 animated bg-white form-control  shadow-sm text-primary"
                                            placeholder="Search & Enter">
                                        <button
                                            class="bg-transparent position-absolute right-0 top-0 mr-15 z-index-3 border-0 py-0">
                                            <i class="fa fa-search text-danger  fs-3 "></i>
                                        </button>
                                    </div>

                                </div>
                                <input type='submit' value="">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="notify-toggle-wrapper spec">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-primary">3</span>
                            </a>
                            <ul class="dropdown-menu notifications animated fadeIn">
                                <li class="pt-4 px-10 ">
                                    <span class="py-4 block">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="pull-right">Mark as Read</a>
                                    </span>
                                </li>
                                <li class="">
                                    <ul
                                        class="overflow-auto px-10 h-300px dropdown-menu-list list-unstyled ps-scrollbar  ">
                                        <li class="unread available">
                                            <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon bg-success">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span>
                                                        <strong class="text-primary">Successful transaction of 0.01
                                                            BTC</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="unread away">
                                            <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-clock-o bg-warning"></i>
                                                </div>
                                                <div>
                                                    <span class="text-primary">
                                                        <strong>4 of Pending Transactions!</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy">
                                            <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon ">
                                                    <i class="fa fa-times bg-danger"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Cancelled Order of 200 ICO</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class=" available">
                                            <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check bg-dark-blue"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify of 1.34 LTC</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class=" available">
                                            <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check bg-info"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify of 1.34 LTC</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;" class="block bg-primary text-white">
                                        <span>Read All Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="message-toggle-wrapper spec">
                            <a href="#" data-toggle="dropdown" class="toggle mr-15">
                                <i class="fa fa-envelope"></i>
                                <span class="badge bg-primary">7</span>
                            </a>
                            <ul class="dropdown-menu messages animated fadeIn">

                                <li class="">

                                    <ul
                                        class="overflow-auto px-10 h-300px dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread status-available">
                                            <a href="javascript:;" class="msg-user" data-user-id="1"
                                                data-name="Adam Vassar" data-img="/data/profile/avatar-1.png"
                                                data-user-id="1" data-name="Adam Vassar"
                                                data-img="/data/profile/avatar-1.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-1.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Adam Vassar</strong>
                                                        <span class="time small">- 15 mins ago</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;" class="msg-user" data-user-id="2"
                                                data-name="Brooks Latshaw" data-img="/data/profile/avatar-2.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-2.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Brooks Latshaw</strong>
                                                        <span class="time small">- 45 mins ago</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;" class="msg-user" data-user-id="3"
                                                data-name="Clementina Brodeur" data-img="/data/profile/avatar-3.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-3.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clementina Brodeur</strong>
                                                        <span class="time small">- 1 hour ago</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;" class="msg-user" data-user-id="4"
                                                data-name="Carri Busey" data-img="/data/profile/avatar-4.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-4.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Carri Busey</strong>
                                                        <span class="time small">- 5 hours ago</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;" class="msg-user" data-user-id="5"
                                                data-name="Melissa Dock" data-img="/data/profile/avatar-5.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-5.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Melissa Dock</strong>
                                                        <span class="time small">- Yesterday</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-available">
                                            <a href="javascript:;" class="msg-user" data-user-id="1"
                                                data-name="Adam Vassar" data-img="/data/profile/avatar-1.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-1.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Verdell Rea</strong>
                                                        <span class="time small">- 14th Mar</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;" class="msg-user" data-user-id="1"
                                                data-name="Adam Vassar" data-img="/data/profile/avatar-1.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-2.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Linette Lheureux</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;" class="msg-user" data-user-id="1"
                                                data-name="Adam Vassar" data-img="/data/profile/avatar-1.png">
                                                <div class="user-img">
                                                    <img src="/data/profile/avatar-3.png" alt="user-image"
                                                        class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Araceli Boatright</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Lorem ipsum dolor sit elit fugiat molest.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;" class="block bg-primary text-white">
                                        <span>Read All Messages</span>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="profile showopacity">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="{{$user->picture ?? '/data/profile/profile-crm.jpg'}}" alt="user-image" class="img-circle img-inline">
                                <span>{{$user->name ?? ''}} <i class="fa fa-angle-down"></i></span>
                            </a>
                            <div class="dropdown-menu animated fadeIn simplebar-content" style="padding: 0px;">
                                <div class="card pb-0 ">
                                    <div class="card-body pb-0 ">

                                        <div class="d-flex mb-1">
                                            <div class="flex-shrink-0"><img src="/data/profile/profile-crm.jpg"
                                                    alt="user-image" class="user-avtar w-40px h-40px"></div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1">Adam Smith 🖖</h6><span>info@example.com</span>
                                            </div>
                                        </div>
                                        <hr class="border-secondary border-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0 d-inline-flex align-items-center">Notification</h5>
                                            <div class="form-check form-switch form-check-reverse m-0"><input
                                                    class="form-check-input f-18" type="checkbox" role="switch"></div>
                                        </div>
                                        <hr class="border-secondary border-opacity-50">
                                        <p><a href="{{route(App::getLocale() . '.profile_overview')}}" class="fs-5 fw-bold "><span>
                                                    <span>Profile</span> </span>
                                            </a> </p>
                                        <p><a href="{{route(App::getLocale() . '.apps_chat')}}" class="fs-5 fw-bold "><span>
                                                    <span>Chat</span> </span></a>
                                        </p>
                                        <p><a href="{{route(App::getLocale() . '.apps_inbox')}}" class="fs-5 fw-bold "><span>
                                                    <span>Inbox</span> </span></a>
                                        </p>
                                        <p><a href="{{route(App::getLocale() . '.apps_todo')}}" class="fs-5 fw-bold "><span>
                                                    <span>To-Do List</span> </span></a>
                                        </p>
                                        <p>
                                            <a href="{{route(App::getLocale() . '.pages_pricing')}}"
                                                class="fs-5 fw-bold "><span><span>Prices</span></span></a>
                                        </p>
                                        <p>
                                            <a href="{{route(App::getLocale() . '.profile_referrals')}}"
                                                class="fs-5 fw-bold "><span><span>Referrals</span></span></a>
                                        </p>
                                        <hr class="border-secondary border-opacity-50">
                                        <div class="d-grid mb-3">
                                            <button class="btn btn-primary">
                                                Logout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>