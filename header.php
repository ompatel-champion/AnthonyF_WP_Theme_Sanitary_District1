<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sanitary_District_1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.typekit.net/lra1oze.css">
    <script src="https://kit.fontawesome.com/7f3916fdcd.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header">
    <div class="top-header">
        <div class="container">
            <nav>
                <ul>
                    <li>516-239-5600  </li>
                    <li><a href="#" class="facebook-icon"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="phone-icon"><i class="fas fa-phone"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="main-nav-wrapper">
        <div class="main_header_area animated">
            <div class="container">
                <nav id="navigation1" class="navigation">
                    <div class="nav-header">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div id="headerMainMenu" class="nav-menus-wrapper">
                        <?php
                        $args = array(
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_class' => 'nav-menus-wrapper',
                            'container_id'    => 'headerMainMenu',
                            'depth' => 0,
                            'walker' => new WP_Bootstrap_Mega_Navwalker(),
                            'menu_class'      => 'nav-menu align-to-right'
                        );

                        wp_nav_menu( $args );
                        ?>


                        <!--<ul class="nav-menu align-to-right">-->
                        <!--		<li><a href="#">Collection</a></li>-->
                        <!--		<li><a href="#">Recycling</a>-->
                        <!--					<div class="megamenu-panel">-->
                        <!--  					<div class="megamenu-lists container">-->
                        <!--    						<ul class="megamenu-list list-col-3">-->
                        <!--      						<li>-->
                        <!--                                  <a href="#">-->
                        <!--                                      <img src="https://sanitaryone.wpengine.com/wp-content/uploads/2021/03/garbage-truck-worker-scaled.jpg" alt="">-->
                        <!--                                      About Us 1-->
                        <!--                                  </a>-->
                        <!--                              </li>-->
                        <!--    						</ul>-->
                        <!--    						<ul class="megamenu-list list-col-3">-->
                        <!--      						<li>-->
                        <!--                                  <a href="#">-->
                        <!--                                      <img src="https://sanitaryone.wpengine.com/wp-content/uploads/2021/03/garbage-truck-worker-scaled.jpg" alt="">-->
                        <!--                                      Coming Soon Layout 1-->
                        <!--                                  </a>-->
                        <!--                              </li>-->
                        <!--    						</ul>-->
                        <!--    						<ul class="megamenu-list list-col-3">-->
                        <!--      						<li>-->
                        <!--                                  <a href="#">-->
                        <!--                                      <img src="https://sanitaryone.wpengine.com/wp-content/uploads/2021/03/garbage-truck-worker-scaled.jpg" alt="">-->
                        <!--                                      Contact Layout 1-->
                        <!--                                  </a>-->
                        <!--                              </li>-->
                        <!--    						</ul>-->
                        <!--  					</div>-->
                        <!--					</div>-->
                        <!--		</li>-->
                        <!--		<li><a href="#">Inside SD1</a></li>-->
                        <!--		<li><a href="#">News</a></li>-->
                        <!--		<li><a href="#">Support</a></li>-->
                        <!--		<li><a href="/bulk-trash-pickup/" class="bulk-btn quick-links"><i class="fas fa-calendar-alt"></i> <span>Bulk <br>Pickup</span></a></li>-->
                        <!--		<li><a href="#" class="pickup-btn quick-links"><i class="fas fa-search"></i> <span>Day of <br>Pickup</span></a></li>-->
                        <!--	</ul>-->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>