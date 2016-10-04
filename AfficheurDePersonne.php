<?php

require_once 'Personne.php';

/**
 * Class AfficheurDePersonne
 */
class AfficheurDePersonne
{
    private $personne;

    /**
     * AfficheurDePersonne constructor.
     * @param Personne $personne
     */
    public function __construct(Personne $personne)
    {
        $this -> personne = $personne;
    }

    /**
     * @return string
     */
    public function vueCourte()
    {
        return "<div>Nom: " . $this -> personne -> nom . "<br>
                Prénom: " . $this -> personne -> prenom . "<br>
                Ville: " . $this -> personne -> ville . "</div>";
    }

    /**
     * @return string
     */
    public function vueDetail()
    {
        $res = "<div>Nom: " . $this -> personne -> nom . "<br>
                Prénom: " . $this -> personne -> prenom . "<br>
                Age: " . $this -> personne -> age . "<br>
                Ville: " . $this -> personne -> ville . "<br>
                Adresse: " . $this -> personne -> adresse . "<br>
                Mail: " . $this -> personne -> mail . "<br>
                Tel: " . $this -> personne -> tel . "<br>
                Skype: " . $this -> personne -> skype . "</div>";
        $afficheruConj = new AfficheurDePersonne($this -> personne -> conjoint);
        $res .= $afficheruConj -> vueCourte();
        return $res;
    }

    /**
     * @param string $sel
     */
    public function afficher($sel = 'vueCourte')
    {
        if ($sel != 'vueCourte')
            $this -> vueDetail();
        else
            $this -> vueCourte();
    }
}