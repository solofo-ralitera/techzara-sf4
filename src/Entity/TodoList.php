<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\PersistentCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TodoListRepository")
 */
class TodoList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="string")
	 *
	 * @var string
	 */
    private $name;

	/**
	 * @OneToMany(targetEntity="App\Entity\Todo", mappedBy="list")
	 */
	private $todos;


	public function __construct()
	{
		$this->todos = new ArrayCollection();
	}

	/**
	 * @return mixed
	 */
	public function getTodos(): ?PersistentCollection {
		return $this->todos;
	}

	/**
	 * @param Todo $todo
	 *
	 * @return TodoList
	 * @internal param Todo $todos
	 *
	 */
	public function addTodo( Todo $todo ): TodoList {
		$this->todos[] = $todo;

		return $this;
	}

	/**
	 * @param Todo $todo
	 *
	 * @return TodoList
	 * @internal param Todo $todos
	 *
	 */
	public function removeTodo( Todo $todo ): TodoList {
		$this->todos->removeElement($todo);

		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 *
	 * @return TodoList
	 */
	public function setId( $id ): TodoList {
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
	 * @param mixed $name
	 *
	 * @return TodoList
	 */
	public function setName( string $name ): TodoList {
		$this->name = $name;

		return $this;
	}

}
