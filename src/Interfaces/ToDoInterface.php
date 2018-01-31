<?php
/**
 * Created by PhpStorm.
 * User: solofo
 * Date: 1/31/18
 * Time: 10:28 AM
 */

namespace App\Interfaces;


interface ToDoInterface {
	public function create(string $name): ToDoInterface;
	public function toArray() : array ;
}