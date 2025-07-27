<?php
/* Template Name: My Account */
get_header();

$page = $_GET['section'] ?? 'dashboard';

$allowed_pages = [
  'dashboard', 
  'my-orders', 
  'my-account-details',
  'support', 
  'support/tickets',
  'support/submit-ticket',
  'store-credits',
  'store-credits/coupon-card',
  'store-credits/credit-history',
  'other-options',
  'zap-coming-soon'
];

if (!in_array($page, $allowed_pages)) {
  $page = 'dashboard';
}

$page_path = get_template_directory() . '/account-pages/' . $page . '.php';
$page_path = str_replace('//', '/', $page_path);

if (file_exists($page_path)) {
  include $page_path;
} else {
  echo "<p>Page not found.</p>";
}

get_footer();
