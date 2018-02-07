<?php
namespace App\Security\User;


use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface{

	/**
	 * Loads the user for the given username.
	 *
	 * This method must throw UsernameNotFoundException if the user is not
	 * found.
	 *
	 * @param string $username The username
	 *
	 * @return UserInterface
	 *
	 * @throws UsernameNotFoundException if the user is not found
	 */
	public function loadUserByUsername( $username ): UserInterface {
		// TODO: Implement loadUserByUsername() method.
		$user = new User( $username, $password = $username, $salt = '', $roles = []);
		return $user;
	}

	/**
	 * Refreshes the user.
	 *
	 * It is up to the implementation to decide if the user data should be
	 * totally reloaded (e.g. from the database), or if the UserInterface
	 * object can just be merged into some internal array of users / identity
	 * map.
	 *
	 * @param UserInterface $user
	 *
	 * @return UserInterface
	 */
	public function refreshUser( UserInterface $user ): UserInterface {
		// TODO: Implement refreshUser() method.
		if (!$user instanceof User) {
			throw new UnsupportedUserException(
				sprintf('Instances of "%s" are not supported.', get_class($user))
			);
		}
		try {
			return $this->loadUserByUsername( $user->getUsername() );
		}catch (UsernameNotFoundException $e) {
			throw $e;
		}
	}

	/**
	 * Whether this provider supports the given user class.
	 *
	 * @param string $class
	 *
	 * @return bool
	 */
	public function supportsClass( $class ): bool {
		// TODO: Implement supportsClass() method.
		return User::class === $class;
	}
}