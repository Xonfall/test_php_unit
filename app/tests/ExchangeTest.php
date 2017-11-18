<?php

class ExchangeTest extends \PHPUnit\Framework\TestCase
{
	private $owner; // User dans product
    private $receiver; // User
    private $date_debut;
    private $date_fin;
    private $product; // Product
    private $email; //EmailSender
    private $dbConnexion;

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

    public function testSave()
    {
    	$exchange = new Exchange($this->owner, $this->receiver, $this->product, $this->date_debut, $this->date_fin)
    	
    	$mock = $this->createMock(User::class);
    }
}