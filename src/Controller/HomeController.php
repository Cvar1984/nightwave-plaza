<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Wheeler\Fortune\Fortune;

class HomeController extends AbstractController
{
    public function view()
    {
        return $this->render('base/home.html.twig', [
            'tagline_content' => Fortune::make(),
        ]);
    }
}
