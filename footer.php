<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YLHQ-Yellow-Letter-Website
 */

?>

	<div class="login-footer">
		<div class="footer-background">
			<img
				alt="FooterLogoImage6672"
				src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/footer-croped-background.png"
				class="login-footer-back-image"
			/>
		</div>
		<div class="login-footer-container">
			<div class="login-footer-logo">
			<img
				alt="FooterLogoImage6672"
				src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/footerlogoimage6672-7zox-200h.png"
				class="login-footer-logo-image <?php /* echo is_cart() ? 'cart-footer-logo-image' : ''; */ ?>"
			/>
			</div>
			<div class="footer-menus">
			<section aria-labelledby="footer-quick-links">
				<h4 class="footer-header">Quick Links</h4>
				<ul class="footer-menu">
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li><a href="/about-us">About Us</a></li>
				<li><a href="/blogs">Blogs</a></li>
				<li><a href="/podio">Podio</a></li>
				<li><a href="/affiliate-area">Affiliate Area</a></li>
				</ul>
			</section>
			<section aria-labelledby="footer-shop">
				<h4 class="footer-header">Shop</h4>
				<ul class="footer-menu">
				<li><a href="/letters-iteration-1">Letters</a></li>
				<li><a href="/postcard-final">Postcards</a></li>
				<li><a href="/handwritten-cards-final">Handwritten Cards</a></li>
				<li><a href="/custom-template-final">Custom Template</a></li>
				</ul>
			</section>
			<section aria-labelledby="footer-shop">
				<h4 class="footer-header">Store</h4>
				<ul class="footer-menu">
				<li><a href="my-account">My Account</a></li>
				<li><a href="/checkout">Checkout</a></li>
				<li><a href="/cart">Cart</a></li>
				</ul>
			</section>
			<section aria-labelledby="footer-contact">
				<h4 class="footer-header">Contact</h4>
				<ul class="footer-menu">
				<li>
					<a href="#" class="login-call">
					<img
						alt="Phoneiconcontainer6672"
						src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/phoneiconcontainer6672-p8tc.svg"
						class="login-footer-square-icon"
					/>
					<span>
						&nbsp;858-412-3370
					</span>
					</a>
				</li>
				<li>
					<a href="#" class="login-email">
					<img
						alt="Emailiconcontainer6672"
						src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/emailiconcontainer6672-qv4.svg"
						class="login-footer-square-icon"
					/>
					<span>
						&nbsp;support@Yellowletterhq.com
					</span>
					</a>
				</li>
				</ul>
				</section>
			</div>
			</div>
			
			<div class="login-social-handles-mobile">
				<a href="#">
				<img
					alt="SocialIcon6672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-qzbi.svg"
					class="login-footer-square-icon"
				/>
				</a>
				<a href="#">
				<img
					alt="SocialIcon6672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-ful3.svg"
					class="login-footer-square-icon"
				/>
				</a>
				<a href="#">
				<img
					alt="SocialIcon6672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-ezci.svg"
					class="login-footer-square-icon"
				/>
				</a>
				<a href="#">
				<img
					alt="SocialIcon6672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-zky.svg"
					class="login-footer-square-icon"
				/>
				</a>
				<a href="#">
				<img
					alt="SocialIcon6672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-sys.svg"
					class="login-footer-square-icon"
				/>
				</a>
				<a href="#">
				<img
					alt="SocialIcon6672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-gnbc.svg"
					class="login-footer-square-icon"
				/>
				</a>
				</div>

				<div class="login-footer-terms">
				<div class="footer-after-menu-line">
					<img
					alt="Line26672"
					src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/line26672-djsk.svg"
					class="login-line2"
					/>
				</div>
				<div class="footer-after-menu">
					<span class="login-text30">© 2025 Yellowletters.com&nbsp;All rights reserved.</span>
					<span class="login-text31">
						<a href="#">Terms &amp; Conditions</a> | 
						<a href="#">Privacy Policy</a>
					</span>
					<div class="login-social-handles-desktop">
						<a href="#">
						<img
							alt="SocialIcon6672"
							src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-qzbi.svg"
							class="login-social-icon1"
						/>
						</a>
						<a href="#">
						<img
							alt="SocialIcon6672"
							src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-ful3.svg"
							class="login-social-icon2"
						/>
						</a>
						<a href="#">
						<img
							alt="SocialIcon6672"
							src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-ezci.svg"
							class="login-social-icon3"
						/>
						</a>
						<a href="#">
						<img
							alt="SocialIcon6672"
							src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-zky.svg"
							class="login-social-icon4"
						/>
						</a>
						<a href="#">
						<img
							alt="SocialIcon6672"
							src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-sys.svg"
							class="login-social-icon5"
						/>
						</a>
						<a href="#">
						<img
							alt="SocialIcon6672"
							src="<?php echo get_stylesheet_directory_uri(); ?>/public//external/socialicon6672-gnbc.svg"
							class="login-social-icon6"
						/>
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
