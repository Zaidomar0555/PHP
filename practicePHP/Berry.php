

<?php
   include 'Fruit.php';
    /**
     *
     */
  class Berry extends Fruit {
    public $weight;
    // public function __construct($name, $color, $weight) {
    //   $this->name = $name;
    //   $this->color = $color;
    //   $this->weight = $weight;
    //
    // }




    // public function getWeight(){
    //   return $this->weight;
    // }

    public function intro() {
   echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
   public function message() {
     echo "Am I a fruit or a berry? ";
   }
 }


 ?>
