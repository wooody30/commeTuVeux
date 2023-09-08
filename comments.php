<div id="commentaires" class="comments">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments__title">
            <?php echo get_comments_number(); // Nombre de commentaires ?> Commentaires éclairés de notre communauté
        </h2>

        <ol class="comment__list">
            <?php
            // La fonction qui liste les commentaires
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ) );
            ?>
        </ol>

    <?php
    // S'il n'y a pas de commentaires
    else :
        ?>
        <p class="comments__none">
            Personne n'a osé prendre la parole, ne soyez pas des moutons, libérez votre parole !
        </p>
    <?php endif; ?>

    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>

</div>
