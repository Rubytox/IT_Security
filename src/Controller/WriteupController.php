<?php

namespace App\Controller;

use App\Entity\Writeup;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WriteupController extends AbstractController
{
    /**
     * @Route("/create_writeup/{code}", name="create_writeup")
     */
    public function createWriteup(string $code): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $writeup = new Writeup();
        $writeup->setCode($code);
        $writeup->setTitle("HTB: Admirer");
        $writeup->setAuthor("rubytox");
        $writeup->setLongDate("14th September 2020");
        $writeup->setContent("This is the content of the nice writeup!!!");

        $entityManager->persist($writeup);
        $entityManager->flush();

        return new Response('Saved new writeup of code ' . $writeup->getCode() . ' at id ' . $writeup->getId());
    }
}
