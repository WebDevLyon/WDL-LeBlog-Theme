<?php
/*
  Template Name: Contact
  Template Post Type: post, page, product
*/
get_header();
?>
<div class="container">
    <div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post col-12 my-5">
                    <div class="post__head text-center">
                        <h2 class="post__head__title">
                            <a href="#"><?php the_title(); ?></a>
                        </h2>
                        <p>Une suggestion d'article ou sur le blog, des questions sur le domaine du Web, ou même une demande de prestation ? N'hésitez pas à me contacter via ce formulaire.</p>
                    </div>
                    <div class="post__content row">
                        <div class="post__content text-center col-md-6">
                            <?php the_content(); ?>
                        </div>
                        <div class="col-md-3 col-12 m-auto">
                            <div class="other-contact text-break">
                                <h2 class="head-secondary">D'autres moyens de contact:</h2>
                                <div>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill m-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg>
                                    <a href="mailto:contact@webdevlyon.fr">contact@webdevlyon.fr</a>
                                </div>
                                <div>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-window m-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                                        <path fill-rule="evenodd" d="M15 6H1V5h14v1z" />
                                        <path d="M3 3.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1.5 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                    </svg>
                                    <a href="http://webdevlyon.fr/">Le site Web Dev Lyon</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
        endif; ?>
                </div>
    </div>
</div>
<?php
get_footer();
?>