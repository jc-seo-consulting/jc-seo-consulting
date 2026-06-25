<?php
/**
 * Fallback template (required by WordPress for every theme).
 * This site only has one page of content, so it mirrors front-page.php.
 */
?><!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/homepage-content'); ?>

<?php wp_footer(); ?>
</body>
</html>
