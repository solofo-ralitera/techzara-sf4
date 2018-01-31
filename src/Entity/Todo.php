<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @var string
     */
    private $id;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @return string
	 */
	public function getId(): string {
		return $this->id;
	}

	/**
	 * @param string $id
	 *
	 * @return Todo
	 */
	public function setId(string $id): Todo {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return Todo
	 */
	public function setName(string $name): Todo {
		$this->name = $name;

		return $this;
	}

}
