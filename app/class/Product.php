<?php

class Product
{
    private $nom;
    private $owner;


    public function __construct($nom, User $user)
    {
        $this->nom = $nom;
        $this->owner = $user;
    }

    public function isValid() {
        if ($this->owner instanceof User && $this->checkName()) {
            $this->owner->isValid();

            return true;
        }

        return false;
    }

    public function checkName()
    {
        return empty(!is_string($this->getNom())) ? false : true;
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
     * @return User
     */
    public function getOwner(): User
    {
        return $this->owner;
    }

    /**
     * @param User $owner
     */
    public function setOwner(User $owner)
    {
        $this->owner = $owner;
    }


}