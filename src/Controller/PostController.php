<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;

 class PostController extends AbstractController
 {
     /**
      * @Route("/post/create", methods="GET", name="post_create")
      */
     public function createPost(Request $request): Response
     {
         return $this->render('forum/post/create.html.twig');
     }
 }