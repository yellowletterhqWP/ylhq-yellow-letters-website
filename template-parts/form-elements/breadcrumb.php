<?php
// Usage: get_template_part('template-parts/breadcrumb', null, ['items' => [['label' => 'My Account', 'url' => '/my-account'], ['label' => 'My Orders']]]);
if (!isset($args['items']) || !is_array($args['items'])) return;

$items = $args['items'];
?>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ul class="breadcrumb-list">
        <?php foreach ($items as $index => $item): ?>
            <li class="breadcrumb-item">
                <?php if (!empty($item['url']) && $index !== array_key_last($items)): ?>
                    <a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a>
                <?php else: ?>
                    <span class="breadcrumb-current"><?php echo esc_html($item['label']); ?></span>
                <?php endif; ?>
            </li>
        <?php if ($index !== array_key_last($items)): ?>
            <li class="breadcrumb-separator">&gt;</li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>
