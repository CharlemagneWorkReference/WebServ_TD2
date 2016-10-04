<?php

require_once 'Personne.php';

class AfficheurDePersonne
{
    private $personne;

    public function __construct(Personne $personne)
    {
        $this -> personne = $personne;
    }

    public function vueCourte()
    {
        return "<div>Nom: " . $this -> personne -> nom . "<br>
                Prénom: " . $this -> personne -> prenom . "<br>
                Ville: " . $this -> personne -> ville . "</div>";
    }

    public function vueDetail()
    {
        return "<div>Nom: " . $this -> personne -> nom . "<br>
                Prénom: " . $this -> personne -> prenom . "<br>
                Age: " . $this -> personne -> age . "<br>
                Ville: " . $this -> personne -> ville . "<br>
                Adresse: " . $this -> personne -> adresse . "<br>
                Mail: " . $this -> personne -> mail . "<br>
                Tel: " . $this -> personne -> tel . "<br>
                Skype: " . $this -> personne -> skype . "</div>";
    }

    public function afficher($sel = 'vueCourte')
    {
        if ($sel != 'vueCourte')
            $this -> vueDetail();
        else
            $this -> vueCourte();
    }
}