  <!-- ////////////////////////////////////// SwiperJS ////////////////////////////////////// -->

  <!-- Swiper -->
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          <?php $args = array(
                'posts_per_page' => 10,
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            );

            $most_viewed_query = new WP_Query($args);

            if ($most_viewed_query->have_posts()) {
                while ($most_viewed_query->have_posts()) {
                    $most_viewed_query->the_post();
            ?>
                  <div class="swiper-slide">
                      <a href="<?php the_permalink(); ?>">
                          <?php if (has_post_thumbnail()) {
                                echo '<img class="postThumb" alt="' . get_the_title() . '" src="' . wp_get_attachment_url(get_post_thumbnail_id()) . '">';
                            } else {
                                echo '<img class="postThumb" alt="' . get_the_title() . '" src="' . esc_url($theme_directory_url) . '/img/no-thumb.webp">';
                            } ?>
                          <h2>
                              <span>
                                  <?php the_title(); ?>
                              </span>
                          </h2>
                      </a>
                  </div>
          <?php
                }
            }
            wp_reset_postdata();
            ?>
      </div>
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->
      <div class="swiper-pagination"></div>
  </div>