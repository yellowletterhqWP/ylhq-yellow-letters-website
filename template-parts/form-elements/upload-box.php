<?php
$label = $args['label'] ?? 'Upload your files';
$placeholder = $args['label'] ?? '';
$description = $args['description'] ?? '';
$ext_list = $args['ext_list'] ?? '';
$type = $args['type'] ?? 'blue'; //another opt is white
?>

<div class="form-group uploadgroup">
  <label>
    <?php echo esc_html($label); ?>
  </label>
  <div class="uploadbox">
    <input type="file" name="upload_files[]" multiple>
    <div class="uploadbox-instructions">
      <div class="upload-icon">
        <img
				alt="Upload icon"
				src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/upload.svg"
				class="uploadbox-icon"
			/>
      </div>
      <span><?php echo esc_html($placeholder); ?></span>
      <span class="extlist"><?php echo esc_html($ext_list); ?></span>
      <?php
      if($type == 'white'){
        get_template_part( 'template-parts/form-elements/whitebutton', null, array(
            'icon' => '',
            'title' => 'Upload files',
        ) );
      }else{
        get_template_part( 'template-parts/form-elements/button', null, array(
            'icon' => '',
            'title' => 'Upload files',
        ) );
      }
      ?>
    </div>
  </div>
  <span class="upload-instructions"><?php echo esc_html($description); ?></span>
</div>
