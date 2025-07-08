<?php
$success_message = $args['success_message'] ?? '';
$errors = $args['errors'] ?? [];
?>

<div class="form-messages">
    <?php if (!empty($success_message)) : ?>
    <div class="message message-success"><?php echo esc_html($success_message); ?></div>
    <?php endif; ?>
    <?php if (!empty($errors)) : ?>
    <div class="message message-error">
        <?php foreach ($errors as $err) : ?>
        <?php echo esc_html($err); ?><br>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>