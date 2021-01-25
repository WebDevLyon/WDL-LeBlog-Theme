<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post my-5">
                        <div class="post__head text-center">
                            <h2 class="post__head__title">
                                <a href="#"><?php the_title(); ?></a>
                            </h2>
                            <div class="post__head__meta">
                                <p>
                                    By <a class="text-primary text-decoration-none" href="#" title="post by <?php the_author(); ?>" rel='author'><?php the_author(); ?></a> &bull;
                                    <?php the_date(); ?> &bull; <a class="text-primary text-decoration-none" href=" #"><?php echo get_comments_number(); ?> Comment<?php if (get_comments_number() > 1) {
                                                                                                                                                                        echo "s";
                                                                                                                                                                    } ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="post__content">
                            <?php the_post_thumbnail('', ['class' => 'w-100 h-auto']); ?>
                            <div class="post__content w-100">
                                <?php the_content(); ?>
                            </div>
                            <hr>
                            <div class="post__footer d-md-flex justify-content-between">
                                <div class="post__footer__category-list ">
                                    <i class="far fa-folder-open text-muted"></i><span class="ml-3"> <?php the_category(' &bull; '); ?></span>

                                </div>
                                <div class="post__footer__social-network text-right">
                                    <a class=' text-muted' href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class=' text-muted' href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class=' text-muted' href="#"><i class="fab fa-github"></i></a>
                                    <a class=' text-muted' href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post post__meta mt-5 d-md-flex justify-content-between align-items-center">
                        <?php echo get_avatar(get_the_author_meta('ID'), '', '', 'Gravatar de l\'autheur', ['class' => 'mx-3 rounded-circle']); ?>
                        <p class="post__meta__author mx-3 ">
                            <span class='h5'>About <?php echo '<span class="text-success text-capitalise">' . get_the_author_meta('nickname') . '</span></span>' . '<br>' . get_the_author_meta('description'); ?>
                                <!--Avec les étiquettes <?php the_tags(); ?>-->
                        </p>
                    </div>
                    <div class="post my-5">
                        <?php comments_template(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
        <!-- <aside class=" site__sidebar col-md-4 mt-md-5">
            <ul>
                <?php dynamic_sidebar('blog-sidebar'); ?>
            </ul>
        </aside>-->
    </div>
</div>
<?php get_footer(); ?>