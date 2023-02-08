<?php

class Product{
//declarations des proprietés de la class
      public $name;
      public $price;
      public $description;

//ajout de methode d'initialisation d'objet dans la classe Product qui prends en paramètre 3 argumments
public function __construct($name,$price,$description) 
      {
        
            $this->name = $name;
            $this->price = $price;
            $this->$description = $description;
           
      }
     
      
}
//ici nouus avons creer deux objets  $product1 

$product1  = new Product('iPhone 12', 'This is a great iPhone', 799.99);
echo $product1->name;
echo $product1->price;
echo $product1->description;

echo "<br>";

//l'objet 2 product 2
$product2 = new Product('iPhone 14', 'This is a great iPhone', 800.99);
echo $product2->name;
echo $product2->price;
echo $product2->description;


?>