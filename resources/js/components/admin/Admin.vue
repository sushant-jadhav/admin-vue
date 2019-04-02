<template>
  <div>
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a
            class="nav-toggler waves-effect waves-light d-block d-md-none"
            href="javascript:void(0)"
          >
            <i class="ti-menu ti-close"></i>
          </a>

          <a class="navbar-brand" href="index.html">
            <b class="logo-icon p-l-10">
              <img src="/assets/admin/images/logo-icon.png" alt="homepage" class="light-logo">
            </b>

            <span class="logo-text">
              <img src="/assets/admin/images/logo-text.png" alt="homepage" class="light-logo">
            </span>
          </a>

          <a
            class="topbartoggler d-block d-md-none waves-effect waves-light"
            href="javascript:void(0)"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="ti-more"></i>
          </a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block">
              <a
                class="nav-link sidebartoggler waves-effect waves-light"
                href="javascript:void(0)"
                data-sidebartype="mini-sidebar"
              >
                <i class="mdi mdi-menu font-24"></i>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <span class="d-none d-md-block">
                  Create New
                  <i class="fa fa-angle-down"></i>
                </span>
                <span class="d-block d-md-none">
                  <i class="fa fa-plus"></i>
                </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            <li class="nav-item search-box">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                <i class="ti-search"></i>
              </a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter">
                <a class="srh-btn">
                  <i class="ti-close"></i>
                </a>
              </form>
            </li>
          </ul>

          <ul class="navbar-nav float-right">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle waves-effect waves-dark"
                href
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="mdi mdi-bell font-24"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle waves-effect waves-dark"
                href
                id="2"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="font-24 mdi mdi-comment-processing"></i>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown"
                aria-labelledby="2"
              >
                <ul class="list-style-none">
                  <li>
                    <div class>
                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-success btn-circle">
                            <i class="ti-calendar"></i>
                          </span>
                          <div class="m-l-10">
                            <h5 class="m-b-0">Event today</h5>
                            <span class="mail-desc">Just a reminder that event</span>
                          </div>
                        </div>
                      </a>

                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-info btn-circle">
                            <i class="ti-settings"></i>
                          </span>
                          <div class="m-l-10">
                            <h5 class="m-b-0">Settings</h5>
                            <span class="mail-desc">You can customize this template</span>
                          </div>
                        </div>
                      </a>

                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-primary btn-circle">
                            <i class="ti-user"></i>
                          </span>
                          <div class="m-l-10">
                            <h5 class="m-b-0">Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                          </div>
                        </div>
                      </a>

                      <a href="javascript:void(0)" class="link border-top">
                        <div class="d-flex no-block align-items-center p-10">
                          <span class="btn btn-danger btn-circle">
                            <i class="fa fa-link"></i>
                          </span>
                          <div class="m-l-10">
                            <h5 class="m-b-0">Luanch Admin</h5>
                            <span class="mail-desc">Just see the my new admin!</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                href
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  src="/assets/admin/images/users/1.jpg"
                  alt="user"
                  class="rounded-circle"
                  width="31"
                >
              </a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-user m-r-5 m-l-5"></i> My Profile
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-wallet m-r-5 m-l-5"></i> My Balance
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-email m-r-5 m-l-5"></i> Inbox
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-settings m-r-5 m-l-5"></i> Account Setting
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                </a>
                <div class="dropdown-divider"></div>
                <div class="p-l-30 p-10">
                  <a
                    href="javascript:void(0)"
                    class="btn btn-sm btn-success btn-rounded"
                  >View Profile</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item">
              <router-link :to="{ name: 'dashboard' }">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href
                  aria-expanded="false"
                >
                  <i class="mdi mdi-view-dashboard"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </router-link>
            </li>
            <li class="sidebar-item">
              <router-link :to="{ name: 'user' }">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-view-dashboard"></i>
                  <span class="hide-menu">Users</span>
                </a>
              </router-link>
            </li>
            <li class="sidebar-item">
              <router-link :to="{ name: 'Student' }">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="#"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-view-dashboard"></i>
                  <span class="hide-menu">Student</span>
                </a>
              </router-link>
            </li>

            <li class="sidebar-item">
              <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="javascript:void(0)"
                aria-expanded="false"
              >
                <i class="mdi mdi-receipt"></i>
                <span class="hide-menu">Forms</span>
              </a>
              <ul aria-expanded="false">
                <li class="sidebar-item">
                  <a href="form-basic.html" class="sidebar-link">
                    <i class="mdi mdi-note-outline"></i>
                    <span class="hide-menu">Form Basic</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="form-wizard.html" class="sidebar-link">
                    <i class="mdi mdi-note-plus"></i>
                    <span class="hide-menu">Form Wizard</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
              <a
                class="sidebar-link has-arrow waves-effect waves-dark"
                href="javascript:void(0)"
                aria-expanded="false"
              >
                <i class="mdi mdi-face"></i>
                <span class="hide-menu">Icons</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="icon-material.html" class="sidebar-link">
                    <i class="mdi mdi-emoticon"></i>
                    <span class="hide-menu">Material Icons</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="icon-fontawesome.html" class="sidebar-link">
                    <i class="mdi mdi-emoticon-cool"></i>
                    <span class="hide-menu">Font Awesome Icons</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="pages-elements.html"
                aria-expanded="false"
              >
                <i class="mdi mdi-pencil"></i>
                <span class="hide-menu">Elements</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ml-auto text-right">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <router-view></router-view>
      </div>

      <footer class="footer text-center">
        All Rights Reserved by Vue-admin. Designed and Developed by
        <a
          href="http://constituteweb.com"
        >S.J.</a>.
      </footer>
    </div>
  </div>
</template>

<script>
export default {
  // Our Javascript logic
};
</script>