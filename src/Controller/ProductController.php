<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Form\ProductType;
use App\Event\ProductViewEvent;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/{slug}", name="product_category", priority=-1)
     */
    public function category($slug, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->findOneBy(['slug' => $slug]);

        if (!$category) {
            throw $this->createNotFoundException("la catégorie demandée n'existe pas ");
        }
        return $this->render('product/category.html.twig', [
            'slug' => $slug,
            'category' => $category,
        ]);
    }

    /**
     * @Route("/{category_slug}/{slug}", name="product_show", priority=-1)
     */
    public function show($slug, $prenom, ProductRepository $productRepository, EventDispatcherInterface $dispatcher)
    {

       
        $product = $productRepository->findOneBy([
            'slug' => $slug,
        ]);
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        // event pour envoie email a createur quand product afficher
        $dispatcher->dispatch(new ProductViewEvent($product), 'product.view');

        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     *@Route("/admin/product/{id}/edit", name="product_edit")
     */
    public function edit($id, ProductRepository $productRepository, SluggerInterface $slluger, Request $request, EntityManagerInterface $em, ValidatorInterface $validator)
    {  

        $product = $productRepository->find($id);

        $form = $this->createForm(ProductType::class, $product);
        //  $form->setData($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {  
            // $product->setSlug(strtolower($slluger->slug($product->getName())));
            $em->flush();

            //    $url = $urlGenerator->generate('product_show',[
            //        'category_show' => $product->getCategory()->getSlug(),
            //        'slug' => $product->getSlug()
            //    ]);
            //    $response = new RedirectResponse($url);
            //    return $response;

            //    alors en replace tous ca par raccorce dans abstracte par :
            // 

            return $this->redirectToRoute('product_show', [
                'category_slug' => $product->getCategory()->getSlug(),
                'slug' => $product->getSlug()
            ]);
        }

        $formView = $form->createView();

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'formView' => $formView,
        ]);
    }

    /**
     * @Route("/admin/product/create", name="products_create")
     */
    public function create(Request $request, SluggerInterface $slluger, EntityManagerInterface $em)
    {

        // dump($request);

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);


        // $form = $builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $product->setSlug(strtolower($slluger->slug($product->getName())));
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_show', [
                'category_slug' => $product->getCategory()->getSlug(),
                'slug' => $product->getSlug()
            ]);
        }

        $formView = $form->createView();

        return $this->render('product/create.html.twig', [
            'formView' => $formView,
        ]);
    }
}
