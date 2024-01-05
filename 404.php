<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2274017621360737" data-overlays="bottom" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body>
    <div class="errorContainer">
        <img class="errorImage" src="<?php echo get_template_directory_uri(); ?>/img/404.svg" />
        <br />
        <br />
        <h3>
            The page you are looking for was not found.
            <br />
            It could be because the url is wrong or not available.
        </h3>
        <a class="errorButton" href="<?php echo esc_url(home_url('/')); ?>">Go Home</a>
    </div>
</body>

</html>