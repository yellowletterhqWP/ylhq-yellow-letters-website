<?php
$label = $args['label'] ?? 'Upload your files';
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
      <span>Drop or Drag your list here. Add as many lists as you want to make one large list:</span>
      <?php
      get_template_part( 'template-parts/button', null, array(
          'icon' => '',
          'title' => 'Upload files',
      ) );
      ?>
    </div>
  </div>
  <span class="upload-instructions">Please make sure the file format is CSV (XLS and XLSX are not accepted)*</span>
</div>
