<div id="author">
    <div class="authorContainer">
        <div class="authorBox">
            <?php echo get_avatar(get_the_author_meta('user_email'), 100, '', $display_name, array('class' => 'authorPhoto')); ?>
            <h1 class="authorName"><?php echo $display_name; ?></h1>
            <p class="authorRank"><?php echo implode(', ', $user_roles); ?></p>
            <p class="authorDesc">
                <?php
                if (!empty($description)) {
                    echo $description;
                } else {
                    echo 'Certainly, this author chooses to maintain a private perspective and may not wish to disclose personal details or thoughts to the public at this time.';
                }
                ?>
            </p>
        </div>
        <div class="authorInfo">
            <?php if (!empty($facebook_url)) : ?>
                <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" title="Facebook">
                    <i class='bx bxl-facebook'></i>
                </a>
            <?php endif; ?>

            <?php if (!empty($twitter_url)) : ?>
                <a href="<?php echo esc_url($twitter_url); ?>" target="_blank" title="Twitter">
                    <i class='bx bxl-twitter'></i>
                </a>
            <?php endif; ?>

            <?php if (!empty($linkedin_url)) : ?>
                <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" title="LinkedIn">
                    <i class='bx bxl-linkedin'></i>
                </a>
            <?php endif; ?>

            <?php if (!empty($youtube_url)) : ?>
                <a href="<?php echo esc_url($youtube_url); ?>" target="_blank" title="YouTube">
                    <i class='bx bxl-youtube'></i>
                </a>
            <?php endif; ?>

            <?php if (!empty($github_url)) : ?>
                <a href="<?php echo esc_url($github_url); ?>" target="_blank" title="Github">
                    <i class='bx bxl-github'></i>
                </a>
            <?php endif; ?>

            <?php if (!empty($telegram_url)) : ?>
                <a href="<?php echo esc_url($telegram_url); ?>" target="_blank" title="Telegram">
                    <i class='bx bxl-telegram'></i>
                </a>
            <?php endif; ?>

            <?php if (!empty($website_url)) : ?>
                <a href="<?php echo esc_url($website_url); ?>" target="_blank" title="Website">
                    <i class='bx bx-globe'></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>