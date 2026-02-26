<?php
get_header();
?>

<main>
    <?php get_template_part( 'template-parts/content', 'concept' ); ?>
    <?php get_template_part( 'template-parts/content', 'menu' ); ?>
    <?php get_template_part( 'template-parts/content', 'history' ); ?>
    <?php get_template_part( 'template-parts/content', 'vibe' ); ?>
    <?php get_template_part( 'template-parts/content', 'access' ); ?>
</main>

<?php
get_footer();
