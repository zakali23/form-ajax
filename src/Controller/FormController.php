<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 */

namespace Controller;

use Model\Form;
use Model\FormManager;


/**
 * Class FormController
 * @package Controller
 */
class FormController extends AbstractController
{

    /**
     * @return string
     */
    public function index()
    {
        $form = new FormManager();
        $data=[];
        $errors=[];
        $valid=[];
        if (isset($_POST['envoyer'])) {
            $data['nom'] = '';
            $data['prenom'] = '';
            $data['email'] = '';
            $data['message'] = '';

            //verification du remplissage des champs
            if ($_POST['nom'] != "") {
                $data['nom'] = $_POST['nom'];
            } else {
                $errors[] = "Veuillez saisir ce champ.";
            }
            if ($_POST['prenom'] != "") {
                $data['prenom'] = $_POST['prenom'];
            } else {
                $errors[] = "Veuillez saisir ce champ.";
            }
            if ($_POST['email'] != "") {
                $data['email'] = $_POST['email'];
            } else {
                $errors[] = "Veuillez saisir ce champ.";
            }
            if ($_POST['message'] != "") {
                $data['message'] = $_POST['message'];

            } else {
                $errors[] = "Veuillez saisir ce champ";
            }
            $valid[]= "votre message a été envoyé ";
            var_dump($data);
            $formulaire = $form->insert($data);
        }
        return $this->twig->render('Form/index.html.twig', ['data'=>$data,'errors'=>$errors, 'valid'=>$valid, 'formulaire'=>$formulaire]);
    }

    /**
     * @param $id
     * @return string
     */
    public function show(int $id)
    {


        return $this->twig->render('Form/show.html.twig');
    }



}