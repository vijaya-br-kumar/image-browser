<?php


namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller\Frontend
 * @Route(name="home_")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return Response
     */
    public function home(Request $request)
    {
        return $this->render('frontend/home.html.twig');
    }

    /**
     * @Route("/category/{category}", name="category")
     * @param Request $request
     * @param string $category
     * @return Response
     */
    public function category(Request $request, string $category)
    {
        return $this->render('frontend/category.html.twig', ['category' => $category]);
    }

    /**
     * @Route("/category/{category}/{imageId}", name="imageDescription")
     * @param Request $request
     * @param string $category
     * @param string $imageId
     * @return Response
     */
    public function imageDescription(Request $request, string $category, $imageId)
    {
        return $this->render('frontend/image-description.html.twig', ['category' => $category, 'imageId' => $imageId]);
    }
}