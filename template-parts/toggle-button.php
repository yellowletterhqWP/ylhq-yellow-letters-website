<?php
$id = $args['id'] ?? 'toggle-' . uniqid();
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$badge = $args['badge'] ?? ''; // optional number to show
$disabled = $args['disabled'] ?? false;
$initial = $args['initial'] ?? false; // true = active
?>

<div id="<?php echo esc_attr($id); ?>"
     class="toggle-button <?php echo $disabled ? 'is-disabled' : ''; ?> <?php echo $initial ? 'is-active' : ''; ?>"
     data-disabled="<?php echo $disabled ? 'true' : 'false'; ?>"
     data-state="<?php echo $initial ? '1' : '0'; ?>">

    <?php if ($icon !== '') : ?>
        <img src="<?php echo esc_url($icon); ?>" alt="icon" />
    <?php endif; ?>
    
    <button type="button"><?php echo esc_html($title); ?></button>

    <?php if (!empty($badge)) : ?>
        <span class="toggle-badge"><?php echo esc_html($badge); ?></span>
    <?php endif; ?>

    <input type="hidden" name="<?php echo esc_attr($id); ?>_value" value="<?php echo $initial ? '1' : '0'; ?>">
</div>
