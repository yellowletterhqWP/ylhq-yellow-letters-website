<?php
$id = $args['id'] ?? 'inputbox';
$name = $args['name'] ?? $id;
$label = $args['label'] ?? '';
$placeholder = $args['placeholder'] ?? '';
$type = $args['type'] ?? 'text';
$required = $args['required'] ?? false;
$strength = $args['strength'] ?? false;
$extra_class = ($type === 'date') ? 'datepicker' : '';
$icon = $args['icon'] ?? '';
?>

<div class="form-group inputbox-group">
    <label for="<?php echo esc_attr($id); ?>" class="inputbox-label">
        <?php echo esc_html($label); ?>
        <?php if ($required) : ?><span class="required">(Required)</span><?php endif; ?>
    </label>

    <div class="inputbox-container">

        <?php if ($icon !== '') : ?>
            <img src="<?php echo esc_url($icon); ?>" alt="icon" />
        <?php endif; ?>

        <input
            class="inputbox <?php echo esc_attr($extra_class); ?>"
            id="<?php echo esc_attr($id); ?>"
            name="<?php echo esc_attr($name); ?>"
            placeholder="<?php echo $placeholder; ?>"
            type="<?php echo esc_attr($type); ?>"
            <?php echo $required ? 'required' : ''; ?>
            autocomplete="new-password"
        />

        <?php if ($type=='password'): ?>
            <span class="toggle-password" onclick="togglePassword('<?php echo esc_attr($id); ?>', this)">
                <img
                alt="Vector6672"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/vector6672-lgn.svg"
                class="eye1-icon"
                />
                <img
                alt="Vector6672"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/vector6672-0jhh.svg"
                class="eye2-icon"
                />
            </span>
        <?php endif; ?>
    </div>
    <?php if ($strength): ?>
        <div class="password-strength-bar-steps" id="strength-<?php echo esc_attr($id); ?>">
            <div class="strength-dot dot-1"></div>
            <div class="strength-dot dot-2"></div>
            <div class="strength-dot dot-3"></div>
            <div class="strength-label" id="strength-label-<?php echo esc_attr($id); ?>">&nbsp;</div>
        </div>
    <?php endif; ?>

</div>
