<?php
$text = $args['text'] ?? 'This is an info tooltip';
?>

<span class="info-icon" tabindex="0">
  i
  <span class="info-tooltip"><?php echo esc_html($text); ?></span>
</span>
