<?php
namespace App\Controller;


use App\Interfaces\Database;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
	/**
	 * @Route("/", name="home")
	 *
	 * @param Database $db
	 * @return JsonResponse
	 */
	public function index(Database $db): JsonResponse {
		return new JsonResponse(
			$db->select('SELECT uuid()')
		);
	}
}