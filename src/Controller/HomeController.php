<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {
    
    // ci dessus, permet a symfony d'indiquer la route 
    /**
     * @Route ("/")
     * @route("/home") 
     */
    public function home(){   // affichage du contenue sur la home page
        return $this->render('home.html.twig');
    }
    
  
    
}
