<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DefaultController {
	/**
	 * @Route("/", name="home", methods={"GET","HEAD"})
	 * @param Environment $twig
	 *
	 * @return Response
	 */
	public function index(Environment $twig): Response {
		return new Response(
			$twig->render('index.html.twig', [
				'body' => 'Hello'
			])
		);
	}
}