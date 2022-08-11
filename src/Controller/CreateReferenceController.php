<?php

namespace App\Controller;

use App\Annotation\SzApiLog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateReferenceController extends Controller
{
    /**
     * @Route("/public-api/move-in/create/reference", name="create_reference")
     * @SzApiLog()
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CreateReferenceController.php',
        ]);
    }
}
