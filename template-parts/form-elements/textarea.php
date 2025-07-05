<?php
$id = $args['id'] ?? 'textarea';
$name = $args['name'] ?? $id;
$label = $args['label'] ?? '';
$placeholder = $args['placeholder'] ?? '';
$required = $args['required'] ?? false;
$max = $args['max'] ?? 0;
$rows = $args['rows'] ?? 7;
?>

<div class="form-group">
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
    <?php if ($required) : ?><span class="required">(Required)</span><?php endif; ?>
  </label>
  <div class="textarea-container">
    <textarea
      id="<?php echo esc_attr($id); ?>"
      name="<?php echo esc_attr($name); ?>"
      placeholder="<?php echo esc_attr($placeholder); ?>"
      maxlength="<?php echo $max; ?>"
      rows="<?php echo $rows; ?>"
      data-counter="true"
      <?php echo $required ? 'required' : ''; ?>
    ></textarea>
    <?php if ($max > 0) : ?>
      <small id="<?php echo 'counter_' . esc_attr($id); ?>-counter" class="counter">0 / <?php echo $max; ?> characters</small>
    <?php endif; ?>
    </div>
</div>
