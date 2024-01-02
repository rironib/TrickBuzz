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