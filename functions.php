<?php

// ******************* Custom fields to user profile page ******************* //
function add_user_social_fields($user)
{
?>
    <h3><?php _e('Social Media Links', 'trickbuzz'); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="facebook"><?php _e('Facebook Profile Link', 'trickbuzz'); ?></label></th>
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="twitter"><?php _e('Twitter Profile Link', 'trickbuzz'); ?></label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="linkedin"><?php _e('LinkedIn Profile Link', 'trickbuzz'); ?></label></th>
            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr(get_the_author_meta('linkedin', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="youtube"><?php _e('YouTube Channel Link', 'trickbuzz'); ?></label></th>
            <td>
                <input type="text" name="youtube" id="youtube" value="<?php echo esc_attr(get_the_author_meta('youtube', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="github"><?php _e('Github Profile Link', 'trickbuzz'); ?></label></th>
            <td>
                <input type="text" name="github" id="github" value="<?php echo esc_attr(get_the_author_meta('github', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="telegram"><?php _e('Telegram  Link', 'trickbuzz'); ?></label></th>
            <td>
                <input type="text" name="telegram" id="telegram" value="<?php echo esc_attr(get_the_author_meta('telegram', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="website"><?php _e('Website URL', 'trickbuzz'); ?></label></th>
            <td>
                <input type="url" name="website" id="website" value="<?php echo esc_url(get_the_author_meta('website', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
<?php
}
add_action('show_user_profile', 'add_user_social_fields');
add_action('edit_user_profile', 'add_user_social_fields');

// Save custom fields when the profile is updated
function save_user_social_fields($user_id)
{
    if (current_user_can('edit_user', $user_id)) {
        update_user_meta($user_id, 'facebook', sanitize_text_field($_POST['facebook']));
        update_user_meta($user_id, 'twitter', sanitize_text_field($_POST['twitter']));
        update_user_meta($user_id, 'linkedin', sanitize_text_field($_POST['linkedin']));
        update_user_meta($user_id, 'youtube', sanitize_text_field($_POST['youtube']));
        update_user_meta($user_id, 'github', sanitize_text_field($_POST['github']));
        update_user_meta($user_id, 'telegram', sanitize_text_field($_POST['telegram']));
        update_user_meta($user_id, 'website', esc_url($_POST['website']));
    }
}
add_action('personal_options_update', 'save_user_social_fields');
add_action('edit_user_profile_update', 'save_user_social_fields');



// ******************* Remove WP Core Emoji ******************* //
function remove_wp_emojicons()
{
    // Remove the emoji styles and scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove the emoji-related JavaScript from the HTML header
    remove_action('wp_head', 'wp_staticize_emoji');
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Remove the un-optimized JavaScript file
    wp_dequeue_script('emoji');
}
add_action('init', 'remove_wp_emojicons');



// ******************* Remove WP Default CSS ******************* //
function remove_default_styles()
{
    wp_deregister_style('global-styles');
    wp_deregister_style('classic-theme-styles');
}

add_action('wp_enqueue_scripts', 'remove_default_styles', 100);



// ******************* Remove WP Admin Bar ******************* //
show_admin_bar(false);




// ******************* Enable Post Thumbnails ******************* //
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('custom-thumb', 100, 60, true);
}




// ******************* Post View Count ******************* //
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count . ' ';
}

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}



// ******************* Custom Login Logo Link ******************* //
function custom_login_logo_url($url)
{
    return 'https://trickbuzz.net';
}
add_filter('login_headerurl', 'custom_login_logo_url');



// ******************* Custom Login Logo ******************* //
function custom_login_logo()
{
    echo '<style type="text/css">h1 a { background-image: url(' . get_bloginfo('template_directory') . '/img/login-logo.png) !important; background-size: 80% auto !important;
width: 280px !important; height: 75px !important; }</style>';
}
add_action('login_head', 'custom_login_logo');



// ******************* ChatGPT Pagination ******************* //
function pagination()
{
    global $wp_query;

    $big = 999999999;

    $paginate_links = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => true,
        'prev_text' => __('«'),
        'next_text' => __('»'),
    ));

    if ($paginate_links) {
        echo '<div class="pagination">';
        echo $paginate_links;
        echo '</div>';
    }
}



// ******************* Adsense Code Auto Inserter [adsense_article] ******************* //
function adsense_article_shortcode()
{
    ob_start(); ?>
    <div class="ads">
        <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-2274017621360737" data-ad-slot="7108747523"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('adsense_article', 'adsense_article_shortcode');
