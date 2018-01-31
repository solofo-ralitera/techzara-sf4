<?php
namespace App\Controller;


use App\Interfaces\ToDoInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
	/**
	 * @Route("/", name="home")
	 *
	 * @param ToDoInterface $todo
	 *
	 * @return JsonResponse
	 */
	public function index(ToDoInterface $todo): JsonResponse {
		$todo->create('Test');
		return new JsonResponse($todo->toArray());
	}
}