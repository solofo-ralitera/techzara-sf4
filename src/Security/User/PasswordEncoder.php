<?php
namespace App\Security\User;


use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class PasswordEncoder implements PasswordEncoderInterface {

	/**
	 * Encodes the raw password.
	 *
	 * @param string $raw The password to encode
	 * @param string $salt The salt
	 *
	 * @return string The encoded password
	 */
	public function encodePassword( $raw, $salt ): string {
		// TODO: Implement encodePassword() method.
		return $raw;
	}

	/**
	 * Checks a raw password against an encoded password.
	 *
	 * @param string $encoded An encoded password
	 * @param string $raw A raw password
	 * @param string $salt The salt
	 *
	 * @return bool true if the password is valid, false otherwise
	 */
	public function isPasswordValid( $encoded, $raw, $salt ): bool {
		// TODO: Implement isPasswordValid() method.
		return true;
	}
}