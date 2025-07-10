<?php
$headers = $args['headers'] ?? [];       // Kolom header
$title   = $args['title'] ?? 'Untitled'; // Judul produk
$minimum = $args['minimum'] ?? '';       // Tautan minimum
$rows    = $args['rows'] ?? [];          // Baris data
?>

<div class="pricing-table">
  <div class="pricing-header">
    <span class="product-title"><?php echo esc_html($title); ?></span>
    <?php if ($minimum): ?>
      <a href="#" class="minimum-link"><?php echo esc_html($minimum); ?></a>
    <?php endif; ?>
  </div>

  <div class="pricing-grid">
    <div class="pricing-grid-row header">
      <?php foreach ($headers as $header): ?>
        <div class="cell"><?php echo esc_html($header); ?></div>
      <?php endforeach; ?>
    </div>

    <?php foreach ($rows as $row): ?>
      <div class="pricing-grid-row">
        <?php foreach ($row as $cell): ?>
          <div class="cell"><?php echo esc_html($cell); ?></div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
