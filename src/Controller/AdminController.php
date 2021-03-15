<?php

namespace App\Controller;

use App\Entity\Thematique;
use App\Entity\Matiere;
use App\Form\ThematiqueType;
use App\Form\MatiereType;
use App\Entity\TypeQuestion;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class AdminController extends AbstractController
{

    public function index()
    {
        return $this->render('/admin/index.html.twig');
    }

    public function users_list()
    {
        return $this->render('/admin/users.html.twig');
    }

    public function ajouter_user(Request $request)
    {
        $ajouter_user_form = $this->createFormBuilder(null)
            ->add('login',TextType::class,array('label' => false, 'attr' => array('placeholder' => 'Nom d\'utilisateur')))
            ->add('password',PasswordType::class , array('label' => false, 'attr' => array('placeholder' => 'Mot de passe')))
            ->add('ajouter',SubmitType::class,array('label' => 'Ajouter'))
            ->getForm();
        $ajouter_user_form->handleRequest($request);
        if ($ajouter_user_form->isSubmitted() && $ajouter_user_form->isValid()) {
            dd("add user");
        }
        return $this->render('/admin/ajouterUser.html.twig',
           array('ajouter_user_form' => $ajouter_user_form->createView()));
    }
    public function modifier_user(Request $request) {
        $modifier_user_form = $this->createFormBuilder(null)
            ->add('login',TextType::class,array('label' => false, 'attr' => array('placeholder' => 'Nom d\'utilisateur')))
            ->add('password',PasswordType::class , array('label' => false, 'attr' => array('placeholder' => 'Mot de passe')))
            ->add('confirm_password',PasswordType::class , array('label' => false, 'attr' => array('placeholder' => 'Confirmer votre mot de passe')))
            ->add('enregistrer',SubmitType::class,array('label' => 'Enregistrer'))
            ->getForm();
        $modifier_user_form->handleRequest($request);
        if ($modifier_user_form->isSubmitted() && $modifier_user_form->isValid()) {
            dd("modifier user");
        }
        return $this->render('/admin/modifierUser.html.twig',
           array('modifier_user_form' => $modifier_user_form->createView()));
    }

    public function evaluations_list()
    {
        return $this->render('/admin/evaluations.html.twig');
    }

    public function generer_evaluation(Request $request) {
        $generer_evaluation_form = $this->createFormBuilder(null)
            ->add('evaluation_nom',TextType::class,array('label' => false))
            /*-> array of obejcts of selectionned questions*/
            ->add('ajouter',SubmitType::class,array('label' => 'Ajouter'))
            ->getForm();
        $generer_evaluation_form->handleRequest($request);
        if($generer_evaluation_form->isSubmitted() && $generer_evaluation_form->isValid()) {
            dd("generer");
        }
        return $this->render('/admin/genererEvaluation.html.twig');
    }

    public function questions_list(Request $request)
    {
        $filtre_question_form = $this->createFormBuilder(null)
            ->add('question',TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Rechercher une question...')))
            ->add('type',ChoiceType::class , array('label' => false, 'choices' => [ 'QCM' => null, 'Frai ou faux' => null, 'Item3' => null]))
            ->add('thematique',ChoiceType::class,array('label' => false, 'choices' => [ 'UML' => null, 'Item2' => null, 'Item3' => null]))
            ->add('matiere',ChoiceType::class,array('label' => false, 'choices' => [ 'Item1' => null, 'Item2' => null, 'Item3' => null]))
            ->getForm();
        $filtre_question_form->handleRequest($request);
        if($filtre_question_form->isSubmitted() && $filtre_question_form->isValid()) {
            dd("filtre quesiton");
        }
        return $this->render('/admin/questions.html.twig',
           array('filtre_question_form' => $filtre_question_form->createView()));
    }

    public function thematiques_matieres(Request $request)
    {
        $thematiques= new Thematique;
        $matieres= new Matiere;
        $form = $this->createFormBuilder(null)
                ->add('titre', TextType::class)
                ->add('submit', SubmitType::class, array('label' => 'Rechercher', 'attr' => ['class' => 'btn btn-primary']  ))
                ->getForm();

        $thematiques=$this->getDoctrine()->getRepository(Thematique::class)->findAll();
        $matieres=$this->getDoctrine()->getRepository(Matiere::class)->findAll();

        return $this->render('admin/thematiquesMatieres.html.twig',  
            array( 'thematiques' => $thematiques,
            'matieres'=>$matieres,
            'myform' => $form->createView() ));
    }
    public function ajouter_question(Request $request)
    {
        $em=$this->getDoctrine()->getManager()->getRepository(Matiere::class)->findAll();   
        //$em=$em->getLibelleMatiere();
        $em1=$this->getDoctrine()->getManager()->getRepository(Thematique::class)->findAll();
        $em2=$this->getDoctrine()->getManager()->getRepository(TypeQuestion::class)->findAll();
        return $this->render('/admin/ajouterQuestion.html.twig',
           array('em'=>$em,
                'em1'=>$em1,
                'em2'=>$em2));
    }

    public function Supprimer($id) {
        $em=$this->getDoctrine()->getManager();
        $res=$em->getRepository(Thematique::class);
        $Thematique=$res->find($id);
        $em->remove($Thematique);
        $em->flush();
        $this->addFlash('danger', 'Thematique a été bien supprimé');
        return $this->redirectToRoute('admin_thematiques_matieres',["Thematique"=>$Thematique]);
    }

    public function supprimer_matiere($id) {
        $en=$this->getDoctrine()->getManager();
        $rest=$en->getRepository(Matiere::class);
        $Matiere=$rest->find($id);
        $en->remove($Matiere);
        $en->flush();
        $this->addFlash('danger', 'Matiere a été bien supprimé');
        return $this->redirectToRoute('admin_thematiques_matieres',["Matiere"=>$Matiere]);
    }


    public function modifier_thematique($id,Request $request) {
        $thematique=$this->getDoctrine()->getRepository(Thematique::class)->find($id);
        $form=$this->createForm(ThematiqueType::class,$thematique);

        if ($request->isMethod('POST')) {
            $form->submit($request->request->get($form->getName()));
    
            if ($form->isSubmitted() && $form->isValid()) {
                
    
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                // perform some action...
                $this->addFlash('success', 'Thématique a été bien modifié');
                return $this->redirectToRoute('admin_thematiques_matieres');
            }
        }
        return $this->render('admin/modifierThematique.html.twig', [
            
            'form'  =>  $form->createView(),
        ]);
    }

    public function modifier_matiere($id,Request $request) {
        $matiere=$this->getDoctrine()->getRepository(Matiere::class)->find($id);
        $form_matiere=$this->createForm(MatiereType::class,$matiere);

        if ($request->isMethod('POST')) {
            $form_matiere->submit($request->request->get($form_matiere->getName()));
    
            if ($form_matiere->isSubmitted() && $form_matiere->isValid()) {
                
    
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                // perform some action...
                $this->addFlash('success', 'Matière a été bien modifié');
                return $this->redirectToRoute('admin_thematiques_matieres');
            }
        }
        return $this->render('admin/modifierMatiere.html.twig', [
            
            'form_matiere'  =>  $form_matiere->createView(),
        ]);
    }

    public function ajouter_categorie(Request $request)
    {
            $thematique = new Thematique;
            $matiere = new Matiere;
            $choix = $request->request->get("choix");
            $Thematiqu = $request->request->get("Thematique");
            $Matier = $request->request->get("Matiere");
            $em = $this->getDoctrine()->getManager();

        if($choix == 'thema'){
            $thematique->setLibelleThematique($Thematiqu);
            $em->persist($thematique);
            $em->flush();
            }

        if($choix == 'matiere'){
            $matiere->setLibelleMatiere($Matier);
            $em->persist($matiere);
            $em->flush();
            }
            $message="Bien ajoutee ";
            return $this->render('/admin/ajouterCategorie.html.twig',array('msg'=>$message));
    }
       /* $thematique = new Thematique;

        $ajouter_categorie_form = $this->createFormBuilder(null)
        ->add('categorie', ChoiceType::class, array('label' => false, 'choices' => array(
                'Thématique' => 'thematique',
                'Matière' => 'matiere',),
                'expanded' => true))
        ->add('nom_categorie', TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Ex : Anglais')))
        ->add('autre_categorie',ButtonType::class, array('label' => '+'))
        ->add('ajouter',SubmitType::class, array('label' => 'Ajouter'))
        ->getForm();

        //$ajouter_categorie_form->handleRequest($request);
        if ($request->isMethod('POST')&&$ajouter_categorie_form->handleRequest($request)->isValid()) {    
                
            $em=$this->getDoctrine()->getManager();
            $em->persist($thematique);
            $em->flush();

            $request->getSession()->getFlashBag()->add('Msg','Bien Ajouté');
            return $this->redirectToRoute('ajouter_categorie',["libelle_thematique"=>$thematique->getLibelleThematique()]);
        }
       // if($ajouter_categorie_form->isSubmitted() && $ajouter_categorie_form->isValid()) {
           // dd('ajouter form');
       // }
        return $this->render('/admin/ajouterCategorie.html.twig',
           array('ajouter_categorie_form' => $ajouter_categorie_form->createView()));
    }*/
            
}