<body>
    <div class="page">
<!-- Main Navbar-->
      <header class="header">
        <nav class="navbar" style="background-color: #006F45">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid" style="background-color: #006F45">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><img style="height: 50px;width: 50px" src="<?php echo base_url();?>assets/template/img/unj.png" width="1200px" class="image1"></div>
                  <div class="brand-text d-none d-lg-inline-block" style="margin-left: 10px"><span>Sistem Informasi Alumni </span></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>TS</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <!-- Logout    -->
                <li class="nav-item"><a href="<?php echo site_url('Login/logout') ?>" class="nav-link logout"> <span class="d-none d-sm-inline" >Keluar</span><i class="fas fa-sign-out-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
 