<?php if (is_search()): ?>
  <article>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt(); ?>
  </article>
<?php else: ?>
  <?php the_content(); ?>
<?php endif; ?>
