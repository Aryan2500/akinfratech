 <aside class="sidebar ">
     <div class="container-fluid">
         <!--[ sidebar:: menu list ]-->
         <div class="flex-grow-1">
             <ul class="menu-list mt-3 rounded-4">
                 <!--[ Start:: brand logo and name ]-->
                 <li class="brand-icon mb-3 py-1">
                     <a href="index.html">
                         <img class="img-fluid top-0" src="{{ asset('assets/img/logo.png') }}" alt="" srcset=""
                             width="100" height="100">

                         <span class="fs-8 ms-2">{{ env('APP_NAME') }}</span>
                     </a>

                 </li>
                 <!--[ Start:: dashboard ]-->
                 <li class="collapsed">
                     <a class="m-link  {{ request()->is('site-head/dashboard') ? 'active' : '' }}"
                         data-bs-toggle="collapse" data-bs-target="#menu_dashboard" href="#">
                         <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                             <path opacity="0.2"
                                 d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                             <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                         </svg>
                         <span class="mx-3">Dashboard</span>
                         <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                     </a>
                     <!-- Menu: Sub menu ul -->
                     <ul class="sub-menu collapse  {{ request()->is('site-head/dashboard') ? 'show' : '' }}"
                         id="menu_dashboard">
                         <li><a class="ms-link {{ request()->is('site-head/dashboard') ? 'active' : '' }}"
                                 href="{{ route('sh.dashboard') }}">My
                                 Dashboard</a></li>
                     </ul>
                 </li>

                 <li class="collapsed">
                     <a class="m-link {{ request()->is('site-head/user-management*') ? 'active' : '' }}"
                         data-bs-toggle="collapse" data-bs-target="#menu_apps" href="#">
                         <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                             <path opacity="0.7"
                                 d="M6 8C6.79565 8 7.55871 7.68393 8.12132 7.12132C8.68393 6.55871 9 5.79565 9 5C9 4.20435 8.68393 3.44129 8.12132 2.87868C7.55871 2.31607 6.79565 2 6 2C5.20435 2 4.44129 2.31607 3.87868 2.87868C3.31607 3.44129 3 4.20435 3 5C3 5.79565 3.31607 6.55871 3.87868 7.12132C4.44129 7.68393 5.20435 8 6 8ZM1 14C1 14 0 14 0 13C0 12 1 9 6 9C11 9 12 12 12 13C12 14 11 14 11 14H1Z" />
                             <path opacity="0.4"
                                 d="M11.1464 3.14645C11.0527 3.24021 11 3.36739 11 3.5C11 3.63261 11.0527 3.75979 11.1464 3.85355C11.2402 3.94732 11.3674 4 11.5 4H15.5C15.6326 4 15.7598 3.94732 15.8536 3.85355C15.9473 3.75979 16 3.63261 16 3.5C16 3.36739 15.9473 3.24021 15.8536 3.14645C15.7598 3.05268 15.6326 3 15.5 3H11.5C11.3674 3 11.2402 3.05268 11.1464 3.14645Z" />
                             <path opacity="0.4"
                                 d="M11.1464 6.14645C11.2402 6.05268 11.3674 6 11.5 6H15.5C15.6326 6 15.7598 6.05268 15.8536 6.14645C15.9473 6.24021 16 6.36739 16 6.5C16 6.63261 15.9473 6.75979 15.8536 6.85355C15.7598 6.94732 15.6326 7 15.5 7H11.5C11.3674 7 11.2402 6.94732 11.1464 6.85355C11.0527 6.75979 11 6.63261 11 6.5C11 6.36739 11.0527 6.24021 11.1464 6.14645Z" />
                             <path opacity="0.4"
                                 d="M13.1464 9.14645C13.2402 9.05268 13.3674 9 13.5 9H15.5C15.6326 9 15.7598 9.05268 15.8536 9.14645C15.9473 9.24021 16 9.36739 16 9.5C16 9.63261 15.9473 9.75979 15.8536 9.85355C15.7598 9.94732 15.6326 10 15.5 10H13.5C13.3674 10 13.2402 9.94732 13.1464 9.85355C13.0527 9.75979 13 9.63261 13 9.5C13 9.36739 13.0527 9.24021 13.1464 9.14645Z" />
                             <path opacity="0.4"
                                 d="M13.1464 12.1464C13.2402 12.0527 13.3674 12 13.5 12H15.5C15.6326 12 15.7598 12.0527 15.8536 12.1464C15.9473 12.2402 16 12.3674 16 12.5C16 12.6326 15.9473 12.7598 15.8536 12.8536C15.7598 12.9473 15.6326 13 15.5 13H13.5C13.3674 13 13.2402 12.9473 13.1464 12.8536C13.0527 12.7598 13 12.6326 13 12.5C13 12.3674 13.0527 12.2402 13.1464 12.1464Z" />
                         </svg>
                         <span class="mx-3">User Management</span>
                         <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                     </a>
                     <!-- Menu: Sub menu ul -->
                     <ul class="sub-menu collapse {{ request()->is('site-head/user-management*') ? 'show' : '' }}"
                         id="menu_apps">
                         <li><a class="ms-link {{ request()->is('site-head/user-management/user*') ? 'active' : '' }}"
                                 href="{{ route('user.list') }}">Users</a></li>
                         <li><a class="ms-link {{ request()->is('site-head/user-management/role*') ? 'active' : '' }}"
                                 href="{{ route('downline.list') }}">Downline</a></li>
                         {{-- <li><a class="ms-link {{ request()->is('site-head/user-management/role*') ? 'active' : '' }}"
                                 href="{{ route('role.list') }}">Roles</a></li> --}}

                     </ul>
                 </li>
                 <li class="collapsed">
                     <a class="m-link {{ request()->is('site-head/property-management*') ? 'active' : '' }}"
                         data-bs-toggle="collapse" data-bs-target="#properyMenu" href="#">
                         <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                             <path opacity="0.2"
                                 d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                             <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                         </svg>
                         <span class="mx-3">Property Management</span>
                         <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                     </a>
                     <!-- Menu: Sub menu ul -->
                     <ul class="sub-menu collapse {{ request()->is('site-head/property-management*') ? 'show' : '' }}"
                         id="properyMenu">
                         <li><a class="ms-link {{ request()->is('site-head/property-management/site*') ? 'active' : '' }}"
                                 href="{{ route('site.list') }}">Sites</a></li>
                         <li><a class="ms-link {{ request()->is('site-head/property-management/block*') ? 'active' : '' }}"
                                 href="{{ route('block.list') }}">Block</a></li>
                         <li><a class="ms-link {{ request()->is('site-head/property-management/farmer*') ? 'active' : '' }}"
                                 href="{{ route('farmer.list') }}">Farmers</a></li>
                         <li><a class="ms-link {{ request()->is('site-head/property-management/land*') ? 'active' : '' }}"
                                 href="{{ route('land.list') }}">Land</a></li>
                         <li><a class="ms-link {{ request()->is('site-head/property-management/ptype*') ? 'active' : '' }}"
                                 href="{{ route('plottype.list') }}">Plot Types</a></li>
                         <li><a class="ms-link {{ request()->is('site-head/property-management/plot*') ? 'active' : '' }}"
                                 href="{{ route('plot.list') }}">Plots</a></li>

                     </ul>
                 </li>
                 <li class="collapsed">
                     <a class="m-link {{ request()->is('site-head/booking-management*') ? 'active' : '' }}"
                         data-bs-toggle="collapse" data-bs-target="#bookingMenu" href="#">
                         <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                             <path opacity="0.2"
                                 d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                             <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                         </svg>
                         <span class="mx-3">Booking Management</span>
                         <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                     </a>
                     <!-- Menu: Sub menu ul -->
                     <ul class="sub-menu collapse {{ request()->is('site-head/booking-management*') ? 'show' : '' }}"
                         id="bookingMenu">
                         <li><a class="ms-link {{ request()->is('site-head/booking-management/plot-registry*') ? 'active' : '' }}"
                                 href="{{ route('plot-registry.create') }}">New Plot Registry</a></li>

                     </ul>
                 </li>


             </ul>

         </div>

     </div>
 </aside>
