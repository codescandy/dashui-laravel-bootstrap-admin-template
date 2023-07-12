 <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
     <div class="nav-scroller">
         <!-- Brand logo -->
         <a class="navbar-brand" href="/">
            <img src="{{ Vite::asset('resources/images/brand/logo/logo.svg') }}" alt="" />
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">
             <li class="nav-item">
                 <a class="nav-link has-arrow {{$page === '/' ? 'active' : ''}}"
                     href="/">
                     <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard 
                 </a>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Layouts & Pages</div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow {{$page_group === 'pages' ? 'collapsed' : ''}}"
                     href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false"
                     aria-controls="navPages">
                     <i data-feather="layers" class="nav-icon icon-xs me-2">
                     </i> Pages
                 </a>
                 <div id="navPages"
                     class="collapse {{$page_group === 'pages' ? 'show' : ''}}"
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link {{$page === 'profile' ? 'active' : ''}}"
                                 href="/profile">
                                 Profile
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow {{$page === 'settings' ? 'active' : ''}}"
                                 href="/settings">
                                 Settings
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{$page === 'billing' ? 'active' : ''}}"
                                 href="/billing">
                                 Billing
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{$page === 'pricing' ? 'active' : ''}}"
                                 href="/pricing">
                                 Pricing
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{$page === '404-error' ? 'active' : ''}}"
                                 href="/404-error">
                                 404 Error
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  {{$page_group === 'authentication' ? 'collapsed' : ''}}"
                     href="#!" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false"
                     aria-controls="navAuthentication">
                     <i data-feather="lock" class="nav-icon icon-xs me-2">
                     </i> Authentication
                 </a>
                 <div id="navAuthentication"
                     class="collapse {{$page_group === 'authentication' ? 'show' : ''}}"
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link {{$page === 'sign-in' ? 'active' : ''}}"
                                 href="/sign-in"> Sign In</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{$page === 'sign-up' ? 'active' : ''}} "
                                 href="/sign-up"> Sign Up</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link {{$page === 'forgetpassword' ? 'active' : ''}}"
                                 href="/forget-password">
                                 Forget Password
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{$page === 'layout' ? 'active' : ''}}"
                     href="/layout">
                     <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                     </i>
                     Layouts
                 </a>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">UI Components</div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow" target="_blank"
                     href="https://codescandy.com/dashui/docs/accordions.html">
                     <i data-feather="package" class="nav-icon icon-xs me-2">
                     </i> Components
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow"
                     href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false"
                     aria-controls="navMenuLevel">
                     <i data-feather="corner-left-down" class="nav-icon icon-xs me-2">
                     </i> Menu Level
                 </a>
                 <div id="navMenuLevel"
                     class="collapse"
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link has-arrow"
                                 href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond"
                                 aria-expanded="false" aria-controls="navMenuLevelSecond">
                                 Two Level
                             </a>
                             <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link"
                                             href="#!"> NavItem 1</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link"
                                             href="#!"> NavItem 2</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow @@if (context.page_group !== 'threelevel') { collapsed } "
                                 href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree"
                                 aria-expanded="false" aria-controls="navMenuLevelThree">
                                 Three Level
                             </a>
                             <div id="navMenuLevelThree"
                                 class="collapse @@if (context.page_group === 'threelevel') { show }"
                                 data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link @@if (context.page_group !== 'navitemthree1') { collapsed }"
                                             href="#!" data-bs-toggle="collapse"
                                             data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                             aria-controls="navMenuLevelThreeOne">
                                             NavItem 1
                                         </a>
                                         <div id="navMenuLevelThreeOne"
                                             class="collapse collapse @@if (context.page_group === 'navitemthree1') { show }"
                                             data-bs-parent="#navMenuLevelThree">
                                             <ul class="nav flex-column">
                                                 <li class="nav-item">
                                                     <a class="nav-link"
                                                         href="#!">
                                                         NavChild Item 1
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link"
                                             href="#!"> Nav Item 2</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Documentation</div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow {{$page === 'document' ? 'active' : ''}}"
                     href="/document">
                     <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                     </i> Docs
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow {{$page === 'changelog' ? 'active' : ''}}"
                     href="/changelog">
                     <i data-feather="git-pull-request" class="nav-icon icon-xs me-2">
                     </i> Changelog
                 </a>
             </li>
         </ul>
     </div>
 </nav>
