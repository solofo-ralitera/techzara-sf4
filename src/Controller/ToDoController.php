<?php
/**
 * Created by PhpStorm.
 * User: solofo
 * Date: 1/31/18
 * Time: 3:47 PM
 */

namespace App\Controller;


use App\Entity\Todo;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController {
	/**
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
			];
		}, $doctrine->getRepository(Todo::class)->findAll()));
	}

	/**
	 * @Route("/todo/add", name="todo_add", methods={"GET"})
	 * @param RegistryInterface $doctrine
	 *
	 * @return JsonResponse
	 */
	public function add(RegistryInterface $doctrine): JsonResponse {
		$em = $doctrine->getEntityManager();

		$todo = new Todo(); // !! Inject instance or interface instead of creating a new object here
		$todo->setName('Test');
		$em->persist($todo);
		$em->flush();

		return new JsonResponse([
			'id' => $todo->getId(),
			'name' => $todo->getName(),
		]);
	}
}