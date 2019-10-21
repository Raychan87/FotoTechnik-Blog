<!-- header.php aufrufen -->
<?php get_header(); ?> 

<!-- Der Loop wird in ein Container gepackt -->
<div class="container_mainloop"> 
    <div class="container_article">
        <!-- Der Loop läuft nur die Anzahl der angegeben Beiträge in den Einstellungen -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <!-- Ruft die Content.php Datei auf um die Beiträge bzw Seite aufzurufen -->
                <?php get_template_part('template_parts/content');?>
            
            <?php endwhile; else : ?>
                
                <!-- Fehlermeldung, es konnten keine Beiträge gefunden werden -->
                <?php get_template_part('template_parts/content','error');?>

        <?php endif; ?>
    </div>
    <!-- sidebar.php aufrufen -->
    <?php get_sidebar() ;?>
</div>

<!-- footer.php aufrufen -->
<?php get_footer(); ?>
