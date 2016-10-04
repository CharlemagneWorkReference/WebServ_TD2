<?php

class Personne
{
    public $nom, $prenom, $age, $adresse, $ville, $cp, $mail, $tel, $mobile, $skype;

    public function __construct($nom)
    {
        $this -> nom = $nom;
    }

    public function __toString()
    {
        $val = array(
            'nom' => $this -> nom,
            'prenom' => $this -> prenom,
            'age' => $this -> age,
            'adresse' => $this -> age,
            'ville' => $this -> ville,
            'cp' => $this -> cp,
            'mail' => $this -> mail,
            'tel' => $this -> tel,
            'mobile' => $this -> mobile,
            'skype' => $this -> skype
        );
        return json_encode($val);
    }
}