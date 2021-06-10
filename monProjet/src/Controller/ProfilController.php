<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\routing\Annotation\Route;

/**
 * @Route("/profil")
 * @method render(string $string, array $array)
 * @package App\Controller
 */

class ProfilController extends AbstractController
{

    /**
     * @Route("/detail", name="profil")
     */
    public function detail() :Response
    {
        //affichage de la page d'accueil
        return $this->render('profil/details.html.twig');

    }


}