<?php
/**
 * Created by PhpStorm.
 * User: solofo
 * Date: 1/31/18
 * Time: 10:32 AM
 */

namespace App\Classes;


use App\Interfaces\DatabaseInterface;
use App\Interfaces\ToDoInterface;

class ToDo implements ToDoInterface {
	/**
	 * @var DatabaseInterface
	 */
	private $db;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var \DateTime
	 */
	private $dateCreation;

	/**
	 * ToDo constructor.
	 *
	 * @param DatabaseInterface $db
	 */
	public function __construct(DatabaseInterface $db) {
		$this->db = $db;
	}

	/**
	 * @param string $name
	 *
	 * @return ToDoInterface
	 */
	public function create( string $name ): ToDoInterface {
		// TODO: Implement create() method.
		$this->name = $name;
		$this->dateCreation = new \DateTime();
		return $this;
	}

	/**
	 * @return array
	 */
	public function toArray(): array {
		// TODO: Implement toArray() method.
		return [
			'name' => $this->name,
			'date_creation' => $this->dateCreation,
		];
	}
}