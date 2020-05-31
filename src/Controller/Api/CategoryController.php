<?php
namespace App\Controller\Api;

use App\Services\CategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CategoryController
 * @Route("/api/category", name="api_category_")
 */
class CategoryController extends AbstractController
{
    /**
     * @var CategoryService
     */
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @Route("/list", name="list")
     * @param Request $request
     * @return JsonResponse
     */
    public function categoryList(Request  $request)
    {
         return new JsonResponse($this->categoryService->getCategoryList());
    }

    /**
     * @Route("/{category}", name="image_list")
     * @param Request $request
     * @param string $category
     * @return JsonResponse
     */
    public function categoryData(Request $request, string $category)
    {
        return new JsonResponse($this->categoryService->getCategoryData($category));
    }

    /**
     * @Route("/{category}/{imageId}", name="details")
     * @param Request $request
     * @param string $category
     * @param string $imageId
     * @return JsonResponse
     */
    public function imageDescription(Request $request, string $category, string $imageId)
    {
        return new JsonResponse($this->categoryService->getImageDescription($imageId));
    }
}