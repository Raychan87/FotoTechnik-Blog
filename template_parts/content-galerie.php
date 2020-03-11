<?php
/* Inhalt eines ...*/?>
<article <?php post_class();?>>
    <div class="content-post">
        <div class="content-title"><?php 

            /* Überschrift des Beitrages */
            ?><h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1><?php
        ?></div><?php

        if (has_post_thumbnail()) {
            ?><div class ="content-thumb"><?php
                /* Beitragsbild anzeigen */
                the_post_thumbnail('fototechnik-blog-post-nav');
            ?></div><?php
        }?>
    </div>
</article>
