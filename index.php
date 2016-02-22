<?php
  get_header();
  global $post;
  $projects = get_posts(array(
    'post_type' => 'projects'
  ));
?>



  <!-- top area -->
  <section id="mainpage">
      <div class="container">
        <div class="row">
          <div class="subheader-holder">
            <h1>{ hi. i'm steve };</h1>
            <p>// wordpress developer</br>// boston</p>
          </div>
        </div>
      </div>
  </section>

  <!--portfolio section -->
  <section id="portfolio">
    <div class="container">

      <div class="row">
        <?php foreach($projects as $post):
          setup_postdata($post);
          $postImage = get_field('project_image');
        ?>
          <div class="portfolio-item">
            <div class="portfolio-item-content">
              <img src="<?php echo $postImage['sizes']['large']; ?>" />
              <div class="portfolio-overlay">
                <h1><?php the_title(); ?></h1>
                <span><?php the_excerpt(); ?></span>
              </div>
            </div>
          </div>
        <?php
          endforeach;
          //refresh the post data after overriding it
          wp_reset_postdata();
        ?>
      </div>



    </div>
  </section>

  <!-- contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <span>This is filler text</span>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
