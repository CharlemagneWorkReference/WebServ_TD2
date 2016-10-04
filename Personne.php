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
        return json_encode($this);
    }
}