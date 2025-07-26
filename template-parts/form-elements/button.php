<?php
$id = $args['id'] ?? '';
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$disabled = $args['disabled'] ?? false;
$type = $args['type'] ?? 'button'; // 'button', 'submit', or 'link'
?>

<div <?php echo $id === '' ? '' : 'id="' . esc_attr($id) . '"'; ?>
    class="blue-default-button <?php echo $disabled ? 'is-disabled' : ''; ?>"
    data-disabled="<?php echo $disabled ? 'true' : 'false'; ?>">

    <?php if ($type === 'link') : ?>
        <a href="#" <?php echo $disabled ? 'tabindex="-1"' : ''; ?>>
            <?php echo esc_html($title); ?>
        </a>
    <?php else : ?>
        <button type="<?php echo esc_attr($type); ?>"
                <?php echo $disabled ? 'disabled tabindex="-1"' : ''; ?>>
            <?php echo esc_html($title); ?>
        </button>
    <?php endif; ?>

    <?php if ($icon !== '') : ?>
        <img src="<?php echo esc_url($icon); ?>" alt="icon" />
    <?php endif; ?>
</div>
