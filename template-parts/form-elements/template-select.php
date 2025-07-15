<?php
$title = $args['title'] ?? '';
$id    = $args['id'] ?? '';
$name  = $args['name'] ?? 'softblue-radio-box[]';
$checked = $args['checked'] ?? false;
?>

<label class="button-radio">
<input
    type="radio"
    id="<?php echo esc_attr($id); ?>"
    name="<?php echo esc_attr($name); ?>"
    value="<?php echo esc_attr($id); ?>"
    <?php checked($checked); ?>
  >  
  
  <span class="button-style tenplate-categories-label"><?php echo esc_html($title); ?></span>

</label>
