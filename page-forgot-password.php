<?php
/* Template Name: Custom Forgot Password */

get_header();
?>

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
        Forget Password
      </span>
      <span class="register-text-desc">
        Enter your email, and we'll send you a password reset link..
      </span>
    </div>

    <div class="register-line-social-register">
      <img alt="Line116672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/line116672-7mz.svg">
    </div>

    <?php
    if (isset($_GET['reset'])) {
      if ($_GET['reset'] === 'success') {
        $success_message = "We've sent you a password reset link. Please check your email.";
      } elseif ($_GET['reset'] === 'invalid') {
        $errors = ["Please enter a valid email address."];
      } elseif ($_GET['reset'] === 'notfound') {
        $errors = ["No user found with that email."];
      }
      get_template_part('template-parts/form-elements/notification', null, [
        'success_message' => $success_message,
        'errors' => $errors,
      ]);
    }
    ?>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="forgot-password-form" autocomplete="off">
      <input type="hidden" name="action" value="ylhq_forgot_password">
      <div class="forgot-password-wrapper">
      <?php
        get_template_part('template-parts/form-elements/inputbox', null, [
          'id' => 'email_address',
          'name' => 'user_email',
          'label' => 'Email Address',
          'placeholder' => 'Your Email Address',
          'required' => true
        ]);
      ?>
      </div>

      <div class="register-button">
      <?php
        get_template_part( 'template-parts/button', null, array(
            'icon' => '',
            'title' => 'Send Reset Password Link',
            'type' => 'submit',
            'disabled' => 'true',
            'id' => 'forgot-password-button'
        ) );
      ?>
      </div>
    </form>

    <div class="login-croped-helper"></div>
    <div class="register-croped-helper2"></div>
    <div class="register-croped-footer">
      <img alt="FooterLogoImage6672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/croped.svg" class="register-footer-croped-image">
    </div>
  </div>

<?php get_footer(); ?>
