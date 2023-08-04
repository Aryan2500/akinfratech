 <aside class="sidebar ">
     <div class="container-fluid">
         <!--[ sidebar:: menu list ]-->
         <div class="flex-grow-1">
             <ul class="menu-list mt-3 rounded-4">
                 <!--[ Start:: brand logo and name ]-->
                 <li class="brand-icon mb-3 py-1">
                     <a href="index.html">
                         <svg width="24" height="28" viewBox="0 0 24 28" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path class="fill-primary"
                                 d="M10.123 17.0196H14.7278L17.0428 19.9893L19.3201 22.6346L23.6121 28H18.5568L15.6038 24.3815L14.0897 22.2353L10.123 17.0196ZM24 13.1266C24 15.9133 23.4703 18.284 22.4108 20.2389C21.3598 22.1937 19.9249 23.6869 18.1064 24.7184C16.2961 25.7415 14.2607 26.2531 12 26.2531C9.72263 26.2531 7.67883 25.7374 5.86861 24.7059C4.05839 23.6744 2.62774 22.1812 1.57664 20.2264C0.525548 18.2715 0 15.9049 0 13.1266C0 10.3399 0.525548 7.9691 1.57664 6.01426C2.62774 4.05942 4.05839 2.57041 5.86861 1.54724C7.67883 0.515746 9.72263 0 12 0C14.2607 0 16.2961 0.515746 18.1064 1.54724C19.9249 2.57041 21.3598 4.05942 22.4108 6.01426C23.4703 7.9691 24 10.3399 24 13.1266ZM18.5068 13.1266C18.5068 11.3215 18.2357 9.79917 17.6934 8.55972C17.1595 7.32026 16.4046 6.38028 15.4286 5.73975C14.4526 5.09923 13.3097 4.77897 12 4.77897C10.6903 4.77897 9.54745 5.09923 8.57143 5.73975C7.59541 6.38028 6.83629 7.32026 6.29406 8.55972C5.76017 9.79917 5.49322 11.3215 5.49322 13.1266C5.49322 14.9317 5.76017 16.454 6.29406 17.6934C6.83629 18.9329 7.59541 19.8728 8.57143 20.5134C9.54745 21.1539 10.6903 21.4742 12 21.4742C13.3097 21.4742 14.4526 21.1539 15.4286 20.5134C16.4046 19.8728 17.1595 18.9329 17.6934 17.6934C18.2357 16.454 18.5068 14.9317 18.5068 13.1266Z"
                                 fill="#5BC43A" />
                         </svg>
                         <span class="fs-5 ms-2">{{ env('APP_NAME') }}</span>
                     </a>
                     <button type="button" class="btn btn-link px-0" data-bs-toggle="modal"
                         data-bs-target="#full_screen_menu" data-toggle="tooltip" title="Grid Fullscreen Menu"
                         data-bs-placement="bottom">
                         <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path class="fill-muted"
                                 d="M3.5 15C4.16304 15 4.79893 14.7366 5.26777 14.2678C5.73661 13.7989 6 13.163 6 12.5C6 11.837 5.73661 11.2011 5.26777 10.7322C4.79893 10.2634 4.16304 10 3.5 10C2.83696 10 2.20107 10.2634 1.73223 10.7322C1.26339 11.2011 1 11.837 1 12.5C1 13.163 1.26339 13.7989 1.73223 14.2678C2.20107 14.7366 2.83696 15 3.5 15ZM12.5 6C13.163 6 13.7989 5.73661 14.2678 5.26777C14.7366 4.79893 15 4.16304 15 3.5C15 2.83696 14.7366 2.20107 14.2678 1.73223C13.7989 1.26339 13.163 1 12.5 1C11.837 1 11.2011 1.26339 10.7322 1.73223C10.2634 2.20107 10 2.83696 10 3.5C10 4.16304 10.2634 4.79893 10.7322 5.26777C11.2011 5.73661 11.837 6 12.5 6ZM12.5 15C11.837 15 11.2011 14.7366 10.7322 14.2678C10.2634 13.7989 10 13.163 10 12.5C10 11.837 10.2634 11.2011 10.7322 10.7322C11.2011 10.2634 11.837 10 12.5 10C13.163 10 13.7989 10.2634 14.2678 10.7322C14.7366 11.2011 15 11.837 15 12.5C15 13.163 14.7366 13.7989 14.2678 14.2678C13.7989 14.7366 13.163 15 12.5 15ZM16 3.5C16 4.42826 15.6313 5.3185 14.9749 5.97487C14.3185 6.63125 13.4283 7 12.5 7C11.5717 7 10.6815 6.63125 10.0251 5.97487C9.36875 5.3185 9 4.42826 9 3.5C9 2.57174 9.36875 1.6815 10.0251 1.02513C10.6815 0.368749 11.5717 0 12.5 0C13.4283 0 14.3185 0.368749 14.9749 1.02513C15.6313 1.6815 16 2.57174 16 3.5ZM7 12.5C7 13.4283 6.63125 14.3185 5.97487 14.9749C5.3185 15.6313 4.42826 16 3.5 16C2.57174 16 1.6815 15.6313 1.02513 14.9749C0.368749 14.3185 0 13.4283 0 12.5C0 11.5717 0.368749 10.6815 1.02513 10.0251C1.6815 9.36875 2.57174 9 3.5 9C4.42826 9 5.3185 9.36875 5.97487 10.0251C6.63125 10.6815 7 11.5717 7 12.5ZM12.5 16C13.4283 16 14.3185 15.6313 14.9749 14.9749C15.6313 14.3185 16 13.4283 16 12.5C16 11.5717 15.6313 10.6815 14.9749 10.0251C14.3185 9.36875 13.4283 9 12.5 9C11.5717 9 10.6815 9.36875 10.0251 10.0251C9.36875 10.6815 9 11.5717 9 12.5C9 13.4283 9.36875 14.3185 10.0251 14.9749C10.6815 15.6313 11.5717 16 12.5 16Z" />
                             <path class="fill-primary"
                                 d="M5.97487 5.97487C5.3185 6.63125 4.42826 7 3.5 7C2.57174 7 1.6815 6.63125 1.02513 5.97487C0.368749 5.3185 0 4.42826 0 3.5C0 2.57174 0.368749 1.6815 1.02513 1.02513C1.6815 0.368749 2.57174 0 3.5 0C4.42826 0 5.3185 0.368749 5.97487 1.02513C6.63125 1.6815 7 2.57174 7 3.5C7 4.42826 6.63125 5.3185 5.97487 5.97487Z" />
                         </svg>
                     </button>
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
                         <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor">
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