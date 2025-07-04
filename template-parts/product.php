<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$price = $args['price'] ?? '';
$link = $args['link'] ?? '';
?>

<div class="box-blue-box">
    <img src="<?php echo esc_html($icon); ?>" />
    <span class="box-title"><?php echo esc_html($title); ?></span>

    <div class="box-overlay">
    <div class="overlay-content">
      <h3><?php echo esc_html($title); ?></h3>
      <hr />
      <p class="price">Starts at <?php echo esc_html($price); ?>¢</p>
      <a href="<?php echo esc_html($link); ?>" class="shop-button">Shop Now</a>
    </div>
  </div>
</div>