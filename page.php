<?php
/**
 * Default template for static Pages (e.g. Contact, About, etc).
 * front-page.php handles the homepage separately, so adding this
 * file stops other Pages from incorrectly falling back to it.
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

<nav>
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;color:inherit;">JC SEO Consulting</a>
        </div>
        <ul>
            <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About</a></li>
            <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Services</a></li>
            <li><a href="<?php echo esc_url(home_url('/#results')); ?>">Results</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
        </ul>
    </div>
</nav>

<main style="margin-top: 80px;">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<footer>
    <p>&copy; 2026 JC SEO Consulting. All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
