<?php
$headers = $args['headers'] ?? [];
$title   = $args['title'] ?? 'Untitled';
$subtitle   = $args['subtitle'] ?? 'Untitled';
$minimum = $args['minimum'] ?? '';
$rows    = $args['rows'] ?? [];
?>

<div class="ylhq-table">

  <?php if($title!=="" && $subtitle!=="" && $minimum!=="") : ?>
  <div class="ylhq-table-header">

    <div class="left-side-title">
      <span class="product-title"><?php echo esc_html($title); ?></span>
      <span class="divider">|</span>
      <?php if ($minimum): ?>
        <a href="#" class="minimum-link"><?php echo esc_html($minimum); ?></a>
      <?php endif; ?>
    </div>

    <div class="right-side-title"><?php echo esc_html($subtitle); ?></div>
  
  </div>
  <?php endif; ?>

  <div class="ylhq-table-grid">
    <div class="ylhq-table-grid-row header">
      <?php foreach ($headers as $header): ?>
        <div class="cell"><?php echo esc_html($header); ?></div>
      <?php endforeach; ?>
    </div>

    <?php foreach ($rows as $row): ?>
      <div class="ylhq-table-grid-row">
        <?php foreach ($row as $cell): ?>
          <div class="cell"><?php echo esc_html($cell); ?></div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
