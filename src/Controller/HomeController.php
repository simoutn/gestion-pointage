<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{

    public function index() :Response

    {
 return $this->render('home/index.html.twig');
    }
}