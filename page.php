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
        <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;">
            <div class="logo-stack">
                <div class="logo-row">
                    <span class="logo-jc">JC</span>
                    <svg class="logo-sprig" viewBox="0 0 40 60" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 55 Q 19 30 20 5" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>
                        <path d="M20 45 Q 14 42 8 38" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                        <path d="M20 45 Q 26 42 32 38" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                        <path d="M20 30 Q 15 27 10 23" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                        <path d="M20 30 Q 25 27 30 23" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                    </svg>
                </div>
                <span class="logo-caps">CONSULTING</span>
            </div>
        </a>
        <ul>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
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
    <p>&copy; 2026 JC Consulting. All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
