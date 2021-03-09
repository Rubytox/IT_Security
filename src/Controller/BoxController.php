<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BoxController extends AbstractController
{
    /**
     * @Route("/htb/{code}", name="htb_box")
     */
    public function renderHtbWalkthrough(string $code): Response
    {
        $page = array(
            "code" => $code,
            "title" => "HTB: Admirer",
            "author" => "rubytox",
            "long_date" => "14th September 2020"
        );

        return $this->render('htb_box.html.twig', [
            "page" => $page
        ]);
    }
}

?>
