<?php
	namespace App\Controller;
	use App\Repository\EtudiantRepository;
	use Symfony\Component\HttpFoundation\JsonResponse;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;
	class EtudiantController extends AbstractController
	{
		#[Route('/api/etudiants',name:'api_etudiants',methods:['GET'])]
		public function getEtudiants(EtudiantRepository $etudiantRepository):JsonResponse
		{
			$etudiants=$etudiantRepository->getAll();
			$data = array_map(function ($etudiant) {
				return [
					'id' => $etudiant->getId(),
					'nom' => $etudiant->getNom(),
				];
			}, $etudiants);
			return new JsonResponse($data);
		}
	}



?>
