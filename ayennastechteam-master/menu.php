<?php $baseurl="http://localhost/ayennastechteam/"; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="<?php echo$baseurl;?>assets/images/favicon/favicon.png" rel="icon" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
    />
    <link rel="stylesheet" href="<?php echo$baseurl;?>assets/css/libraries.css" />
    <link rel="stylesheet" href="<?php echo$baseurl;?>assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
.checked {
  color: orange;
}
</style>
  <body>
    <div class="wrapper">
      <div class="preloader">
        <div class="loading">
          <span></span><span></span><span></span><span></span>
        </div>
      </div>
      <!-- /.preloader -->

      <!-- =========================
        Header
    =========================== -->
      <header class="header header-transparent header-full">
        <nav class="navbar navbar-expand-lg sticky-navbar">
          <div class="container">
            <a class="navbar-brand" href="<?php echo$baseurl;?>">
              <img
                src="<?php echo$baseurl;?>assets/images/logo/logo-light.png"
                class="logo-light"
                alt="logo"
              />
              <img
                src="<?php echo$baseurl;?>assets/images/logo/logo-dark.png"
                class="logo-dark"
                alt="logo"
              />
            </a>
            <button class="navbar-toggler" type="button">
              <span class="menu-lines"><span></span></span>
            </button>
            <div class="header__top-right">
              <ul
                class="list-unstyled d-flex justify-content-end align-items-center mb-0"
              >
               
                <li>
                  <ul
                    class="navbar-actions list-unstyled mb-0 d-flex align-items-center"
                  >
                    <li class="d-none d-xl-block">
                      <a
                        href="requestdemo.php"
                        class="btn action__btn-contact"
                        >Request A Quote</a
                      >
                    </li>
                    
                  </ul>
                  <!-- /.navbar-actions -->
                </li>
              </ul>
            </div>
            <!-- /.header-top-right -->
            <div class="collapse navbar-collapse" id="mainNavigation">
              <ul class="navbar-nav ml-auto">
                <li class="nav__item has-dropdown">
                  <a
                    href="<?php echo$baseurl;?>"
                    class="dropdown-toggle nav__item-link <?php if ($link=="home"){echo"active";}?> "
                    >Home</a
                  >
                </li>
                <!-- /.nav-item -->
                <li class="nav__item has-dropdown">
                  <a
                    href="about-us.php"
                  
                    class=" nav__item-link <?php if ($link=="about"){echo"active";}?> "
                    >About Us</a
                  >
  
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.nav-item -->
                  <li class="nav__item has-dropdown">
                  <a
                    href="it-solutions.html"
                    data-toggle="dropdown"
                    class="dropdown-toggle nav__item-link <?php if ($link=="services"){echo"active";}?> "
                    >Services</a
                  >
                  <ul class="dropdown-menu">  <li class="nav__item">
                      <a href="services.php" class="nav__item-link"
                        ><b>Our Services</b></a
                      >
                    </li>
                    <li class="nav__item"> 
                      <a href="webdevelopment.php" class="nav__item-link"
                        >Website Development</a
                      >
                    </li>
                   
                   <li class="nav__item">
                      <a href="appdevelopment.php" class="nav__item-link">App Development</a>
                    </li>
                   <li class="nav__item">
                      <a href="ecommercedevelopment.php" class="nav__item-link">Ecommerce Development</a> 
                    </li>
                   <li class="nav__item">
                      <a href="dapp.php" class="nav__item-link">NFT & dAPP Development</a>
                    </li>
                    <li class="nav__item">
                      <a href="digitalmarketing.php" class="nav__item-link">Digital Marketing </a>
                    </li>
                    <!-- /.nav-item -->
                    <li class="nav__item">
                      <a href="otherservices.php" class="nav__item-link">Other Services</a>
                    </li>
                    <!-- /.nav-item -->
                  </ul>
                  <!-- /.dropdown-menu -->
                </li>
 
                <!-- /.nav-item -->
                <li class="nav__item">
                  <a href="portfolio.php" class="nav__item-link  <?php if ($link=="portfolio"){echo"active";}?>"
                    >Portfolio</a
                  >
                </li>
              

                <!-- /.nav-item -->
                <li class="nav__item ">
                  <a href="contact.php" class="nav__item-link <?php if ($link=="contact"){echo"active";}?>">Contact Us</a>
                </li>
                <!-- /.nav-item -->
              </ul>
              <!-- /.navbar-nav -->
              <button class="close-mobile-menu d-block d-lg-none">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /.navbar-collapse -->
            
          <!-- /.container -->
        </nav>
        <!-- /.navabr -->
      </header>
      <!-- /.Header -->