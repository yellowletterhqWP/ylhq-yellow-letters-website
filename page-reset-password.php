<?php
/* Template Name: Custom Reset Password */

get_header();
?>

<main id="main" class="site-main">
  
  <div class="register-hero-background"></div>

  <div class="custom-register-wrapper">  

    <h1>My Account</h1>
    <span class="register-header-desc">Login to manage your account</span>
    <img
      alt="RightImage6672"
      src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/rightimage6672-cck6-300w.png"
      class="register-right-image"
    />
    <img
      alt="LeftImage6672"
      src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/leftimage6672-vfcz-300w.png"
      class="register-left-image"
    />

    <div class="register-register-form forgot-page">
      <div class="register-asset-header"></div>
    
      <div class="register-header-form">
        <span class="register-text-header">
          New Password
        </span>
        <span class="register-text-desc">
          Your password should be strong and easy to remember.
        </span>
      </div>

      <div class="register-line-social-register">
        <img alt="Line116672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/line116672-7mz.svg">
      </div>

      <?php
      if (isset($_GET['key']) && isset($_GET['login'])) {
        $reset_key = sanitize_text_field($_GET['key']);
        $login     = sanitize_text_field($_GET['login']);
      } else {
        $errors = ["Invalid password reset link."];
      }

      get_template_part('template-parts/form-elements/notification', null, [
        'success_message' => $success_message,
        'errors' => $errors,
      ]);
      ?>

      <?php if (isset($_GET['key']) && isset($_GET['login'])) : ?>
      <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="reset-password-form" autocomplete="off">
        <input type="hidden" name="action" value="ylhq_reset_password">
        <input type="hidden" name="reset_key" value="<?php echo esc_attr($reset_key); ?>">
        <input type="hidden" name="login" value="<?php echo esc_attr($login); ?>">
        
        <div class="forgot-password-wrapper">
        <?php
          get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'password1',
              'name' => 'new_password',
              'label' => 'New Password',
              'placeholder' => 'New Password',
              'type' => 'password',
              'required' => true,
              'strength' => true
            ]);
        
          get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'password2',
              'name' => 'confirm_password',
              'label' => 'Confirm New Password',
              'placeholder' => 'Confirm New Password',
              'type' => 'password',
              'required' => true,
              'strength' => false
            ]);
        ?>
        </div>
        
        <div class="register-button">
        <?php
          get_template_part( 'template-parts/button', null, array(
              'icon' => '',
              'title' => 'Save New Password',
              'type' => 'submit',
              'disabled' => 'true',
              'id' => 'save-new-password-button'
          ) );
        ?>
        </div>
      </form>
      <?php endif; ?>

      <?php
        get_template_part( 'template-parts/croped-footer');
      ?>
    </div>
</main>

<?php get_footer(); ?>
