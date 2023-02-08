
<?php 
// class Mycalculator qui prends une function add() qui fait la somme de deux nombres
class MyCalculator{
   public $nombre1;
   public $nombre2;
   public function __construct($nombre1, $nombre2) 
   {
     
       $this->nombre1 = $nombre1;
       $this->nombre2 = $nombre2;
        
   }
   public function add()
   {
     return $this->nombre1 + $this->nombre2;
   }
   public function multiply()
   {
     return $this->nombre1 * $this->nombre2;
   }  
}
//instanciation de l'okbjet $mycalc
$mycalc = new MyCalculator( 12, 6);
echo $mycalc-> add(); 
echo $mycalc-> multiply();

?>