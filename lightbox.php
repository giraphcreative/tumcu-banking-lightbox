<?php
/*
Plugin Name: TUMCU Banking Lightbox
Description: A basic plugin to output an online banking transition message in a lightbox. Deactivate to disable the lightbox.
Version: 0.0.1
Author: James Pederson
Author URI: https://jpederson.com/
*/

function banking_lightbox() {
	if ( is_front_page() ) {
	?>	
	<div class="lightbox-merger">
		<h4>We've updated our Online Banking Platform</h4>
		<p>You don't have to re-enroll, but upon your first login, you'll be prompted to update your Login ID and Security Code (password). Here's how to gain access to your account.</p>
		<h3>LOGIN ID</h3>
		<p>Your Login ID will be your Member (Account) number with leading 0's until it is six digits long.</p>
		<p><strong>For example:</strong><br>
		Member #: 1234<br>
		Login ID: 001234</p>
		<h3>SECURITY CODE (PASSWORD)</h3>
		<p>Your new security code will be the word security in all lowercase + the last 4 digits of the primary Member's Social Security Number.</p>
		<p><strong>For example:</strong> If the last four digits of your SSN is 5678, then your default passcode is security5678.</p>
		<p><a href="javascript:jQuery.magnificPopup.close();" class="btn">Continue to Site</a></p>
	</div>
	<?php
	}
}
add_action( 'wp_footer', 'banking_lightbox' );


// include the main.js script in the header on the front-end.
function merger_assets() {
	wp_enqueue_style( 'merger-css', plugin_dir_url( __FILE__ ) . 'lightbox.css?v=4' );
	wp_enqueue_script( 'merger-js', plugin_dir_url( __FILE__ ) . 'lightbox.js?v=4', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'merger_assets' );


