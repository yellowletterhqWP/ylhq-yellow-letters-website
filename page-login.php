<?php
/* Template Name: Custom Login */

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

    <div class="register-register-form">
      <div class="register-asset-header"></div>

      <div class="register-header-form">
        <span class="register-text-header">
          Log in to Yellowletters
        </span>
        <span class="register-text-desc">
          Welcome back! Please enter your details
        </span>
      </div>

      <div class="register-line-social-register">
        <img alt="Line116672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/line116672-7mz.svg">
      </div>

      <?php
      if (isset($_GET['login']) && $_GET['login'] === 'failed'){
        $errors[] = 'Invalid email or password.';
      }

      get_template_part('template-parts/form-elements/notification', null, [
        'success_message' => $success_message,
        'errors' => $errors,
      ]);
      ?>

      <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" autocomplete="off" class="login-form">
        <input type="hidden" name="action" value="custom_user_login"> <!-- its a must -->
        <div class="login-form-wrapper">
          <?php
            get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'email_address',
              'name' => 'log',
              'label' => 'Email Address',
              'placeholder' => 'Your Email Address',
              'required' => true
            ]);

            get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'password',
              'name' => 'pwd',
              'label' => 'Password',
              'placeholder' => 'Your Password',
              'type' => 'password',
              'required' => true,
              'strength' => false
            ]);
            ?>
        </div>

        <div class="login-password-options">
          <div class="login-remembermecontainer">
            <input type="checkbox" class="login-check" />
            <span class="login-rememberme-text">Remember me</span>
          </div>
          <div class="login-forgotpasswordcontainer">
            <a href="../forgot-password" class="login-link-text">
              forget password?
            </a>
          </div>
        </div>

        <div class="register-button">
          <?php
          get_template_part( 'template-parts/form-elements/button', null, array(
              'icon' => '',
              'title' => 'Login',
              'type' => 'submit',
              'disabled' => 'true',
              'id' => 'login-button'
          ) );
          ?>
          <span class="register-under-button">
            <span class="register-already-have-an-account">
              Don't have an account?
            </span>
            <span><a href="../register" class="login-link-text">Create</a></span>
          </span>
        </div>
      </form>

      <div class="register-line-social-register">
        <img alt="Line116672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/line116672-7mz.svg">
      </div>

      <div class="register-social-links">
        <button class="register-socialcontainer">
          <img alt="Google Icon" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/google-icon.png" class="vector-sociallink">
          <span class="register-text40">
            Login with Google
          </span>
        </button>
        <button class="register-socialcontainer">
          <img alt="Vector6672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/facebook-icon.png" class="vector-sociallink">
          <span class="register-text41">
            Login with facebook
          </span>
        </button>
      </div>
      
      <?php
        get_template_part( 'template-parts/croped-footer');
      ?>

  </main>

<?php get_footer(); ?>
