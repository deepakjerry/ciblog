<!doctype html>
<html lang="en">


<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url()?>/admin/assets/images/favicon.ico" type="image/x-icon">


  <!-- Libs CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/admin/assets/libs/fullcalendar/main.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/admin/assets/libs/quill/dist/quill.snow.css">




  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/admin/assets/css/theme.min.css">
  <title>Dashboard E-commerce - Influence Bootstrap Admin Dashboard Template</title>


</head>

<body>
  <!-- ============================================================== -->
  <!-- main wrapper -->
  <!-- ============================================================== -->
  <div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- Top header default -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="<?=base_url() ?>/admin/dashboard"><img src="<?=base_url()?>/admin/assets/images/logo.png" alt=""></a>
        <div class="ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top flex-row ">
            <li class="nav-item d-none d-lg-block">
              <div id="custom-search" class="top-search-bar">
                <input class="form-control" type="text" placeholder="Search..">
              </div>
            </li>
            <li class="nav-item dropdown notification order-4 ">
              <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                  class="indicator"></span></a>
              <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                <li>
                  <div class="notification-title"> Notification</div>
                  <div class="notification-list">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="<?=base_url()?>/admin/assets/images/avatar-2.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy
                              Rakestraw</span>accepted your invitation to join the team.
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="<?=base_url()?>/admin/assets/images/avatar-3.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">John
                              Deo</span>is now following you
                            <div class="notification-date">2 days ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="<?=base_url()?>/admin/assets/images/avatar-4.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan
                              Pechi</span> is watching your main repository
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="notification-info">
                          <div class="notification-list-user-img"><img src="<?=base_url()?>/admin/assets/images/avatar-5.jpg" alt=""
                              class="avatar-xs rounded-circle"></div>
                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica
                              Caruso</span>accepted your invitation to join the team.
                            <div class="notification-date">2 min ago</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="list-footer"> <a href="#">View all notifications</a></div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown connection d-none d-md-block">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
              <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                <li class="connection-list">
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="<?=base_url()?>/admin/assets/images/github.png" alt="">
                        <span>Github</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="<?=base_url()?>/admin/assets/images/dribbble.png" alt="">
                        <span>Dribbble</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="<?=base_url()?>/admin/assets/images/dropbox.png" alt="">
                        <span>Dropbox</span></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="<?=base_url()?>/admin/assets/images/bitbucket.png" alt="">
                        <span>Bitbucket</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="<?=base_url()?>/admin/assets/images/mail_chimp.png"
                          alt=""><span>Mail chimp</span></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                      <a href="#" class="connection-item"><img src="<?=base_url()?>/admin/assets/images/slack.png" alt="">
                        <span>Slack</span></a>
                    </div>
                  </div>
                </li>
                <li class="connection-footer">
                  <div><a href="#">More</a></div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown nav-user order-lg-4 ">
              <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img src="<?=base_url()?>/admin/assets/images/avatar-1.jpg" alt=""
                  class="avatar-xs rounded-circle"></a>
              <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                  <h5 class="mb-0 text-white nav-user-name">John Deo</h5>
                  <span class="status"></span><span>Available</span>
                </div>
                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- ============================================================== -->
    <!-- Top header default -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
      <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none text-white" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
              <li class="nav-divider">
                Menu
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#" aria-expanded="false"
                  data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard
                  </a>
                
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                  aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Blog Managment</a>
                <div id="submenu-3" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="<?=  base_url()?>/admin/blog-list">Blog List</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="<?=  base_url()?>/admin/add-blog">Add Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url() ?>/admin/blog-category">Category</a>
                    </li>
                   
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4"
                  aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                <div id="submenu-4" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/bootstrap-touchspin.html">Bootstrap Touchspin</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5"
                  aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                <div id="submenu-5" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="pages/general-table.html">General Tables</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-divider">
                Features
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6"
                  aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                <div id="submenu-6" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/login.html">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/404-page.html">404 page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/timeline.html">Timeline</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/calendar.html">Calendar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/widgets.html">Widgets</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/tags-input.html">Tags Input</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7"
                  aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps
                <div id="submenu-7" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="pages/inbox.html">Inbox</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/layouts.html"><i class="fas fa-fw fa-columns"></i>Layouts <span
                    class="badge badge-secondary">New</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8"
                  aria-controls="submenu-8"><i class="fas fa-fw fa-flag"></i>Icons</a>
                <div id="submenu-8" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9"
                  aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                <div id="submenu-9" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://preview.easetemplate.com/influence/html/docs/index.html"><i class="fas fa-fw fa-clipboard"></i>Docs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10"
                  aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                <div id="submenu-10" class="collapse submenu">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Level 1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                        data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                      <div id="submenu-11" class="collapse submenu">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Level 1</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Level 2</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Level 3</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->