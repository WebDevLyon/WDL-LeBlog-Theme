<ul class="comment-list comments">
    <h2><?php comments_number('Pas de commentaire', 'Commentaire ( 1 )', 'Commentaires ( ' . get_comments_number() . ' )') ?></h2>
    <hr>
    <?php
    wp_list_comments(array(
        'style'      => 'ul',
        'callback' => 'better_comments'
    ));
    ?>
</ul><!-- .comment-list -->

<?php comment_form(['class' => 'w-100']); // Le formulaire d'ajout de commentaire 
?>