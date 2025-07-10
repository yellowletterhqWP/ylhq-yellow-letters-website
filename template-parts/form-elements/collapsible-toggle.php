<?php
$id = $args['id'] ?? 'collapsible-' . uniqid();
$label = $args['label'] ?? 'Toggle';
$content = $args['content'] ?? '';
?>

<div id="<?php echo esc_attr($id); ?>" class="collapsible-toggle-wrapper">
  <button class="collapsible-toggle-button" aria-expanded="false">
    <span class="label"><?php echo esc_html($label); ?></span>
    <span class="icon">▾</span>
  </button>
  <div class="collapsible-toggle-content">
    <?php echo $content; ?>
  </div>
</div>
