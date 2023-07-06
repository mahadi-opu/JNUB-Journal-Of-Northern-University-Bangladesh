<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
{{--            Noble<span>UI</span>--}}
            <img src="{{ asset('assets/jnub-logo.png') }}" alt="">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <div class="profile pt-4 text-center">
            <div class="profile_picture">
                <img class="pb-3" src="{{ asset('assets/femail-profile.png') }}" alt="">
            </div>
            <div class="profile_role">
                <h3> Author</h3>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category"> Article </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#articles" role="button" aria-expanded="false" aria-controls="articles">
                    <i class="link-icon" data-feather="edit"></i>
                    <span class="link-title">Article</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="articles">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">Add Article </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link"> All Articles  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link"> Draft </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link"> Thrush </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="check-square"></i>
                    <span class="link-title"> Approved articles </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="file-minus"></i>
                    <span class="link-title"> Minor revisions </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="file-plus"></i>
                    <span class="link-title"> Major revisions </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="x-square"></i>
                    <span class="link-title"> Rejected Article </span>
                </a>
            </li>
{{--            <li class="nav-item nav-category">web apps</li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">--}}
{{--                    <i class="link-icon" data-feather="mail"></i>--}}
{{--                    <span class="link-title">Email</span>--}}
{{--                    <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="emails">--}}
{{--                    <ul class="nav sub-menu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/email/inbox.html" class="nav-link">Inbox</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/email/read.html" class="nav-link">Read</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/email/compose.html" class="nav-link">Compose</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title"> Message </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title"> Analysis </span>
                </a>
            </li>
{{--            <li class="nav-item nav-category">Components</li>--}}

            <li class="nav-item nav-category"> Settings </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title"> Settings </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/faq.html" class="nav-link">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/profile.html" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">--}}
{{--                    <i class="link-icon" data-feather="unlock"></i>--}}
{{--                    <span class="link-title">Authentication</span>--}}
{{--                    <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="authPages">--}}
{{--                    <ul class="nav sub-menu">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/auth/login.html" class="nav-link">Login</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/auth/register.html" class="nav-link">Register</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
                    <i class="link-icon" data-feather="cloud-off"></i>
                    <span class="link-title"> Help & Support </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="errorPages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/error/404.html" class="nav-link"> Privacy Policy  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/error/500.html" class="nav-link"> Terms & Conditions </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/error/500.html" class="nav-link"> Faq </a>
                        </li>
                    </ul>
                </div>
            </li>
{{--            <li class="nav-item nav-category">Docs</li>--}}
            <li class="nav-item">
                <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title"> Log Out </span>
                </a>
            </li>
        </ul>
    </div>
</nav>



<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                <label class="form-check-label" for="sidebarLight">
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                <label class="form-check-label" for="sidebarDark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item active" href="dashboard.html">
                <img src="../assets/images/screenshots/light.jpg" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item" href="../demo2/dashboard.html">
                <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
            </a>
        </div>
    </div>
</nav>
