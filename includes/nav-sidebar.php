<?php
$ID = '';
$ID = $_SESSION[ 'ID' ];
include_once( 'config.php' );
include_once( 'function.php' );
?>
<div class = 'sidebar-menu'>
<ul class = 'menu'>
<li class = 'sidebar-title'>Menu</li>

<li class = 'sidebar-item'>
<a href = 'index.php' class = 'sidebar-link'>
<i class = 'bi bi-grid-fill'></i>
<span>Dashboard</span>
</a>
</li>

<li class = 'sidebar-item'>
<a href = 'organizations.php' class = 'sidebar-link'>
<i class = 'fas fa-sitemap'></i>
<span>Organizations</span>
</a>
</li>

<li class = 'sidebar-item'>
<a href = 'user-management.php' class = 'sidebar-link'>
<i class = 'fas fa-users'></i>
<span>User Management</span>
</a>
</li>

<li class = 'sidebar-item'>
<a href = 'workflow-status.php' class = 'sidebar-link'>
<i class = 'fas fa-briefcase'></i>
<span>Workflow Status</span>
</a>
</li>

<li class = 'sidebar-item'>
<a href = 'logout.php' class = 'sidebar-link'>
<i class = 'fas fa-sign-out-alt'></i>
<span>Log out</span>
</a>
</li>

<?php
$user_type = get_user_type( $ID );
if ( $user_type == 'super-admin' ) {
    ?>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-stack'></i>
    <span>Components</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'component-alert.php'>Alert</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-badge.php'>Badge</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-breadcrumb.php'>Breadcrumb</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-button.php'>Button</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-card.php'>Card</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-carousel.php'>Carousel</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-dropdown.php'>Dropdown</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-list-group.php'>List Group</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-modal.php'>Modal</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-navs.php'>Navs</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-pagination.php'>Pagination</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-progress.php'>Progress</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-spinner.php'>Spinner</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'component-tooltip.php'>Tooltip</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-collection-fill'></i>
    <span>Extra Components</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'extra-component-avatar.php'>Avatar</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'extra-component-sweetalert.php'>Sweet Alert</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'extra-component-toastify.php'>Toastify</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'extra-component-rating.php'>Rating</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'extra-component-divider.php'>Divider</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-grid-1x2-fill'></i>
    <span>Layouts</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'layout-default.php'>Default Layout</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'layout-vertical-1-column.php'>1 Column</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'layout-vertical-navbar.php'>Vertical with Navbar</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'layout-horizontal.php'>Horizontal Menu</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-title'>Forms &amp;
    Tables</li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-hexagon-fill'></i>
    <span>Form Elements</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'form-element-input.php'>Input</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-element-input-group.php'>Input Group</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-element-select.php'>Select</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-element-radio.php'>Radio</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-element-checkbox.php'>Checkbox</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-element-textarea.php'>Textarea</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'form-layout.php' class = 'sidebar-link'>
    <i class = 'bi bi-file-earmark-medical-fill'></i>
    <span>Form Layout</span>
    </a>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-pen-fill'></i>
    <span>Form Editor</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'form-editor-quill.php'>Quill</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-editor-ckeditor.php'>CKEditor</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-editor-summernote.php'>Summernote</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'form-editor-tinymce.php'>TinyMCE</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'table.php' class = 'sidebar-link'>
    <i class = 'bi bi-grid-1x2-fill'></i>
    <span>Table</span>
    </a>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'table-datatable.php' class = 'sidebar-link'>
    <i class = 'bi bi-file-earmark-spreadsheet-fill'></i>
    <span>Datatable</span>
    </a>
    </li>

    <li class = 'sidebar-title'>Extra UI</li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-pentagon-fill'></i>
    <span>Widgets</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'ui-widgets-chatbox.php'>Chatbox</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'ui-widgets-pricing.php'>Pricing</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'ui-widgets-todolist.php'>To-do List</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-egg-fill'></i>
    <span>Icons</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'ui-icons-bootstrap-icons.php'>Bootstrap Icons </a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'ui-icons-fontawesome.php'>Fontawesome</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'ui-icons-dripicons.php'>Dripicons</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-bar-chart-fill'></i>
    <span>Charts</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'ui-chart-chartjs.php'>ChartJS</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'ui-chart-apexcharts.php'>Apexcharts</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'ui-file-uploader.php' class = 'sidebar-link'>
    <i class = 'bi bi-cloud-arrow-up-fill'></i>
    <span>File Uploader</span>
    </a>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-map-fill'></i>
    <span>Maps</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'ui-map-google-map.php'>Google Map</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'ui-map-jsvectormap.php'>JS Vector Map</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-title'>Pages</li>

    <li class = 'sidebar-item  '>
    <a href = 'application-email.php' class = 'sidebar-link'>
    <i class = 'bi bi-envelope-fill'></i>
    <span>Email Application</span>
    </a>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'application-chat.php' class = 'sidebar-link'>
    <i class = 'bi bi-chat-dots-fill'></i>
    <span>Chat Application</span>
    </a>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'application-gallery.php' class = 'sidebar-link'>
    <i class = 'bi bi-image-fill'></i>
    <span>Photo Gallery</span>
    </a>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'application-checkout.php' class = 'sidebar-link'>
    <i class = 'bi bi-basket-fill'></i>
    <span>Checkout Page</span>
    </a>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-person-badge-fill'></i>
    <span>Authentication</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'auth-login.php'>Login</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'auth-register.php'>Register</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'auth-forgot-password.php'>Forgot Password</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-item  has-sub'>
    <a href = '#' class = 'sidebar-link'>
    <i class = 'bi bi-x-octagon-fill'></i>
    <span>Errors</span>
    </a>
    <ul class = 'submenu '>
    <li class = 'submenu-item '>
    <a href = 'error-403.php'>403</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'error-404.php'>404</a>
    </li>
    <li class = 'submenu-item '>
    <a href = 'error-500.php'>500</a>
    </li>
    </ul>
    </li>

    <li class = 'sidebar-title'>Raise Support</li>

    <li class = 'sidebar-item  '>
    <a href = 'https://zuramai.github.io/mazer/docs' class = 'sidebar-link'>
    <i class = 'bi bi-life-preserver'></i>
    <span>Documentation</span>
    </a>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md' class = 'sidebar-link'>
    <i class = 'bi bi-puzzle'></i>
    <span>Contribute</span>
    </a>
    </li>

    <li class = 'sidebar-item  '>
    <a href = 'https://github.com/zuramai/mazer#donate' class = 'sidebar-link'>
    <i class = 'bi bi-cash'></i>
    <span>Donate</span>
    </a>
    </li>
    <?php }
    ?>

    </ul>
    </div>