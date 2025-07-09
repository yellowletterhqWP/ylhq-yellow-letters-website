<?php
/* Template Name: Custom Register */

get_header();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = sanitize_text_field($_POST['full_name'] ?? '');
    $email    = sanitize_email($_POST['email_address'] ?? '');
    $phone    = sanitize_text_field($_POST['phone_number'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validasi input
    if (empty($fullname) || empty($email) || empty($password)) {
        $errors[] = 'Please fill in all required fields.';
    }

    if (!is_email($email)) {
        $errors[] = 'Invalid email address.';
    } elseif (email_exists($email)) {
        $errors[] = 'Email already in use.';
    }

    if (empty($errors)) {
        $username = sanitize_user(str_replace(' ', '', strtolower($fullname)));
        $user_id = wp_create_user($username, $password, $email);

        if (is_wp_error($user_id)) {
            foreach ($user_id->get_error_messages() as $message) {
                $errors[] = $message;
            }
        } else {
            update_user_meta($user_id, 'phone_number', $phone);
            update_user_meta($user_id, 'full_name', $fullname);

            //$success_message = 'User created successfully! Please login.';
            wp_redirect(home_url('/login'));
            exit;
        }
    }
}
?>

<main id="main" class="site-main">

  <div class="register-hero-background"></div>

  <div class="custom-register-wrapper">  

    <h1>My Account</h1>
    <span class="register-header-desc">Create an Account and Explore Yellow Letters’ Benefits.</span>
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
          Create Account
        </span>
        <span class="register-text-desc">
          Add your details to create an account.
        </span>
      </div>
      <div class="register-line-social-register">
        <img alt="Line116672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/line116672-7mz.svg">
      </div>

      <?php
      if(isset($success_message) || isset($errors)){
        get_template_part('template-parts/form-elements/notification', null, [
          'success_message' => $success_message,
          'errors' => $errors,
        ]);
      }
      ?>

      <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post" autocomplete="off" class="register-form">
        <div class="register-form-wrapper">
          <?php
            get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'full_name',
              'label' => 'Full Name',
              'placeholder' => 'Your full name',
              'required' => true
            ]);

            get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'email_address',
              'label' => 'Email Address',
              'placeholder' => 'Your Email Address',
              'required' => true
            ]);
            ?>
        </div>
        <div class="register-form-wrapper">
          <?php
            get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'phone_number',
              'label' => 'Phone Number',
              'placeholder' => 'Your Phone Number',
              'required' => true
            ]);

            get_template_part('template-parts/form-elements/inputbox', null, [
              'id' => 'password',
              'label' => 'Password',
              'placeholder' => 'Your Password',
              'type' => 'password',
              'required' => true,
              'strength' => true
            ]);
          ?>
        </div>

        <div class="register-button">
          <?php
          get_template_part( 'template-parts/button', null, array(
              'id' => 'register-button',
              'title' => 'Create Account',
              'type' => 'submit',
              'disabled' => false,
              'icon' => '',
          ) );
          ?>
          <span class="register-under-button">
            <span class="register-already-have-an-account">
              Already have an account?
            </span>
            <span><a href="../login" class="login-link-text">Login</a></span>
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
    </div>

</main>

<?php get_footer(); ?>
