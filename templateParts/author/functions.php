<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$user_info = get_userdata($curauth->ID);
$description = $user_info->description;
$display_name = $user_info->display_name;

// Get the author's roles
$user_roles = $curauth->roles;

// Get the author's ID
$author_id = $curauth->ID;

// Get the user's rank
$user_rank = get_user_meta($author_id, 'user_rank', true);

// Get social media and website links for the author
$facebook_url = get_the_author_meta('facebook', $author_id);
$twitter_url = get_the_author_meta('twitter', $author_id);
$linkedin_url = get_the_author_meta('linkedin', $author_id);
$youtube_url = get_the_author_meta('youtube', $author_id);
$github_url = get_the_author_meta('github', $author_id);
$telegram_url = get_the_author_meta('telegram', $author_id);
$website_url = get_the_author_meta('website', $author_id);

// Display all user roles
$all_user_roles = array('Subscriber', 'Contributor', 'Author', 'Editor', 'Administrator');
