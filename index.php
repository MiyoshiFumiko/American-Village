<?php get_header(); ?>

    <div>
    <?php if ( get_header_image() ) : ?>
      <img src="<?php header_image(); ?>"  alt="" class="top-image">
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="犬" class="top-image">
    <?php endif; ?>
    </div>
    
    <p>進化し続ける「街」アメリカンビレッジマガジン</p>

    <section>
    <?php if (have_posts ()): ?>
      <h2 class="sub-title">Latest Articles</h2>

      <ul class="articles">
        <?php while(have_posts()): the_post(); ?>
           <li class="article">
             <a href="<?php the_permalink(); ?>">
               <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
               <?php else: ?>
                <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="">
               <?php endif; ?>
              </a>
               <p><?php the_excerpt(); ?></p>
               <p class="read-more"> <a href="<?php the_permalink(); ?>">Read More</a></p>
             
           </li>
        <?php endwhile; ?>
      
    <?php else: ?>
      <p>最近の投稿はありません</p>
    <?php endif; ?>

      </ul>
    </section>

    

<?php get_footer(); ?>