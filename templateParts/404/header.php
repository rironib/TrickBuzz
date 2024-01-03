<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();
                                                        ?>/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();
                                                            ?>/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();
                                                            ?>/icons/favicon-16x16.png">
    <link rel="manifest" href="http://localhost/wp/wp-content/themes/DSM/icons/site.webmanifest">
    <link rel="mask-icon" href="http://localhost/wp/wp-content/themes/DSM/icons/safari-pinned-tab.svg" color="#04aa6d">
    <link rel="shortcut icon" href="http://localhost/wp/wp-content/themes/DSM/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="http://localhost/wp/wp-content/themes/DSM/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>