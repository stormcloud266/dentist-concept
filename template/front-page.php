<?php get_header(); ?>

<?php
$hero = get_field('hero');
$intro = get_field('intro');
$benefits = get_field('benefits');
$doctors = get_field('doctors');
$services = get_field('services');
$testimonials = get_field('testimonials');

// echo '<pre>'; print_r($doctors); echo '</pre>';

?>

<!-- hero -->

<section class="wrapper wrapper--sm-on-md hero" role="banner">

  <div class="hero__image">
    <img src="<?php echo esc_url( $hero['image']['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $hero['image']['alt'] ); ?>">
  </div>

  <div class="text-block hero__text">
    <h1><?php echo esc_attr( $hero['title'] ); ?></h1>
    <p><?php echo esc_attr( $hero['subtitle'] ); ?></p>

    <div class="hero__buttons">
      <a href="/" class="btn btn--cta">Book Now</a>
      <a href="/">Learn More &rarr;</a>
    </div>
  </div>

</section>



<!-- intro -->

<section class="section flex flex--2 wrapper wrapper--sm-on-md intro">
  
  <div class="intro__image">
    <img 
    src="<?php echo esc_url( $intro['image']['sizes']['large'] ); ?>" 
    alt="<?php echo esc_attr( $intro['image']['alt'] ); ?>"
    >
  </div>

  <div class="text-block intro__text">
    <p class="accent-text"><?php echo esc_attr( $intro['accent_text'] ); ?></p>
    <h2 class="intro__title"><?php echo esc_attr( $intro['title'] ); ?></h2>
    <?php echo $intro['body']; ?>
  </div>

</section>



<!-- benefits -->

<section class="wrapper benefits">
  <p class="accent-text"><?php echo esc_attr( $benefits['accent_text'] ); ?></p>
  <h2 class="title-center"><?php echo esc_attr( $benefits['main_title'] ); ?></h2>

  <div class="flex flex--3 benefits__cards">

  <?php
    $cards = $benefits['cards'];
    foreach($cards as $card) { ?>
      <div class="card">
        <img src="<?php echo esc_url($card["icon"]["sizes"]["medium"]) ?>" alt="" class="card__icon">
        <h3 class="card__title"><?php echo esc_attr( $card["card_title"] ); ?></h3>
        <p class="card__body"><?php echo esc_attr( $card["card_body"] ); ?></p>
      </div>
   <?php } ?>

  </div>

  <a 
  href="<?php echo esc_url( $benefits['link']['url'] ); ?>"
  class="btn btn--cta"
  >
    <?php echo esc_attr( $benefits['link']['title'] ); ?>
  </a>
</section>





<!-- doctors -->

<section class="section-top wrapper doctors">

  <p class="accent-text">
    <?php echo esc_attr( $doctors['accent_text'] ); ?>
  </p>

  <h2 class="title-center">
    <?php echo esc_attr( $doctors['main_title'] ); ?>
  </h2>

  <div class="flex flex--3 doctors__cards">

  <?php
    $doctor_cards = $doctors['cards'];
    foreach($doctor_cards as $doctor_card) { ?>
      <div class="doctor-card">

        <div class="doctor-card__picture" style="background-image: url('<?php echo esc_url($doctor_card["picture"]["sizes"]["large"]) ?>')"></div>

        <div class="doctor-card__text">

          <div class="doctor-card__position">
            <p>
              <?php echo esc_attr( $doctor_card["position"] ); ?>
            </p>
          </div>

          <h3 class="doctor-card__title">
          <?php echo esc_attr( $doctor_card["full_name"] ); ?>
          </h3>

          <p class="doctor-card__body">
            <?php echo esc_attr( $doctor_card["info"] ); ?>
          </p>
        </div>
        
      </div>
   <?php } ?>

  </div>

</section>


<!-- services -->

<section class="section wrapper services">
  <p class="accent-text"><?php echo esc_attr( $services['accent_text'] ); ?></p>
  <h2 class="title-center"><?php echo esc_attr( $services['main_title'] ); ?></h2>

  <ul class="services__list">
  <?php

    $services_items = $services['cards'];
    foreach($services_items as $item) { ?>
        
        <li class="services__item">
          
          <div class="image-container">
            <img src="<?php echo esc_url( $card["icon"]["sizes"]["medium"] ); ?>" alt="">
          </div>

          <div class="services__text">
            <h3><?php echo esc_attr( $card["card_title"] ); ?></h3>
            <p><?php echo esc_attr( $card["card_body"] ); ?></p>
          </div>
        </li>

    <?php } ?>
  </ul>

</section>


<!-- testimonials -->

<section class="testimonials">

  <div class="testimonials__image" style="background-image: url('<?php echo esc_attr( $testimonials["image"]["sizes"]["large"] ); ?>')"></div>

  <div class="testimonials__right">
    <div class="text-block testimonials__text">

      <h2><?php echo esc_attr( $testimonials['title'] ); ?></h2>

      <?php

      $testimonial_collection = $testimonials['testimonial'];
      foreach($testimonial_collection as $testimonial) { ?>
        <div class="testimonials__testimonial">

          <p class="testimonials__body">
            <?php echo esc_attr( $testimonial["body"] ); ?>
          </p>

          <p class="testimonials__name">
            <?php echo esc_attr( $testimonial["name"] ); ?>
          </p>

        </div>
      <?php } ?>

      <div class="testimonials__buttons">
        <button id="prev">&lt;</button>
        <button id="next">&gt;</button>
      </div>

    </div>

  </div>
</section>


<?php get_footer(); ?>
