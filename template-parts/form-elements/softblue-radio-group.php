<?php
$group_id = $args['id'] ?? 'softblue-radio-group-' . uniqid();
$name     = $args['name'] ?? 'softblue-radio';
$options  = $args['options'] ?? []; // format: [ 'value' => 'Label', ... ]
$selected = $args['selected'] ?? ''; // default selected value
?>

<div id="<?php echo esc_attr($group_id); ?>" class="softblue-radio-group">
    <?php foreach ($options as $value => $label): ?>
        <label class="softblue-radio-option">
            <input
                type="radio"
                name="<?php echo esc_attr($name); ?>"
                value="<?php echo esc_attr($value); ?>"
                <?php checked($selected, $value); ?>
            />
            <span class="white-button-style"><?php echo esc_html($label); ?></span>
        </label>
    <?php endforeach; ?>
</div>
