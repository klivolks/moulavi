<div id="main-wrapper">
<!-- ============================================================== --> 
<!-- Topbar header - style you can find in pages.scss --> 
<!-- ============================================================== -->
<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-light"> 
    <!-- ============================================================== --> 
    <!-- Logo --> 
    <!-- ============================================================== -->
    <div class="navbar-header"> <a class="navbar-brand" href="#"> 
      <b> 
      <img src="/assets/images/moulavi-loader.png" alt="homepage" class="dark-logo" style="width: 60px" /> 
      <!-- Light Logo icon --> 
      <img src="/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> </b> 
      <!--End Logo icon --> 
      <!-- Logo text --><span> 
      <!-- dark Logo text --> 
      <img src="/assets/images/moulavi-logo.png" alt="homepage" class="dark-logo" style="width: 170px;" /> 
      <!-- Light Logo text --> 
      <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> </div>
    <!-- ============================================================== --> 
    <!-- End Logo --> 
    <!-- ============================================================== -->
    <div class="navbar-collapse"> 
      <!-- ============================================================== --> 
      <!-- toggle and nav items --> 
      <!-- ============================================================== -->
      <ul class="navbar-nav mr-auto mt-md-0">
        <!-- This is  -->
        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        <!-- ============================================================== --> 
        <!-- Comment --> 
        <!-- ============================================================== -->
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
          <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
          </a>
          <div class="dropdown-menu mailbox animated slideInUp">
            <ul>
              <li>
                <div class="drop-title">New Clients</div>
              </li>
              <li>
                <div class="message-center"> 
                  <!-- Message -->
                  <?php
                      $db = new db;
                      $data = $db->get('clients','*',"WHERE 1 ORDER BY id DESC LIMIT 4");
                      foreach($data['result'] as $key => $rw):
                   ?>
                  <a href="javascript:void(0)">
                  <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                  <div class="mail-contnet">
                    <h5><?php echo $rw['client_name']; ?></h5>
                    <span class="mail-desc"><?php echo $rw['client_type']; ?></span> <span class="time"><?php echo date("d-m-Y", strtotime($rw['created_at'])); ?></span> </div>
                  </a>
                  <?php endforeach; ?>
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <!-- ============================================================== --> 
      <!-- User profile and search --> 
      <!-- ============================================================== -->
      <ul class="navbar-nav my-lg-0">
        <!-- ============================================================== --> 
        <!-- Search --> 
        <!-- ============================================================== -->
        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
          <form class="app-search" />
          
          <input type="text" class="form-control" placeholder="Search & enter" />
          <a class="srh-btn"><i class="ti-close"></i></a>
          </form>
        </li>
        <!-- ============================================================== --> 
        <!-- Profile --> 
        <!-- ============================================================== -->
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/profile.png" alt="user" class="profile-pic" /></a>
          <div class="dropdown-menu dropdown-menu-right scale-up">
            <ul class="dropdown-user">
              <li>
                <div class="dw-user-box">
                  <div class="u-img"><img src="/assets/images/users/profile.png" alt="user" /></div>
                  <div class="u-text">
                    <h4>
                      <?php $user = json_decode(user_name()); echo $user->Name; ?>
                    </h4>
                    <p class="text-muted"><?php echo $user->Email; ?></p>
                  </div>
                </div>
              </li>
              <li><a href="/functions/logout/"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
