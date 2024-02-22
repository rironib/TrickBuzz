 <!-- sidebar -->
 <nav id="sidebar">
     <div class="menu_content">
         <ul class="menu_items">
             <div class="menu_title"></div>
             <li class="item">
                 <a href="<?php echo esc_url(home_url('/')); ?>" class="nav_link">
                     <span class="navlink_icon">
                         <i class="bx bx-home-alt"></i>
                     </span>
                     <span class="navlink">Home</span>
                 </a>
             </li>

             <?php
                if (is_user_logged_in()) {
                    echo '<li class="item">
                            <a href="' . esc_url(home_url()) . '/wp-admin/" class="nav_link">
                                <span class="navlink_icon">
                                    <i class="bx bxs-dashboard"></i>
                                </span>
                                <span class="navlink">Panel</span>
                            </a>
                        </li>';
                } else {
                    echo '<li class="item">
                            <a href="' . esc_url(home_url()) . '/wp-login.php" class="nav_link">
                                <span class="navlink_icon">
                                    <i class="bx bx-log-in"></i>
                                </span>
                                <span class="navlink">Login</span>
                            </a>
                        </li>';
                }
                ?>
         </ul>

         <ul class="menu_items">
             <div class="menu_title menu_category"></div>
             <li class="item">
                 <div href="#" class="nav_link submenu_item">
                     <span class="navlink_icon">
                         <i class='bx bxl-wordpress'></i>
                     </span>
                     <span class="navlink">WordPress</span>
                     <i class="bx bx-chevron-right arrow-left"></i>
                 </div>

                 <ul class="menu_items submenu">
                     <a href="<?php echo home_url(); ?>/wp/theme/" class="nav_link sublink">Theme</a>
                     <a href="<?php echo home_url(); ?>/wp/plugin/" class="nav_link sublink">Plugin</a>
                 </ul>
             </li>

             <li class="item">
                 <div href="#" class="nav_link submenu_item">
                     <span class="navlink_icon">
                         <i class='bx bxl-docker'></i>
                     </span>
                     <span class="navlink">CMS</span>
                     <i class="bx bx-chevron-right arrow-left"></i>
                 </div>

                 <ul class="menu_items submenu">
                     <a href="<?php echo home_url(); ?>/cms/php/" class="nav_link sublink">PHP Script</a>
                     <a href="<?php echo home_url(); ?>/cms/whmcs/" class="nav_link sublink">WHMCS</a>
                     <a href="<?php echo home_url(); ?>/cms/drupal/" class="nav_link sublink">Drupal</a>
                     <a href="<?php echo home_url(); ?>/cms/joomla/" class="nav_link sublink">Joomla</a>
                     <a href="<?php echo home_url(); ?>/cms/magento/" class="nav_link sublink">Magento</a>
                     <a href="<?php echo home_url(); ?>/cms/opencart/" class="nav_link sublink">OpenCart</a>
                     <a href="<?php echo home_url(); ?>/cms/prestashop/" class="nav_link sublink">PrestaShop</a>
                     <a href="<?php echo home_url(); ?>/cms/shopify/" class="nav_link sublink">Shopify</a>
                     <a href="<?php echo home_url(); ?>/cms/blogger/" class="nav_link sublink">Blogger</a>
                 </ul>
             </li>
         </ul>
         <ul class="menu_items">
             <div class="menu_title menu_setting"></div>
             <li class="item">
                 <a href="#" class="nav_link">
                     <span class="navlink_icon">
                         <i class="bx bx-medal"></i>
                     </span>
                     <span class="navlink">Award</span>
                 </a>
             </li>
             <li class="item">
                 <a href="#" class="nav_link">
                     <span class="navlink_icon">
                         <i class="bx bx-cog"></i>
                     </span>
                     <span class="navlink">Setting</span>
                 </a>
             </li>
         </ul>

         <ul class="menu_items">
             <div class="menu_title menu_misc"></div>

             <li class="item">
                 <div href="#" class="nav_link submenu_item">
                     <span class="navlink_icon">
                         <i class='bx bx-link'></i>
                     </span>
                     <span class="navlink">Pages</span>
                     <i class="bx bx-chevron-right arrow-left"></i>
                 </div>

                 <ul class="menu_items submenu">
                     <a href="<?php echo home_url(); ?>/about-us/" class="nav_link sublink">About us</a>
                     <a href="<?php echo home_url(); ?>/contact/" class="nav_link sublink">Contact</a>
                     <a href="<?php echo home_url(); ?>/newsletter/" class="nav_link sublink">Newsletter</a>
                     <a href="<?php echo home_url(); ?>/privacy-policy/" class="nav_link sublink">Privacy Policy</a>
                     <a href="<?php echo home_url(); ?>/deletion-request/" class="nav_link sublink">Delete Post</a>
                     <a href="<?php echo home_url(); ?>/sitemap/" class="nav_link sublink">Sitemap</a>
                 </ul>
             </li>

             <li class="item">
                 <div href="#" class="nav_link submenu_item">
                     <span class="navlink_icon">
                         <i class='bx bx-link-external'></i>
                     </span>
                     <span class="navlink">Links</span>
                     <i class="bx bx-chevron-right arrow-left"></i>
                 </div>
                 <ul class="menu_items submenu">
                     <a href="https://app.trickbuzz.net/" target="_blank" class="nav_link sublink">App</a>
                     <a href="https://blog.trickbuzz.net/" target="_blank" class="nav_link sublink">Blog</a>
                 </ul>
             </li>
         </ul>

         <!-- Sidebar Open / Close -->
         <div class="bottom_content">
             <div class="bottom expand_sidebar">
                 <span> Expand</span>
                 <i class='bx bxs-right-arrow'></i>
             </div>
             <div class="bottom collapse_sidebar">
                 <span> Collapse</span>
                 <i class='bx bxs-left-arrow'></i>
             </div>
         </div>
     </div>
 </nav>