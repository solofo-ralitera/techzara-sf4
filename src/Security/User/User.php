<?php
namespace App\Security\User;


use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface, EquatableInterface {
	/**
	 * @var string
	 */
	private $username;
	/**
	 * @var string
	 */
	private $password;
	/**
	 * @var string
	 */
	private $salt;
	/**
	 * @var array
	 */
	private $roles;

	public function __construct(string $username, string $password, string $salt, array $roles)
	{
		$this->username = $username;
		$this->password = $password;
		$this->salt = $salt;
		$this->roles = $roles;
	}

	/**
	 * The equality comparison should neither be done by referential equality
	 * nor by comparing identities (i.e. getId() === getId()).
	 *
	 * However, you do not need to compare every attribute, but only those that
	 * are relevant for assessing whether re-authentication is required.
	 *
	 * Also implementation should consider that $user instance may implement
	 * the extended user interface `AdvancedUserInterface`.
	 *
	 * @param UserInterface $user
	 *
	 * @return bool
	 */
	public function isEqualTo( UserInterface $user ): bool {
		// TODO: Implement isEqualTo() method.
		return $this->getUsername() === $user->getUsername();
	}

	/**
	 * Returns the roles granted to the user.
	 *
	 * <code>
	 * public function getRoles()
	 * {
	 *     return array('ROLE_USER');
	 * }
	 * </code>
	 *
	 * Alternatively, the roles might be stored on a ``roles`` property,
	 * and populated in any number of different ways when the user object
	 * is created.
	 *
	 * @return (Role|string)[] The user roles
	 */
	public function getRoles(): array {
		// TODO: Implement getRoles() method.
		return $this->roles;
	}

	/**
	 * Returns the password used to authenticate the user.
	 *
	 * This should be the encoded password. On authentication, a plain-text
	 * password will be salted, encoded, and then compared to this value.
	 *
	 * @return string The password
	 */
	public function getPassword(): string {
		// TODO: Implement getPassword() method.
		return $this->password;
	}

	/**
	 * Returns the salt that was originally used to encode the password.
	 *
	 * This can return null if the password was not encoded using a salt.
	 *
	 * @return string|null The salt
	 */
	public function getSalt(): ?string {
		// TODO: Implement getSalt() method.
		return $this->salt;
	}

	/**
	 * Returns the username used to authenticate the user.
	 *
	 * @return string The username
	 */
	public function getUsername(): string {
		// TODO: Implement getUsername() method.
		return $this->username;
	}

	/**
	 * Removes sensitive data from the user.
	 *
	 * This is important if, at any given point, sensitive information like
	 * the plain-text password is stored on this object.
	 */
	public function eraseCredentials() {
		// TODO: Implement eraseCredentials() method.
	}
}
