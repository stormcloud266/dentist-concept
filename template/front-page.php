<?php get_header(); ?>

<?php
$hero = get_field('hero');
$intro = get_field('intro');
$benefits = get_field('benefits');
$doctors = get_field('doctors');
$services = get_field('services');
$testimonials = get_field('testimonials');

// echo '<pre>'; print_r($benefits); echo '</pre>';

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
    <h2><?php echo esc_attr( $intro['title'] ); ?></h2>
    <?php echo $intro['body']; ?>
  </div>

</section>



<!-- benefits -->

<section class="wrapper benefits">
  <p class="accent-text"><?php echo esc_attr( $benefits['accent_text'] ); ?></p>
  <h2 class="benefits__title"><?php echo esc_attr( $benefits['main_title'] ); ?></h2>

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




<hr>
<!-- benefits -->


<p><?php echo $doctors['accent_text']; ?></p>
<h2><?php echo $doctors['main_title']; ?></h2>

<?php

$doctor_cards = $doctors['cards'];
foreach($doctor_cards as $card) {
    echo $card["position"];
    echo $card["full_name"];
    echo $card["info"];
    echo $card["picture"]["url"];
  }?>

<hr>
  <!-- services -->


<p><?php echo $services['accent_text']; ?></p>
<h2><?php echo $services['main_title']; ?></h2>

<?php

$services_cards = $services['cards'];
foreach($services_cards as $card) {
    echo $card["icon"]["url"];
    echo $card["card_title"];
    echo $card["card_body"];
  }?>


<hr>

  <!-- testimonials -->


<h2><?php echo $testimonials['title']; ?></h2>

<?php

$testimonial_collection = $testimonials['testimonial'];
foreach($testimonial_collection as $testimonial) {
    echo $testimonial["body"];
    echo $testimonial["name"];
  }?>


<?php get_footer(); ?>