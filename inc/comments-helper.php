<?php
if (!function_exists('better_commets')) :
    function better_comments($comment, $args, $depth)
    {
?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div class="comment ">
                <div class=" d-flex align-items-center my-2">
                    <?php echo get_avatar($comment, $size = '75', $default = 'http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g', '', ['class' => 'rounded-circle']); ?>
                    <div class='mx-2'><strong><?php echo get_comment_author() ?></strong><br>
                        <i class="far fa-calendar-alt"></i> <?php echo get_comment_date() . ' à ' . get_comment_time() ?></div>
                </div>
                <div class="comment-block">
                    <div class="comment-arrow"></div>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em class='text-warning'><?php esc_html_e('Votre commentaire est en cours de modération.', '5balloons_theme') ?></em>
                        <br />
                    <?php endif; ?>
                    <span class="comment-by">
                        <span class="float-right">
                            <span> <i class="fa fa-reply"></i> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
                        </span>
                    </span>
                    <p> <?php comment_text() ?></p>
                </div>
            </div>
            <hr>

    <?php
    }
endif;
