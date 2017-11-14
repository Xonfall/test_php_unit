<?php

class User
{
    private $nom;
    private $prenom;
    private $email;
    private $age;

    public function __construct()
    {
        $this->nom = 'Bachayani';
        $this->prenom = 'Jérémy';
        $this->email = 'jeremy.bachayani@gmail.com';
        $this->age = 18;
    }

    public function isValid()
    {
        return $this->checkAge() && $this->checkEmail() && $this->checkNames() ? true : false;
    }

    public function checkAge()
    {
        return empty($this->getAge()) && $this->getAge() > 18 ? false : true;
    }

    public function checkNames()
    {
        return empty($this->getNom()) && empty($this->getPrenom()) ? false : true;
    }

    public function checkEmail()
    {
        return empty(filter_var($this->getEmail(),FILTER_VALIDATE_EMAIL)) ? false : true;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}