<?php
$id = $args['id'] ?? 'inputbox';
$name = $args['name'] ?? $id;
$label = $args['label'] ?? '';
$placeholder = $args['placeholder'] ?? '';
$required = $args['required'] ?? false;
?>

<div class="form-group">
    <label for="<?php echo esc_attr($id); ?>">
        <?php echo esc_html($label); ?>
        <?php if ($required) : ?><span class="required">(Required)</span><?php endif; ?>
    </label>
    <input
        class="inputbox"
        id="<?php echo esc_attr($id); ?>"
        name="<?php echo esc_attr($name); ?>"
        placeholder="<?php echo esc_attr($placeholder); ?>"
        <?php echo $required ? 'required' : ''; ?>
    ></input>
</div>
