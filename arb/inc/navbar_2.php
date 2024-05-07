 <!-- Preloader Start !-->
 <div id="preloader">
     <div id="preloader-status">
         <div class="loading-container">
             <div class="ball1"></div>
             <div class="ball2"></div>
             <div class="ball3"></div>
             <div class="ball4"></div>
         </div>
     </div>
 </div>
 <!-- Preloader End !-->
 <!-- Header Start !-->
 <header class="header-area style-three">
     <!-- Header Top Start -->
     <div class="header-top">
         <div class="container">
             <div class="row">
                 <div class="col-xl-8 col-lg-9 d-flex align-items-center justify-content-start">
                     <div class="header-top-info">
                         <div class="header-contact-info">
                             <span><span class="contact-info-item"><i class="fa-solid fa-location-dot"></i>JEDDAH</span></span>
                             <span><a href="mailto:hello@transico.com"><i class="fa-solid fa-envelope"></i>sales@alrashdi.com</a> </span>
                             <span><a href="tel:+123-456-7890"><i class="fa-solid fa-phone"></i>+966 50 99 666 28</a></span>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-3 d-flex align-items-center justify-content-end">
                     <div class="header-top-info">
                         <div class="social-profile">
                             <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                             <a href="#"><i class="fa-brands fa-twitter"></i></a>
                             <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                             <a href="#"><i class="fa-brands fa-youtube"></i></a>
                         </div>
                         <div class="header-top-btn">
                             <a href="../index.php">English</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header Top End -->
     <!-- Header Nav Menu Start -->
     <div class="header-menu-area sticky-header">
         <div class="container">
             <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-6 col-6 d-flex align-items-center">
                     <div class="logo">
                         <a href="index.php" class="standard-logo">
                             <img src="../images/logo/logo-2.png" alt="logo" />
                         </a>
                         <a href="index.php" class="sticky-logo">
                             <img src="../images/logo/logo-2.png" alt="logo" />
                         </a>
                         <a href="index.php" class="retina-logo">
                             <img src="../images/logo/logo-2.png" alt="logo" />
                         </a>
                     </div>
                 </div>
                 
                 <div class="col-xl-9 col-lg-9 col-md-6 col-6 d-flex align-items-center justify-content-end">
                     <div class="menu d-inline-block">
                         <nav id="main-menu" class="main-menu">
                             <ul>
                                 <?php $cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>
                                 <li class=""><a href="index.php">Home</a></li>
                                 <li class="<?php if (($cur_page == 'about.php')) {
                                                echo 'active';
                                            } ?>"><a href="about.php">About</a></li>
                                 <li class="dropdown <?php if (
                                                            $cur_page == 'branch.php' || $cur_page == 'products.php' ||
                                                            $cur_page == 'brown_black.php' || $cur_page == 'happy_booth.php' ||
                                                            $cur_page == 'grand_food.php'
                                                        ) {
                                                            echo 'active';
                                                        } ?>">
                                     <a href="branch.php">Division</a>
                                     <ul class="submenu">
                                         <li class="dropdown <?php if (($cur_page == 'branch.php' ||
                                                                    $cur_page == 'brown_black.php' || $cur_page == 'happy_booth.php' ||
                                                                    $cur_page == 'grand_food.php')) {
                                                                    echo 'active';
                                                                } ?>">
                                             <a href="branch.php">Branches</a>
                                             <ul class="submenu">
                                                 <li class="<?php if (($cur_page == 'brown_black.php')) {
                                                                echo 'active';
                                                            } ?>"><a href="brown_black.php">Brown Black</a>
                                                 </li>
                                                 <li class="<?php if (($cur_page == 'happy_booth.php')) {
                                                                echo 'active';
                                                            } ?>"><a href="happy_booth.php">Happy Booth</a>
                                                 </li>
                                                 <li class="<?php if (($cur_page == 'grand_food.php')) {
                                                                echo 'active';
                                                            } ?>"><a href="grand_food.php">Grand Food</a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class=""><a href="products.php">Products</a></li>
                                     </ul>
                                 </li>
                                 <li class=""><a href="contact.php">Contact</a></li>
                             </ul>
                         </nav>
                     </div>
                     <!-- Header Button Start !-->
                     <a href="tel:+123-456-7890" class="header-btn">
                         <div class="icon-wrapper">
                             <div class="icon">
                                 <img src="images/icon/phone.png" alt="phone" />
                             </div>
                         </div>
                         <div class="content-wrapper">
                             <span class="title">Got A Question?</span>
                             <span class="text">+966 50 99 666 28</span>
                         </div>
                     </a>
                     <!-- Header Button Start !-->
                     <!-- Mobile Menu Toggle Button Start !-->
                     <div class="mobile-menu-bar d-lg-none text-end">
                         <a href="#" class="mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                     </div>
                     <!-- Mobile Menu Toggle Button End !-->
                 </div>
             </div>
         </div>
     </div>
     <!-- Header Nav Menu End -->
 </header>
 <!-- Header End !-->
 <!-- Menu Sidebar Section Start -->
 <div class="menu-sidebar-area">
     <div class="menu-sidebar-wrapper">
         <div class="menu-sidebar-close">
             <button class="menu-sidebar-close-btn" id="menu_sidebar_close_btn">
                 <i class="fal fa-times"></i>
             </button>
         </div>
         <div class="menu-sidebar-content">
             <div class="menu-sidebar-logo">
                 <a href="index.php">
                     <img src="../images/logo/logo-2.png" alt="logo" />
                 </a>
             </div>
             <div class="mobile-nav-menu"></div>
             <div class="menu-sidebar-content">
                 <div class="menu-sidebar-single-widget">
                     <h5 class="menu-sidebar-title">Contact Info</h5>
                     <div class="header-contact-info">
                         <span><i class="fa-solid fa-location-dot"></i>JEDDAH</span>
                         <span><a href="mailto:hello@transico.com"><i class="fa-solid fa-envelope"></i>sales@alrashdi.com</a> </span>
                         <span><a href="tel:+123-456-7890"><i class="fa-solid fa-phone"></i>+966 50 99 666 28</a></span>
                     </div>
                     <div class="social-profile">
                         <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                         <a href="#"><i class="fa-brands fa-twitter"></i></a>
                         <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                         <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Menu Sidebar Section Start -->
 <div class="body-overlay"></div>

 <br>