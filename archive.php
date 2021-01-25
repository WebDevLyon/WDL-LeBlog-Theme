<?php get_header(); ?>
<div class="container">
    <div class="d-flex flex-wrap justify-content-center">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post col-md-3 mx-3 my-3">
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
                    <div class="post__excerpt">
                        <?php the_post_thumbnail('', ['class' => 'w-100 h-auto']); ?>
                        <?php the_excerpt(); ?>
                        <p class="text-right">
                            <a class="post__excerpt__link btn btn-primary " href="<?php the_permalink() ?>">Lire l'article</a>
                        </p>
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
        <?php endwhile;
        endif; ?>

    </div>
    <div class="site__navigation">
        <div class="site__navigation__prev">
            <?php previous_posts_link('Page Précédente'); ?>
        </div>
        <div class="site__navigation__next">
            <?php next_posts_link('Page Suivante'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>