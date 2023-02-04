<ul class="navbar-nav">
    <li class="nav-item {{(request()->is('/')) ? 'active' : ''}}">
        <a class="nav-link" href="/">
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            </span>
            <span class="nav-link-title">
                Home
            </span>
        </a>
    </li>
    <li class="nav-item {{(request()->is('page2')) ? 'active' : ''}}">
        <a class="nav-link" href="page2" >
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
            </span>
            <span class="nav-link-title">
                Page 2
            </span>
        </a>
    </li>
    <li class="nav-item {{(request()->is('siswa')) ? 'active' : ''}}">
        <a class="nav-link" href="siswa" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
             </svg>
            </span>
            <span class="nav-link-title">
                Siswa
            </span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                                    </span>
            <span class="nav-link-title">
                                        Layout
                                    </span>
        </a>
        <div class="dropdown-menu">
            <div class="dropdown-menu-columns">
                <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="" >
                        Horizontal
                    </a>
                    <a class="dropdown-item" href="" >
                        Vertical
                    </a>
                    <a class="dropdown-item" href="" >
                        Vertical transparent
                    </a>
                    <a class="dropdown-item" href="" >
                        Right vertical
                    </a>
                    <a class="dropdown-item" href="" >
                        Condensed
                    </a>
                    <a class="dropdown-item" href="" >
                        Condensed dark
                    </a>
                    <a class="dropdown-item" href="" >
                        Combined
                    </a>
                </div>
                <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="" >
                        Navbar dark
                    </a>
                    <a class="dropdown-item" href="" >
                        Navbar sticky
                    </a>
                    <a class="dropdown-item" href="" >
                        Navbar overlap
                    </a>
                    <a class="dropdown-item" href="" >
                        Dark mode
                    </a>
                    <a class="dropdown-item" href="" >
                        RTL mode
                    </a>
                    <a class="dropdown-item" href="" >
                        Fluid
                    </a>
                    <a class="dropdown-item" href="" >
                        Fluid vertical
                    </a>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <circle cx="9" cy="7" r="4"></circle>
                   <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                   <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                   <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                </svg>
            </span>
            <span class="nav-link-title">
                Users
            </span>
        </a>
    </li>
</ul>
