<?php

namespace App\Controller;
use App\Entity\Question;
use App\Entity\Thematique;
use App\Entity\Matiere;
use App\Form\ThematiqueType;
use App\Form\MatiereType;
use App\Entity\TypeQuestion;
use App\Form\QuestionType;


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
            $question = new Question;

            if(isset($_POST['question']) && isset($_POST['Type']) ) {
                $contenu_question = $_POST['question'];
                $type_question = $_POST['Type'];

                $type = $this->getDoctrine()->getManager()->getRepository(TypeQuestion::class)->find($type_question);
               
                $question->setContenuQuestion($contenu_question);
                $question->setTypeQuestion($type);
                
                /* Récupération de la matière */
                if(isset($_POST['matiere']) && !empty($_POST['matiere'])) {
                    $matiere = $_POST['matiere'];
                    $matiere_question = $this->getDoctrine()->getManager()->getRepository(Matiere::class)->find($matiere);
                    //dd($matiere_question);
                    $question->setMatiereQuestion($matiere_question);             
                }
                /* Récupération de la thématique */
                if(isset($_POST['thematique']) && !empty($_POST['thematique'])) {
                    $thematique = $_POST['thematique'];
                    $thematique_question = $this->getDoctrine()->getManager()->getRepository(Thematique::class)->find($thematique);
                    $question->setThematiqueQuestion($thematique_question);
                }

                /* Question à réponse libre */
                if(isset($_POST['Libre']) && !empty($_POST['Libre'])) {
                    $propositions=[];
                    $reponses=array($_POST['Libre']);            
                    $question->setReponsesQuestion($reponses);
                    $question->setPropositionsQuestion($propositions);
                }

                /* Question à réponse numérique  */
                if(isset($_POST['Numerique']) && !empty($_POST['Numerique'])) {
                    $propositions=[];
                    $reponses=array($_POST['Numerique']);            
                    $question->setReponsesQuestion($reponses);
                    $question->setPropositionsQuestion($propositions);
                }

                /* Question vrai ou faux */
                if(isset($_POST['VF']) && !empty($_POST['VF'])) {
            
                    $reponses=array($_POST['VF']);   
                    $propositions=["Vrai", "Faux"];            
                    $question->setReponsesQuestion($reponses);
                    $question->setPropositionsQuestion($propositions);
                }

                /* Question à choix unique */
                if(isset($_POST['UNIQUE']) && !empty($_POST['UNIQUE'])) {

                    $i= $_POST['UNIQUE'];

                    $choix="choix".$i;
                    
                    $array = array();
                    for($j=0;$j<3;$j++){

                        $choixx=$_POST["choix".$j];
                        
                        array_push($array, $choixx);
                        $propositions[$j] = $array[$j];

                    }
                    $reponses=array($_POST[$choix]);   
                    $question->setReponsesQuestion($reponses);
                    $question->setPropositionsQuestion($propositions);
                }
                /* Question à choix multiple */
                
                if(isset($_POST['ChoixMultiple']) && !empty($_POST['ChoixMultiple'])) {
                    
                    $array = array();
                    $value = $_POST["value"];
                    
                    //Propositions
                    for($i=0; $i<=$value; $i++) {
                        $choixxx=$_POST["choixx".$i];
                        array_push($array, $choixxx);
                        $propositions[$i] = $array[$i];
                    }

                    //Réponses
                    $reponses = array();
                    $x=$_POST['ChoixMultiple'];

                    $c=count($x);

                    for($i=0;$i<$c;$i++){
                        $val=$x[$i];
                        $choixxx=$_POST["choixx".$val];
                        array_push($reponses, $choixxx);
                    }

                }
            
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($question);
                $entityManager->flush();
               
                return $this->redirectToRoute('admin_questions');
            }

            $em=$this->getDoctrine()->getManager()->getRepository(Matiere::class)->findAll();   
            $em1=$this->getDoctrine()->getManager()->getRepository(Thematique::class)->findAll();
            $em2=$this->getDoctrine()->getManager()->getRepository(TypeQuestion::class)->findAll();
               
            return $this->render('/admin/ajouterQuestion.html.twig',
                    array(  'em'=>$em,
                    'em1'=>$em1,
                    'em2'=>$em2
            ));
    }


/* Supprimer question */
    public function supprimer_question($id) {

        $question = new Question;
        $em = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository(Question::class);
        $question = $repo->find($id);
        $em->persist($question);
        $em->remove($question); 
        $em->flush();
        //add flash here
        return $this->redirectToRoute('admin_questions');
    }


    public function modifier_question($id) {

        $question=$this->getDoctrine()->getManager()->getRepository(Question::class)->find($id); 
        
        
        $em=$this->getDoctrine()->getManager()->getRepository(Matiere::class)->findAll();   
        $em1=$this->getDoctrine()->getManager()->getRepository(Thematique::class)->findAll();
        $em2=$this->getDoctrine()->getManager()->getRepository(TypeQuestion::class)->findAll();
           
        return $this->render('/admin/modifierQuestion.html.twig',
                array('question' => $question, 
                    'em'=>$em,
                    'em1'=>$em1,
                    'em2'=>$em2
        ));
    }

    public function modifier_question_suite($id)
    {
        $question=$this->getDoctrine()->getManager()->getRepository(Question::class)->find($id);

        if(isset($_POST['question']) && isset($_POST['Type']) ) {
            $contenu_question = $_POST['question'];
            $type_question = $_POST['Type'];

            $type = $this->getDoctrine()->getManager()->getRepository(TypeQuestion::class)->find($type_question);
           
            $question->setContenuQuestion($contenu_question);
            $question->setTypeQuestion($type);
            
            /* Récupération de la matière */
            if(isset($_POST['matiere']) && !empty($_POST['matiere'])) {
                $matiere = $_POST['matiere'];
                $matiere_question = $this->getDoctrine()->getManager()->getRepository(Matiere::class)->find($matiere);
                //dd($matiere_question);
                $question->setMatiereQuestion($matiere_question);             
            }
            /* Récupération de la thématique */
            if(isset($_POST['thematique']) && !empty($_POST['thematique'])) {
                $thematique = $_POST['thematique'];
                $thematique_question = $this->getDoctrine()->getManager()->getRepository(Thematique::class)->find($thematique);
                $question->setThematiqueQuestion($thematique_question);
            }

            /* Question à réponse libre */
            if(isset($_POST['Libre']) && !empty($_POST['Libre'])) {
                $propositions=[];
                $reponses=array($_POST['Libre']);            
                $question->setReponsesQuestion($reponses);
                $question->setPropositionsQuestion($propositions);
            }

            /* Question à réponse numérique  */
            if(isset($_POST['Numerique']) && !empty($_POST['Numerique'])) {
                $propositions=[];
                $reponses=array($_POST['Numerique']);            
                $question->setReponsesQuestion($reponses);
                $question->setPropositionsQuestion($propositions);
            }

            /* Question vrai ou faux */
            if(isset($_POST['VF']) && !empty($_POST['VF'])) {
        
                $reponses=array($_POST['VF']);   
                $propositions=["Vrai", "Faux"];            
                $question->setReponsesQuestion($reponses);
                $question->setPropositionsQuestion($propositions);
            }

            /* Question à choix unique */
            if(isset($_POST['UNIQUE']) && !empty($_POST['UNIQUE'])) {

                $i= $_POST['UNIQUE'];
                //dd("here");

                $choix="choix".$i;
                //dd($_POST[$choix]);
                $reponses=array($_POST[$choix]);  
                dd($reponses);
                //$question->setReponsesQuestion($reponses);
                //dd($question);

                $array = array();
                for($j=0;$j<3;$j++){

                    $choixx=$_POST["choix".$j];
                    
                    array_push($array, $choixx);
                    $propositions[$j] = $array[$j];

                }
                //$reponses=array($_POST[$choix]);   
                $question->setReponsesQuestion($reponses);
                //dd($question);
                $question->setPropositionsQuestion($propositions);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($question);
                $entityManager->flush();

                dd($question);
            }
            /* Question à choix multiple */
            
            if(isset($_POST['ChoixMultiple']) && !empty($_POST['ChoixMultiple'])) {
                
                $array = array();
                $value = $_POST["value"];
                
                //Propositions
                for($i=0; $i<=$value; $i++) {
                    $choixMulti=$_POST["choixx".$i];
                    array_push($array, $choixMulti);
                    $propositions[$i] = $array[$i];
                }

                //Réponses
                $reponses = array();
                $x=$_POST['ChoixMultiple'];

                $c=count($x);

                for($i=0;$i<$c;$i++){
                    $val=$x[$i];
                    $choixxx=$_POST["choixx".$val];
                    array_push($reponses, $choixxx);
                }

            }
        
            /*$entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();*/
            dd($question);
            return $this->redirectToRoute('admin_questions');
        }
    }

    public function questions_list(Request $request) {

        $questions = $this->getDoctrine()->getRepository(Question::class)->findAll();
        $types_question = $this->getDoctrine()->getRepository(TypeQuestion::class)->findAll();
        $thematiques_question = $this->getDoctrine()->getRepository(Thematique::class)->findAll();
        $matieres_question = $this->getDoctrine()->getRepository(Matiere::class)->findAll();

        if( isset($_POST['type_question']) || isset($_POST['matiere_question']) || isset($_POST['thematique_question']) ) {
            $type = $this->getDoctrine()->getRepository(TypeQuestion::class)->find($_POST['type_question']);
            $matiere = $this->getDoctrine()->getRepository(Matiere::class)->find($_POST['matiere_question']);
            $thematique = $this->getDoctrine()->getRepository(Thematique::class)->find($_POST['thematique_question']);
            $questions = $this->getDoctrine()->getRepository(Question::class)->findByTypeOrThematiqueOrMatiere($type,$thematique,$matiere);
            return $this->render('/admin/questions.html.twig', array(
                'questions' => $questions,
                'types_question' => $types_question,
                'thematiques_question' => $thematiques_question,
                'matieres_question' => $matieres_question
            ));
        }


        return $this->render('/admin/questions.html.twig', array(
            'questions' => $questions,
            'types_question' => $types_question,
            'thematiques_question' => $thematiques_question,
            'matieres_question' => $matieres_question
        ));
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