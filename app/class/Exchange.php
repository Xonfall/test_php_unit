<?php

class Exchange
{
    private $owner; // User dans product
    private $receiver; // User
    private $date_debut;
    private $date_fin;
    private $product; // Product
    private $email; //EmailSender
    private $dbConnexion;

    const DATE_FORMAT = 'Y-m-d H:i:s';

    public function __construct(User $owner, User $receiver, Product $product, $debut, $fin)
    {
        $this->owner = $owner;
        $this->receiver = $receiver;
        $this->product = $product;
        $this->email = new EmailSender();
        $this->dbConnexion = new DatabaseConnection();
        $this->date_debut = date(self::DATE_FORMAT, strtotime($debut));
        $this->date_fin = date(self::DATE_FORMAT, strtotime($fin));
    }

    public function save()
    {
        $date_now = date(self::DATE_FORMAT);

        if ($this->checkObjType($this->owner, User::class)
            && $this->checkObjType($this->receiver, User::class)
            && $this->checkObjType($this->product, Product::class))
        {

            if ($this->owner->isValid()
                && $this->receiver->isValid()
                && $this->product->isValid())
            {
                if ($this->receiver->checkAge())
                {
                    $this->email->sendEmail($this->receiver, 'Vous êtes mineur');
                }

                if ($this->date_debut > $date_now && $this->date_fin > $this->date_debut)
                {
                    return true;
                }
            }
        }

        return false;
    }

    public function checkObjType($obj, $type)
    {
        return $obj instanceof $type ? true : false;
    }
}