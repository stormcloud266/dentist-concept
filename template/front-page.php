<?php get_header(); ?>
front page!

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

<div class="wrapper hero">
  <div class="hero__text">
    <h1><?php echo esc_attr( $hero['title'] ); ?></h1>
    <p><?php echo esc_attr( $hero['subtitle'] ); ?></p>
  </div>

  <div class="hero__image">
    <img src="<?php echo esc_url( $hero['image']['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $hero['image']['alt'] ); ?>">
  </div>
</div>





<hr><hr>


<!-- intro -->

<p><?php echo $intro['accent_text']; ?></p>
<h2><?php echo $intro['title']; ?></h2>
<p><?php echo $intro['body']; ?></p>

<img src="<?php echo $intro['image']['sizes']['large']; ?>" alt="<?php echo $intro['image']['alt']; ?>">

<hr><hr>

<!-- benefits -->


<p><?php echo $benefits['accent_text']; ?></p>
<h2><?php echo $benefits['main_title']; ?></h2>

<?php

$cards = $benefits['cards'];
foreach($cards as $card) {
    echo $card["card_title"];
    echo $card["card_body"];
    echo $card["icon"]["url"];
  }?>

<a href="<?php echo $benefits['link']['url']; ?>"><?php echo $benefits['link']['title']; ?></a>


<hr><hr>

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



  <!-- testimonials -->


<h2><?php echo $testimonials['title']; ?></h2>

<?php

$testimonial_collection = $testimonials['testimonial'];
foreach($testimonial_collection as $testimonial) {
    echo $testimonial["body"];
    echo $testimonial["name"];
  }?>


<?php get_footer(); ?>