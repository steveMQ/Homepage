<?php get_header(); ?>

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
      <?php for ($i = 0; $i < 2; $i++): ?>
        <div class="row">
          <?php for ($j = 0; $j < 3; $j++): ?>
            <div class="portfolio-item">
              <div class="portfolio-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/narwhal.png" />
                <div class="portfolio-overlay">
                  <h1>Project Title</h1>
                  <span>short description of project</span>
                </div>
              </div>

            </div>
          <?php endfor; ?>
        </div>
      <?php endfor; ?>
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
