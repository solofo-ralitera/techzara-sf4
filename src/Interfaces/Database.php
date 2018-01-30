<?php
namespace App\Interfaces;


interface Database {
	public function connect(): void;
	public function query(string $sql, array $parameters=[]): bool;
	public function select(string $sql, array $parameters=[]): iterable;
}