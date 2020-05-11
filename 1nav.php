<!-- Navbar -->
<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>  
  
  <?php require_once('select/directv1.php');?>
  <?php require_once('select/directv2.php');?>
  <?php require_once('select/directv3.php');?>
  <?php require_once('select/antina1.php');?>
  <?php require_once('select/antina2.php');?>
  <?php require_once('select/antina3.php');?>
  <?php require_once('select/intv1.php');?>
  <?php require_once('select/intv2.php');?>
  <?php require_once('select/intv3.php');?>
  <?php require_once('select/metrotel1.php');?>
  <?php require_once('select/metrotel2.php');?>
  <?php require_once('select/metrotel3.php');?>
  <?php require_once('select/iplan1.php');?>
  <?php require_once('select/iplan2.php');?>
  <?php require_once('select/iplan3.php');?>
  <?php require_once('select/lapos1.php');?>
  <?php require_once('select/lapos2.php');?>
  <?php require_once('select/lapos3.php');?>
  <?php require_once('select/cablevision1.php');?>
  <?php require_once('select/cablevision2.php');?>
  <?php require_once('select/cablevision3.php');?>
  
  
  
  
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= IMG; ?>user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= IMG; ?>user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= IMG; ?>user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= IMG; ?>Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?= NAME; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= IMG; ?>usuarios.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= URL; ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= URL; ?>administraciontotal/" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Administración
                <span class="right badge badge-danger">Gestión</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                DIRECTV
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tabladirectv1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  
                  <input type="hidden" value="1" id="directv1" name="directv1">
                   <br>
			               <div id="directvlista1"></div>
              </a>
              </li>
              
               <li class="nav-item">
                <a href="<?= URL; ?>tabladirectv2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="directv2" name="directv2">
                   <br>
			               <div id="directvlista2"></div>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tabladirectv3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="directv3" name="directv3">
                   <br>
			               <div id="directvlista3"></div>
                </a>
              </li>
            </ul>
          </li>
            
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                ANTINA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tablaantina1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  <input type="hidden" value="1" id="antina1" name="antina1">
                   <br>
			               <div id="antinalista1"></div>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= URL; ?>tablaantina2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="antina2" name="antina2">
                   <br>
			               <div id="antinalista2"></div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tablaantina3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="antina3" name="antina3">
                   <br>
			               <div id="antinalista3"></div>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                INTV
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tablaintv1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  <input type="hidden" value="1" id="intv1" name="intv1">
                   <br>
			               <div id="intvlista1"></div>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= URL; ?>tablaintv2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="intv2" name="intv2">
                   <br>
			               <div id="intvlista2"></div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tablaintv3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="intv3" name="intv3">
                   <br>
			               <div id="intvlista3"></div>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                METROTEL
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tablametrotel1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  <input type="hidden" value="1" id="metrotel1" name="metrotel1">
                   <br>
			               <div id="metrotellista1"></div>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= URL; ?>tablametrotel2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="metrotel2" name="metrotel2">
                   <br>
			               <div id="metrotellista2"></div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tablametrotel3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="metrotel3" name="metrotel3">
                   <br>
			               <div id="metrotellista3"></div>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                IPLAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tablaiplan1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  <input type="hidden" value="1" id="iplan1" name="iplan1">
                   <br>
			               <div id="iplanlista1"></div>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= URL; ?>tablaiplan2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="iplan2" name="iplan2">
                   <br>
			               <div id="iplanlista2"></div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tablaiplan3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="iplan3" name="iplan3">
                   <br>
			               <div id="iplanlista3"></div>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                LAPOS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tablalapos1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  <input type="hidden" value="1" id="lapos1" name="lapos1">
                   <br>
			               <div id="laposlista1"></div>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= URL; ?>tablalapos2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="lapos2" name="lapos2">
                   <br>
			               <div id="laposlista2"></div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tablalapos3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="lapos3" name="lapos3">
                   <br>
			               <div id="laposlista3"></div>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                CABLEVISION
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= URL; ?>tablacablevision1/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 1</p>
                  <input type="hidden" value="1" id="cablevision1" name="cablevision1">
                   <br>
			               <div id="cablevisionlista1"></div>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= URL; ?>tablacablevision2/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 2</p>
                  <input type="hidden" value="1" id="cablevision2" name="cablevision2">
                   <br>
			               <div id="cablevisionlista2"></div>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= URL; ?>tablacablevision3/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TABLA 3</p>
                  <input type="hidden" value="1" id="cablevision3" name="cablevision3">
                   <br>
			               <div id="cablevisionlista3"></div>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>
            <!--<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>-->
        </ul>
        
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 