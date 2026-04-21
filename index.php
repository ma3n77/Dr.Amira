<?php
/**
 * Default template - redirects to front page
 */
get_header();
?>
<main class="container" style="padding: 160px 32px 80px;">
    <h1>صفحة المدونة</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article style="margin-bottom: 32px; padding: 24px; background: var(--surface-white); border-radius: var(--radius-lg);">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
