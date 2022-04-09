<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use App\Form\AnimalType;
use App\Form\CategoryType;
use App\Form\EditProfileType;
use App\Form\ProductType;
use App\Form\RegistrationFormType;
use App\Repository\AnimalRepository;
use App\Repository\CategoryRepository;
use App\Repository\PictureRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }



    //    GESTION DES ANIMAUX



    /**
     * @Route("/animal/index",name="animal_index")
     * @param AnimalRepository $repo
     * @return Response
     */
    public function indexAnimal(AnimalRepository $repo)
    {
        return $this->render('/admin/animal/index.html.twig', ['animals' => $repo->findAll()]);
    }

    /**
     * @Route("/animal/create", name="animal_create")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function createAnimal(Request $request, EntityManagerInterface $manager)
    {
        $animal = new Animal();

        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isSubmitted())
        {

            $manager->persist($animal);
            $manager->flush();

            $this->addFlash('notice', 'La catégorie a bien été ajoutée');
            return $this->redirectToRoute('animal_index');
        }

        return $this->renderForm('admin/animal/create.html.twig', ['form'=> $form]);

    }

    /**
     * @Route("/animal/change/{id}", name="animal_change")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param Animal $animal
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function changeAnimal(Request $request, EntityManagerInterface $manager, Animal $animal)
    {

        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form != " ")
        {
            $this->addFlash('notice', 'Pas de nom de catégorie rentré');
            return $this->redirectToRoute('animal_index');
        }

        if ($form->isSubmitted() && $form->isValid()) {

            $animal = $form->getData();
            $manager->persist($animal);
            $manager->flush();

            $this->addFlash('notice', 'La catégorie a bien été mise à jour');
            return $this->redirectToRoute('animal_index');

        }

        return $this->renderForm('admin/animal/edit.html.twig', ['form' => $form]);
    }


    /**
     * @Route("/animal/delete/{id}",name="animal_delete")
     * @param EntityManagerInterface $manager
     * @param Animal $animal
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAnimal(EntityManagerInterface $manager, Animal $animal)
    {
        if (!$animal)
        {
            $this->addFlash('notice', 'Pas de catégorie sélectionnée');
            return $this->redirectToRoute('animal_index');
        }

        $manager->remove($animal);
        $manager->flush();

        return $this->redirectToRoute('animal_index');

    }


//    GESTION DES CATEGORIES


    /**
     * @Route("/category/index",name="category_index")
     * @param CategoryRepository $repo
     * @return Response
     */
    public function indexCategories(CategoryRepository $repo)
    {
        return $this->render('admin/categories/index.html.twig', ['categories'=>$repo->findAll()]);
    }



    /**
     * @Route("/category/create", name="category_create")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function createCategory(Request $request, EntityManagerInterface $manager)
    {
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($category);
            $manager->flush();

            $this->addFlash('notice', 'La catégorie a bien été créée');
            return $this->redirectToRoute('admin');
        }


        return $this->renderForm('admin/categories/createCategory.html.twig', ['form'=>$form]);
    }

    /**
     * @Route("/category/change/{id}",name="category_change")
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @param Category $category
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function changeCategory(EntityManagerInterface $manager, Request $request, Category $category)
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $category = $form->getData();
            $manager->persist($category);
            $manager->flush();

            $this->addFlash('notice', 'La catégorie a bien été créée');
            return $this->redirectToRoute('category_index');
        }


        return $this->renderForm('admin/categories/edit.html.twig', ['form'=>$form]);
    }

    /**
     * @Route("/category/delete/{id}",name="category_delete")
     * @param Category $category
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteCategory(Category $category, EntityManagerInterface $manager)
    {
        if (!$category)
        {
            $this->addFlash('notice', 'Cette catégorie n\'existe pas');
            return $this->redirectToRoute('category_index');
        }

        $manager->remove($category);
        $manager->flush();


        return $this->redirectToRoute('category_index');
    }



//    GESTION DES UTILISATEURS



    /**
     * @Route("/users/index", name="users_index")
     * @param UserRepository $repo
     * @return Response
     */
    public function indexUsers(UserRepository $repo)
    {
        return $this->render('/admin/users/index.html.twig', ['users'=>$repo->findAll()]);
    }

    /**
     * @Route("/users/modify/{id}", name="users_modify")
     * @param User $user
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function changeUsers(User $user, Request $request, EntityManagerInterface $manager)
    {

        $form = $this->createForm(EditProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $user = $form->getData();

            $manager->persist($user);
            $manager->flush();

            $this->addFlash('notice', 'Les informations ont bien été mises à jour' );
            if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
            {
                return $this->redirectToRoute('admin');
            }

        }

        return $this->renderForm('profile/editInfos.html.twig', ['form' => $form]);
    }

    /**
     * @Route("/users/delete/{id}", name="users_delete")
     */
    public function deleteUsers(User $user, EntityManagerInterface $manager)
    {
        if (!$user)
        {
            $this->addFlash('notice', 'Veuillez renseigner un utilisateur enregistré');
            return $this->redirectToRoute('users_index');
        }

        $manager->remove($user);
        $manager->flush();


        return $this->redirectToRoute('users_index');

    }

    // -----------------------------GESTION DES PRODUITS--------------------------------------

    /**
     * @Route("/products",name="product_index")
     * @param ProductRepository $repo
     * @return Response
     */
    public function indexProducts(ProductRepository $repo)
    {
        return $this->render('admin/products/index.html.twig', ['products' => $repo->findAll()]);
    }


    /**
     * @Route("/products/create",name="product_create")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    public function createProducts(Request $request, EntityManagerInterface $manager)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($product);

            $pictures = $form->getData()->getPictures();
            foreach ($pictures as $picture)
            {
                $picture->setProduct($product);
                $manager->persist($picture);
            }


            $manager->flush();

            $this->addFlash('notice', 'Le produit a été ajouté');
            return $this->redirectToRoute('product_index');
        }

        return $this->renderForm('admin/products/create.html.twig', ['form'=>$form]);
    }


    /**
     * @Route("/products/change/{id}",name="product_change")
     * @param Product $product
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @param PictureRepository $repo
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function changeProduct(Product $product, EntityManagerInterface $manager, Request $request, PictureRepository $repo)
    {

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        $picturesDB = $repo->findAll();
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($product);

            $pictures = $form->getData()->getPictures();

            foreach ($pictures as $picture)
            {
                $picture->setProduct($product);
                $manager->persist($picture);
            }

            $manager->flush();
            return $this->redirectToRoute('product_index');


        }

        return $this->renderForm('admin/products/edit.html.twig',['form'=>$form]);

    }



    /**
     * @Route("/products/delete/{id}",name="product_delete")
     * @param Product $product
     * @param EntityManagerInterface $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteProduct(Product $product, EntityManagerInterface $manager)
    {
        if (!$product)
        {
            $this->addFlash('notice', 'Ce produit n\'existe pas!');
        } else {
            $manager->remove($product);
            $manager->flush();

            $this->addFlash('notice', 'Le produit a bien été supprimé');
        }

        return $this->redirectToRoute('product_index');

    }




}
