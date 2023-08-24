<?php 
//  static properties are associated to the class not instances while normal properties are asscoiated to the instance
 
 class Greetings {
   public static function welcome(){
      echo 'Good morning everyone';
   }

   public function __construct(){
      self::welcome();
   }
 }

 new Greetings();
//calling static methods 
 //Greetings::welcome().PHP_EOL;


class A{
   public static function welcome(){
      echo 'Welcome to this page';
   }
}

class B{
   public function message(){
      A::welcome();
   }
}

$obj = new B();
echo $obj->message();


class Domain {
   protected static function getWebsiteName(){
      return "W3schools";
   }
}

class domainW3 extends Domain{
   public $websiteName;

   public function __construct() {
      $this->websiteName = parent::getWebsiteName();
   }
}

$obj = new domainW3();
echo $obj->websiteName;





class Pie{
   public static $value= 3.1415;
   public function staticValue(){
      return self::$value;
   }
}

$pi = new Pie();
echo $pi->staticValue();


class Pi {
   public static $value = 3.145;

}

class Test extends Pi {
   public $x;

   public function xStatic(){
      return parent::$value;
   }
}

echo Test::$value;

$obj = new Test();
echo $obj->x;
?>