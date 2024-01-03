<main>
    <div class="container">

        <div class="ads">
            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-2274017621360737" data-ad-slot="7108747523"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="content">
                    <div class="singleInfo">
                        <div class="postCat">
                            <?php the_category(' › ') ?>
                        </div>
                        <h1 class="postTitle">
                            <?php the_title(); ?>
                        </h1>
                        <div class="singleMeta">
                            <div class="singleMetaAuthor">
                                <i class='bx bx-user'></i>
                                <?php the_author(); ?>
                            </div>
                            <div class="postMetaViews">
                                <i class='bx bx-calendar'></i>
                                <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
                            </div>
                            <div class="postMetaViews">
                                <i class='bx bx-analyse'></i>
                                <?php echo getPostViews(get_the_ID()); ?>
                            </div>
                            <?php if (is_user_logged_in()) : ?>
                                <div class="postMetaEdit">
                                    <i class='bx bx-pencil'></i> <a href="<?php echo get_edit_post_link(); ?>">Edit</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="postContent">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="ads">
                    <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-2274017621360737" data-ad-slot="7108747523"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="singleAuthorBox">
                    <?php echo get_avatar(get_the_author_meta('email'), '65'); ?>
                    <div class="singleAuthorInfo">
                        <div class="singleAuthorName">
                            <?php the_author(); ?>
                        </div>
                        <div class="singleAuthorDesc">
                            <?php the_author_meta('description');
                            if (!get_the_author_meta('description'))
                                _e('Certainly, this author chooses to maintain a private perspective and may not wish to disclose personal details or thoughts to the public at this time.'); ?>
                        </div>
                        <div class="singleAuthorLinks">
                            <?php
                            $author_id = get_the_author_meta('ID');
                            $author_posts_url = get_author_posts_url($author_id);
                            ?>
                            <a href="<?php echo esc_url($author_posts_url); ?>">
                                <span class=" viewAllLink">
                                    View all posts
                                </span>
                            </a>
                            <a href="#">
                                <i class='bx bx-globe'></i>
                            </a>
                            <a href="#">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="#">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ads">
                    <!-- multiplex_horizontal -->
                    <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-2274017621360737" data-ad-slot="6730253827"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

        <?php endwhile;
        endif; ?>

    </div>
</main>