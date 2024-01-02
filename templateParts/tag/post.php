<main>
    <div class="container">

        <h1>
            <?php single_tag_title(); ?>
        </h1>

        <div class="ads">
            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-2274017621360737" data-ad-slot="7108747523"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>">
                    <div class="postCard">
                        <?php if (has_post_thumbnail()) {
                            echo '<img class="postThumb" alt="' . get_the_title() . '" src="' . wp_get_attachment_url(get_post_thumbnail_id()) . '">';
                        } else {
                            echo '<img class="postThumb" alt="' . get_the_title() . '" src="' . esc_url($theme_directory_url) . '/img/no-thumb.webp">';
                        } ?>
                        <div class="postInfo">
                            <span class="postCat">
                                <?php
                                $categories = get_the_category();

                                if (!empty($categories)) {
                                    $category_name = esc_html($categories[0]->name);
                                    echo $category_name;
                                }
                                ?>
                            </span>
                            <h2 class="postName">
                                <?php the_title(); ?>
                            </h2>
                            <div class="postExcerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </a>

            <?php endwhile;
        else : ?>

            <div class="noResults">
                <?php _e('No results were found for your request!'); ?>
            </div>

        <?php endif; ?>

        <div class="ads">
            <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-2274017621360737" data-ad-slot="7108747523"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <?php pagination(); ?>

        <div class="ads">
            <!-- multiplex_horizontal -->
            <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-2274017621360737" data-ad-slot="6730253827"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

    </div>
</main>