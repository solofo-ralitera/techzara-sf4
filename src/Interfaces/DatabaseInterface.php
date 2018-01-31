<?php
namespace App\Interfaces;


interface DatabaseInterface {
	public function connect(): void;
	public function query(string $sql, array $parameters=[]): bool;
	public function select(string $sql, array $parameters=[]): iterable;
}