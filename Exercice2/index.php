
<?php
 class Product{
      public $name;
      public $price;
      public $description;
public function __construct($name) 
      {
        
            $this->name = $name;
           
      }
 public function aff(){

      return $this->name;
 }     
      
}
//ici noius avons creer deux objets ( $product1 et $product2)
$product1 = new Product("iphone 14");
echo $product1->name;
$product2 = new Product("iphone 14 Pro");
echo $product2->name;


?>