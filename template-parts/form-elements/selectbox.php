<?php
$id = $args['id'] ?? 'selectbox';
$name = $args['name'] ?? $id;
$label = $args['label'] ?? '';
$options = $args['options'] ?? [];
$required = $args['required'] ?? false;
$selected = $args['selected'] ?? null;
$placeholder = $args['placeholder'] ?? 'Please select';
?>

<div class="form-group">
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
    <?php if ($required) : ?><span class="required">(Required)</span><?php endif; ?>
  </label>
  <select id="<?php echo esc_attr($id); ?>" name="<?php echo esc_attr($name); ?>" <?php echo $required ? 'required' : ''; ?>>
    <option value=""><?php echo esc_html($placeholder); ?></option>
    <?php foreach($options as $opt): 
      $value = esc_attr($opt['value']);
      $text = esc_html($opt['label']);
      $isSelected = ($selected === $opt['value']) ? 'selected' : '';
    ?>
      <option value="<?php echo $value; ?>" <?php echo $isSelected; ?>>
        <?php echo $text; ?>
      </option>
    <?php endforeach; ?>
  </select>
</div>
