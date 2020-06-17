<?php get_header(); ?>

    <div class="top_photo">
    <?php if ( get_header_image() ) : ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="top_logo" >
        <div class="photo_box">
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="夜景" class="top-image pc" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="夜景" class="top-image sp" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="" class="top_right pc" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="" class="top_right sp" >
        </div>
    <?php endif; ?>
    </div>

    <section>
    <?php if (have_posts ()): ?>
      <h2 class="sub-title">Latest</h2>

      <ul class="articles">
        <?php while(have_posts()): the_post(); ?>
           <li class="article">
             <a href="<?php the_permalink(); ?>">
               <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
               <?php else: ?>
                <img  class="article-img" src="<?php echo get_template_directory_uri(); ?>" alt="">
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

    <section>

     <h2 class="cotact-title">Contact</h2>

     <form action="" class="cotact-main">

      <input type="text" placeholder="お名前" class="contact-text">
      <input type="text" placeholder="メールアドレス" class="contact-text">
      <textarea name="t_name1" placeholder="お問い合わせ内容" class="contact-text"></textarea>

       <button>送信</button>

     </form>

    </section>

<?php get_footer(); ?>