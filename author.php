<?php 
    get_header(); 

    // contact info
    $author_id = get_the_author_meta('ID');
    $avatar = get_avatar($author_id, array('size' => 450));
    $display_name = get_the_author_meta( 'display_name' , $author_id );
    $last_name = get_the_author_meta( 'last_name' , $author_id );
    $first_name = get_the_author_meta( 'first_name' , $author_id );
    $name_en = get_the_author_meta( 'name_en' , $author_id );
    $ig = get_the_author_meta( 'url' , $author_id );
    $jpsummary = get_the_author_meta( 'user_profile_summary' , $author_id );
    $ensummary = get_the_author_meta( 'user_profile_summary_en' , $author_id );
?>

    <!-- @main -->
    <main class="memberpage">
        <!-- detail// -->
        <setion class="detail">
            <div class="detail_container">
                <div class="detail_profile">
                    <div class="detail_heading c-heading">
                        <span></span>
                        <h2>PROFILE</h2>
                    </div>

                    <div class="detail_profile_inner">
                        <div class="detail_profile_left">
                            <figure>
                                <?= $avatar; ?> 
                            </figure>
                        </div>
                        <div class="detail_profile_right">
                            <div class="detail_profile_author">
                                <div class="jpname">
                                    <p class="last_name"><?= $last_name; ?></p>
                                    <p class="first_name"><?= $first_name; ?></p>
                                </div>
                                <div class="enname">
                                    <span>|</span>
                                    <p><?= $name_en; ?></p>
                                </div>
                                <?php if (!empty($ig)) : ?>
                                <a href="<?= $ig; ?>" class="insta" target="_blank"
                                    rel="noopener noreferrer">
                                    <svg id="insta" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20">
                                        <g id="Group_76" data-name="Group 76">
                                            <g id="Group_73" data-name="Group 73">
                                                <path id="Path_16" data-name="Path 16"
                                                    d="M38.583,44H29.417A5.423,5.423,0,0,1,24,38.583V29.417A5.423,5.423,0,0,1,29.417,24h9.166A5.423,5.423,0,0,1,44,29.417v9.167A5.423,5.423,0,0,1,38.583,44ZM29.417,25.667a3.754,3.754,0,0,0-3.75,3.75v9.167a3.754,3.754,0,0,0,3.75,3.75h9.166a3.754,3.754,0,0,0,3.75-3.75V29.417a3.754,3.754,0,0,0-3.75-3.75Z"
                                                    transform="translate(-24 -24)" />
                                            </g>
                                            <g id="Group_74" data-name="Group 74" transform="translate(5 5)">
                                                <path id="Path_17" data-name="Path 17"
                                                    d="M49,54a5,5,0,1,1,5-5A5.006,5.006,0,0,1,49,54Zm0-8.333A3.333,3.333,0,1,0,52.333,49,3.337,3.337,0,0,0,49,45.667Z"
                                                    transform="translate(-44 -44)" />
                                            </g>
                                            <g id="Group_75" data-name="Group 75" transform="translate(14.167 3.542)">
                                                <circle id="Ellipse_5" data-name="Ellipse 5" cx="1.146" cy="1.146"
                                                    r="1.146" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </div>

                            <div class="detail_profile_history">
                                <div class="detail_profile_content jphistory">
                                    <p>
                                        <?= $jpsummary; ?>
                                    </p>
                                </div>
                                <div class="detail_profile_content enhistory">
                                    <p>
                                        <?= $ensummary; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- # -->
                <div class="detail_works">
                    <div class="detail_heading c-heading">
                        <span></span>
                        <h2>WORKS</h2>
                    </div>

                    <div class="detail_works_list">
                        <?php 
                            $author_posts1 = array(
                                'post_type'=> 'post',
                                'orderby'    => 'ID',
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'posts_per_page' => -1,
                                'author'        =>  $author_id, 
                            );
                            $author_posts = new WP_Query( $author_posts1 );
                            if ( $author_posts-> have_posts() ) : 
                                $i =0;
                                while( $author_posts->have_posts() ) :
                                    $author_posts->the_post();
                                    $thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                        ?>

                        <div class="detail_works_items" data-work-items>
                            <div class="detail_works_content" data-popup-toggler="<?= $i; ?>">
                                <figure>
                                    <img class="lazy" data-src="<?= $thumbnail; ?>" alt="<?= the_title(); ?>" width="380" height="213.75" loading="lazy">
                                </figure>
                                <p><?= the_title(); ?></p>
                            </div>
                            <!-- // -->
                            <div class="detail_popup" data-popup="<?= $i ?>">
                                <div class="detail_popup_close" data-popup-close>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="detail_popup_wrapper">
                                    <div class="detail_popup_inner">
                                        <div class="detail_popup_content">
                                            <div class="detail_popup_video" data-popup-video>
                                                <?php 
                                                    if( post_password_required() ) :
                                                ?>  
                                                <p class="title hide"><?php echo the_title(); ?></p>
                                                <?= get_the_content(); ?>
                                                <?php else: ?>
                                                <p class="title"><?= the_title(); ?></p>
                                                <iframe width="560" height="315"
                                                    src="<?= get_the_content(); ?>"
                                                    title="<?= the_title(); ?>" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                                </iframe>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                    $i++;
                                    endwhile;
                                else: echo '<p class="nofound">No works found</p>';
                            endif; wp_reset_postdata();
                        ?>
                    </div>

                    <div class="detail_loading" data-work-loading>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43.841" height="22.628"
                            viewBox="0 0 43.841 22.628">
                            <g id="Group_79" data-name="Group 79" transform="translate(-698.08 -2990.793)">
                                <line id="Line_8" data-name="Line 8" y2="30"
                                    transform="translate(698.787 2991.5) rotate(-45)" fill="none" stroke="#000"
                                    stroke-linecap="square" stroke-width="1" />
                                <line id="Line_9" data-name="Line 9" x1="30"
                                    transform="translate(720 3012.713) rotate(-45)" fill="none" stroke="#000"
                                    stroke-linecap="square" stroke-width="1" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </setion>
        <!-- //detail -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>