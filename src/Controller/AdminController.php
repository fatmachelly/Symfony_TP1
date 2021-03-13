<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $arrayAgence = [
            array(
                'id'            =>  1,
                'nom'           =>  'Jallouli',
                'telagence'     =>  '58229794',
                'adresseville'  =>  'Tunis-Hammamet'
            ),
            array(
                'id'            =>  2,
                'nom'           =>  'Achref',
                'telagence'     =>  '58229794',
                'adresseville'  =>  'Tunis'
            )
        ];
        $arrayVoiture = [
            array(
                'id'            =>  1,
                'marque'        =>  'Porsche',
                'couleur'       =>  'zarga',
                'description'   =>  'Heyyyylaaaa',
                'nbrePLace'     =>  2,
                'nomAgence'     => 'Jallouli'
            ),
            array(
                'id'            =>  2,
                'marque'        =>  'R5',
                'couleur'       =>  'Rose',
                'description'   =>  'Zmordaa',
                'nbrePLace'     =>  2,
                'nomAgence'     => 'Achref'
            )
        ];
        return $this->render('admin/index.html.twig', [
            'agences'   =>  $arrayAgence,
            'voitures'  =>  $arrayVoiture
        ]);
    }

    /**
     * @Route("/agence/ajouter", name="agence-ajouter")
     */
    public function ajouter () {
        dd ('AJouter Agence');
    }

    /**
     * @Route("/agence/consulter/{id}", name="agence-consulter")
     */
    public function consulter ($id) {
        dd ('details agence', $id);
    }

   /**
     * @Route("/agence/modifier/{id}", name="agence-modifier")
     */
    public function modifier ($id) {
        dd ('Modifier agence', $id);
    }

    /**
     * @Route("/agence/supprimer/{id}", name="agence-supprimer")
     */
    public function supprimer ($id) {
        dd ('Supprimer agence', $id);
    }

    /**
     * @Route("/voiture/ajouter", name="voiture-ajouter")
     */
    public function ajouterVoiture () {
        dd ('AJouter voiture');
    }

    /**
     * @Route("/voiture/consulter/{id}", name="voiture-consulter")
     */
    public function consulterVoiture ($id) {
        dd ('details voiture', $id);
    }

   /**
     * @Route("/voiture/modifier/{id}", name="voiture-modifier")
     */
    public function modifierVoiture ($id) {
        dd ('Modifier voiture', $id);
    }

    /**
     * @Route("/voiture/supprimer/{id}", name="voiture-supprimer")
     */
    public function supprimerVoiture ($id) {
        dd ('Supprimer voiture', $id);
    }
}
