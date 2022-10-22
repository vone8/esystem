<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rating - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <link rel="stylesheet" href="assets/vendors/rater-js/style.css" />

    <link
      rel="stylesheet"
      href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap-icons/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
  </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="index.php"
                  ><img src="assets/images/logo/logo.png" alt="Logo" srcset=""
                /></a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item">
                <a href="index.php" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Components</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="component-alert.php">Alert</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-badge.php">Badge</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-breadcrumb.php">Breadcrumb</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-button.php">Button</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-card.php">Card</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-carousel.php">Carousel</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-dropdown.php">Dropdown</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-list-group.php">List Group</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-modal.php">Modal</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-navs.php">Navs</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-pagination.php">Pagination</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-progress.php">Progress</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-spinner.php">Spinner</a>
                  </li>
                  <li class="submenu-item">
                    <a href="component-tooltip.php">Tooltip</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item active has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-collection-fill"></i>
                  <span>Extra Components</span>
                </a>
                <ul class="submenu active">
                  <li class="submenu-item">
                    <a href="extra-component-avatar.php">Avatar</a>
                  </li>
                  <li class="submenu-item">
                    <a href="extra-component-sweetalert.php">Sweet Alert</a>
                  </li>
                  <li class="submenu-item">
                    <a href="extra-component-toastify.php">Toastify</a>
                  </li>
                  <li class="submenu-item active">
                    <a href="extra-component-rating.php">Rating</a>
                  </li>
                  <li class="submenu-item">
                    <a href="extra-component-divider.php">Divider</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Layouts</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="layout-default.php">Default Layout</a>
                  </li>
                  <li class="submenu-item">
                    <a href="layout-vertical-1-column.php">1 Column</a>
                  </li>
                  <li class="submenu-item">
                    <a href="layout-vertical-navbar.php"
                      >Vertical with Navbar</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="layout-horizontal.php">Horizontal Menu</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-title">Forms &amp; Tables</li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-hexagon-fill"></i>
                  <span>Form Elements</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="form-element-input.php">Input</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-element-input-group.php">Input Group</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-element-select.php">Select</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-element-radio.php">Radio</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-element-checkbox.php">Checkbox</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-element-textarea.php">Textarea</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="form-layout.php" class="sidebar-link">
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Form Layout</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-pen-fill"></i>
                  <span>Form Editor</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="form-editor-quill.php">Quill</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-editor-ckeditor.php">CKEditor</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-editor-summernote.php">Summernote</a>
                  </li>
                  <li class="submenu-item">
                    <a href="form-editor-tinymce.php">TinyMCE</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="table.php" class="sidebar-link">
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Table</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="table-datatable.php" class="sidebar-link">
                  <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                  <span>Datatable</span>
                </a>
              </li>

              <li class="sidebar-title">Extra UI</li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-pentagon-fill"></i>
                  <span>Widgets</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="ui-widgets-chatbox.php">Chatbox</a>
                  </li>
                  <li class="submenu-item">
                    <a href="ui-widgets-pricing.php">Pricing</a>
                  </li>
                  <li class="submenu-item">
                    <a href="ui-widgets-todolist.php">To-do List</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-egg-fill"></i>
                  <span>Icons</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="ui-icons-bootstrap-icons.php">Bootstrap Icons </a>
                  </li>
                  <li class="submenu-item">
                    <a href="ui-icons-fontawesome.php">Fontawesome</a>
                  </li>
                  <li class="submenu-item">
                    <a href="ui-icons-dripicons.php">Dripicons</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-bar-chart-fill"></i>
                  <span>Charts</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="ui-chart-chartjs.php">ChartJS</a>
                  </li>
                  <li class="submenu-item">
                    <a href="ui-chart-apexcharts.php">Apexcharts</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="ui-file-uploader.php" class="sidebar-link">
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>File Uploader</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-map-fill"></i>
                  <span>Maps</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="ui-map-google-map.php">Google Map</a>
                  </li>
                  <li class="submenu-item">
                    <a href="ui-map-jsvectormap.php">JS Vector Map</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-title">Pages</li>

              <li class="sidebar-item">
                <a href="application-email.php" class="sidebar-link">
                  <i class="bi bi-envelope-fill"></i>
                  <span>Email Application</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="application-chat.php" class="sidebar-link">
                  <i class="bi bi-chat-dots-fill"></i>
                  <span>Chat Application</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="application-gallery.php" class="sidebar-link">
                  <i class="bi bi-image-fill"></i>
                  <span>Photo Gallery</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="application-checkout.php" class="sidebar-link">
                  <i class="bi bi-basket-fill"></i>
                  <span>Checkout Page</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Authentication</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="auth-login.php">Login</a>
                  </li>
                  <li class="submenu-item">
                    <a href="auth-register.php">Register</a>
                  </li>
                  <li class="submenu-item">
                    <a href="auth-forgot-password.php">Forgot Password</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-x-octagon-fill"></i>
                  <span>Errors</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="error-403.php">403</a>
                  </li>
                  <li class="submenu-item">
                    <a href="error-404.php">404</a>
                  </li>
                  <li class="submenu-item">
                    <a href="error-500.php">500</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-title">Raise Support</li>

              <li class="sidebar-item">
                <a
                  href="https://zuramai.github.io/mazer/docs"
                  class="sidebar-link"
                >
                  <i class="bi bi-life-preserver"></i>
                  <span>Documentation</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a
                  href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md"
                  class="sidebar-link"
                >
                  <i class="bi bi-puzzle"></i>
                  <span>Contribute</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a
                  href="https://github.com/zuramai/mazer#donate"
                  class="sidebar-link"
                >
                  <i class="bi bi-cash"></i>
                  <span>Donate</span>
                </a>
              </li>
            </ul>
          </div>
          <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
          </button>
        </div>
      </div>
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rating</h3>
                <p class="text-subtitle text-muted">
                  Rating with <a href="">rater-js</a>. Pure javascript rating
                  library
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Rating
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <section class="section">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Basic Rating</h4>
                  </div>
                  <div class="card-body">
                    <div id="basic"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">5 Star Rating with Step</h4>
                  </div>
                  <div class="card-body">
                    <div id="step"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Unlimited Number of Stars</h4>
                  </div>
                  <div class="card-body">
                    <div id="unli1"></div>
                    <br />
                    <div id="unli2"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"><i class="bi bi-heart"></i></span> by
                <a href="http://ahmadsaugi.com">A. Saugi</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/rater-js/rater-js.js"></script>
    <script src="assets/js/extensions/rater-js.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
