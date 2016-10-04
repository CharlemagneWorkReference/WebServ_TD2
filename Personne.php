<?php

/**
 * Class Personne
 */
class Personne
{
    public $nom, $prenom, $age, $adresse, $ville, $cp, $mail, $tel, $mobile, $skype, $conjoint;

    /**
     * Personne constructor.
     * @param $nom
     */
    public function __construct($nom)
    {
        $this -> nom = $nom;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return json_encode($this);
    }

    /**
     *
     */
    public function compter()
    {
        for ($i = 1;$i <= $this -> age; $i++){
            echo $i . "<br>";
        }
        for ($i = $this -> age;$i > 0; $i--){
            echo $i . "<br>";
        }
    }

    /**
     * @param $punition
     * @param int $times
     */
    public function punir($punition, $times = 100)
    {
        for ($i = 1; $i <= $times; $i++){
            echo $punition . "<br>";
        }
    }

    /**
     * @param $annee
     * @return mixed
     */
    public function ageFutur($annee)
    {
        $curYear = date('Y');
        $delta = $annee - $curYear;
        return $this -> age + $delta;
    }

    /**
     * @param Personne $personne
     */
    public function setConjoint(Personne $personne)
    {
        $this -> conjoint = $personne;
    }
}