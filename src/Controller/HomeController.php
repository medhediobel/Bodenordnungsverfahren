<?php

namespace App\Controller;

use DateTime;
use App\Entity\Comment;
use App\Entity\Verfahren;
use App\Form\CommentType;
use App\Entity\Dienstsitz;
use App\Form\VerfahrenType;
use App\Repository\VerfahrenRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/index", name="home")
     */
    public function index(VerfahrenRepository $verfahrenRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $verfahren = $paginator->paginate( $verfahrenRepository->findAll(), 
                     $request->query->getInt('page', 1), 3  );

        return $this->render('home/index.html.twig', [ 'verfahren' => $verfahren ]);
    }

    

     /**  @Route("verfahren/new", name="verfahren_new") */
     
     public function new(Request $request, FlashyNotifier $flashy)
     {
         $verfahren =new Verfahren();
         $form = $this->createForm(VerfahrenType::class, $verfahren);
         $form->handleRequest($request);
         if( $form->isSubmitted() && $form->isValid() ) 
             {
                 $verfahren->setCreatedAt(new DateTime());
               
                
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($verfahren);
                 $entityManager->flush();

                 $flashy->success('Verfahren erstellt!'); 
                 return $this->redirectToRoute("verfahren_show", ['id'=>$verfahren->getId() ]);
             }
         return $this->render( 'home/new.html.twig', [ 'form' =>$form->createView() ] );
     }


     /** 
     * @Route("verfahren/{id}/edit", name="verfahren_edit")
     */

    public function edit(Request $request, Verfahren $verfahren, FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(VerfahrenType::class, $verfahren);
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid() ) 
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($verfahren);
            $entityManager->flush();

            $flashy->success('Verfahren geändert!'); 
            return $this->redirectToRoute("verfahren_show", ['id'=>$verfahren->getId() ]);
        }
        return $this->render('home/edit.html.twig', ['editForm' =>$form->createView() ] );
    }



    /** 
     * @Route("verfahren/{id}", name="verfahren_show", methods={"GET","POST"})
     */
    public function show(Verfahren $verfahren, Request $request, FlashyNotifier $flashy)
    {

        $comment =new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        

        if($form->isSubmitted() && $form->isValid())
        {
            $comment->setCreatedAt(new DateTime());
            $comment->setVerfahren($verfahren);
            $entityManager = $this->getDoctrine()->getmanager();
            $entityManager->persist($comment);
            $entityManager->flush();

            $flashy->success('Einspruch geschrieben!');
            return $this->redirectToRoute("verfahren_show", ['id'=>$verfahren->getId() ]);

        }

        return $this->render( 'home/show.html.twig', [ 'verfahren' => $verfahren, 
                                                       'commentForm' => $form->createView() ]);

    }
}
