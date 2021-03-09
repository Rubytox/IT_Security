<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavController extends AbstractController
{
    public function nav(): Response
    {
        $site = array(
            "posts" => array()
        );
        array_push($site["posts"], array(
            "path" => "HTB/Wall",
            "url" => "htb.wall",
            "title" => "Wall"
        ));
        array_push($site["posts"], array(
            "path" => "HTB/Admirer",
            "url" => "htb.admirer",
            "title" => "Admirer"
        ));
        array_push($site["posts"], array(
            "path" => "HTB/Postman",
            "url" => "htb.postman",
            "title" => "Postman"
        ));
        array_push($site["posts"], array(
            "path" => "root-me/format_string",
            "url" => "rm.format-string",
            "title" => "Format String"
        ));
        return $this->render('_nav.html.twig', [
            "site" => $site
        ]);
    }
}

?>
