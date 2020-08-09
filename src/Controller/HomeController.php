<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Producer;
use App\Entity\About;
/* use Symfony\Component\Validator\Validator\ValidatorInterface; */
use Doctrine\ORM\EntityManagerInterface;
/* use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; */
/* use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException; */
use Wheeler\Fortune\Fortune;

class HomeController extends AbstractController
{
    public function view(EntityManagerInterface $entityManager)
    {
        $producerRepo = $entityManager->getRepository(Producer::class);
        $aboutRepo = $entityManager->getRepository(About::class);
        $producers = $producerRepo->findAll();
        $abouts = $aboutRepo->findAll();

        return $this->render('base/home.html.twig', [
            'tagline' => 'Welcome',
            'tagline_btn_content' => 'Reload',
            'tagline_content' => Fortune::make(),
            'producers' => $producers,
            'abouts' => $abouts,
        ]);
    }
}
