<?php
$text = $args['text'] ?? 'This is a helper';
?>

<small class="helper-text"><?php echo esc_html($text); ?></small>