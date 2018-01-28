<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
	/**
	 * @Route("/", name="home")
	 * @return JsonResponse
	 */
	public function index(): JsonResponse {
		return new JsonResponse([
			'Hello !'
		]);
	}
}