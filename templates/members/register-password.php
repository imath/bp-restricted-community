<?php
/**
 * Template part to use the WordPress way of editing a user's password.
 *
 * @package   communaute-protegee
 * @subpackage \templates\members\register-password
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! communaute_protegee()->is_legacy ) {
	return;
}
?>

<div class="user-pass1-wrap">
	<div class="wp-pwd">
		<div class="password-input-wrapper">
			<input type="password" data-reveal="1" data-pw="<?php echo esc_attr( wp_generate_password( 16 ) ); ?>" name="signup_password" id="pass1" class="input password-input" size="24" value="" autocomplete="off" aria-describedby="pass-strength-result" />
			<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js">
				<span class="dashicons dashicons-hidden" aria-hidden="true"></span>
			</button>
		</div>
		<div id="pass-strength-result" class="hide-if-no-js" aria-live="polite"><?php esc_html_e( 'Indicateur de robustesse', 'communaute-protegee' ); ?></div>
	</div>
	<div class="pw-weak">
		<label>
			<input type="checkbox" name="pw_weak" class="pw-checkbox" />
			<?php esc_html_e( 'Confirmer l’utilisation d’un mot de passe faible', 'communaute-protegee' ); ?>
		</label>
	</div>
</div>

<p class="user-pass2-wrap">
	<label for="pass2"><?php esc_html_e( 'Confirmer le mot de passe', 'communaute-protegee' ); ?></label><br />
	<input type="password" name="signup_password_confirm" id="pass2" class="input" size="20" value="" autocomplete="off" />
</p>

<p class="description indicator-hint"><?php echo wp_get_password_hint(); // phpcs:ignore ?></p>
