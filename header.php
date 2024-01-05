<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php wp_title(''); ?></title>
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link async href="https://fonts.googleapis.com/css2?family=Atomic+Age&family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

   <link rel="preconnect" href="https://unpkg.com">
   <link async href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2274017621360737" data-overlays="bottom" crossorigin="anonymous"></script>

   <script async src="<?php echo get_template_directory_uri();
                        ?>/scripts/main.js"></script>

   <?php wp_head(); ?>

</head>


<body>
   <!-- navbar -->
   <nav class="navbar">
      <div class="logo_item">
         <i class="bx bx-menu" id="sidebarOpen"></i>
         TrickBuzz
      </div>

      <form class="search_bar" action="<?php echo esc_url(home_url('/')); ?>">
         <input name="s" type="text" placeholder="Search" />
      </form>

      <div class="navbar_content">
         <i class='bx bx-bell'></i>
         <i class='bx bx-sun' id="darkLight"></i>
         <!-- <i class='bx bxs-grid-alt'></i> -->
         <?php
         if (is_user_logged_in()) {
            $current_user = wp_get_current_user();
            $avatar = get_avatar($current_user->ID, 65);
            echo $avatar;
         }
         ?>
      </div>
   </nav>