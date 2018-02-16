<?php
/**
 * Created by PhpStorm.
 * User: solofo
 * Date: 1/31/18
 * Time: 3:47 PM
 */

namespace App\Controller;


use App\Entity\Todo;
use App\Entity\TodoList;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController {
	/**
	 * Liste tous les todos
	 *
	 * @Route("/todo/", name="todo_index", methods={"GET"})
	 * @param RegistryInterface $doctrine
	 *
	 * @return JsonResponse
	 */
	public function index(RegistryInterface $doctrine): JsonResponse {
		return new JsonResponse(array_map(function(Todo $todo): array {
			return [
				'id' => $todo->getId(),
				'name' => $todo->getName(),
				'list' => $todo->getList()
			];
		}, $doctrine->getRepository(Todo::class)->findAll()));
	}

	/**
	 * Liste tous les todolists et leurs todos
	 *
	 * @Route("/todolist", name="todo_list", methods={"GET"})
	 * @param RegistryInterface $doctrine
	 *
	 * @return JsonResponse
	 */
	public function todoList(RegistryInterface $doctrine): JsonResponse {
		return new JsonResponse(array_map(function(TodoList $todoList): array {
			return [
				'id' => $todoList->getId(),
				'name' => $todoList->getName(),
				'todos' => $todoList->getTodos()->map(function ($todo) {
					return [
						'id' => $todo->getId(),
						'name' => $todo->getName(),
					];
				})->toArray(),
			];
		}, $doctrine->getRepository(TodoList::class)->findBy([
			'id' => 1
		])));
	}

	/**
	 * Ajoute une nouvelle liste
	 *
	 * @Route("/todo/list/add", name="todo_list_add", methods={"GET"})
	 * @param RegistryInterface $doctrine
	 *
	 * @return JsonResponse
	 */
	public function addList(RegistryInterface $doctrine): JsonResponse {
		$em = $doctrine->getEntityManager();

		$todoList = new TodoList(); // !! Inject instance or interface instead of creating a new object here
		$todoList->setName('List 1');
		$em->persist($todoList);
		$em->flush();

		return new JsonResponse([
			'id' => $todoList->getId(),
			'name' => $todoList->getName(),
		]);
	}

	/**
	 * Ajoute un nouveau todo
	 *
	 * @Route("/todo/add", name="todo_add", methods={"GET"})
	 * @param RegistryInterface $doctrine
	 *
	 * @return JsonResponse
	 */
	public function add(RegistryInterface $doctrine): JsonResponse {
		$em = $doctrine->getEntityManager();

		$todoList = $doctrine->getRepository(TodoList::class)->find(1);

		$todo = new Todo(); // !! Inject instance or interface instead of creating a new object here
		$todo->setName('Test');
		$todo->setList($todoList);
		$em->persist($todo);
		$em->flush();

		return new JsonResponse([
			'id' => $todo->getId(),
			'name' => $todo->getName(),
		]);
	}
}