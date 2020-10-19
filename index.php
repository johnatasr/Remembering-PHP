<?php

class Cliente{
    public $nome;

    public function getName($nome){
        $this->$nome = $nome;
    }
};


$cliente = new Cliente();

$cliente->getname('Joao');

define("NOME", "carlos");

echo 'Meu nome é '.NOME.', gosto de trabalhar';


echo "<br>";
echo "<br>";

// array
$carros = ['BMW', 'Audi', 'VOLKS'];
echo count($carros);

echo "<br>";

foreach($carros as $valor){
    echo $valor."<br>";
};


// array associativo, como um dict
$pessoas = array(
    array('nome' => 'Joao', 'idade' => 25, 'sexo' => 'M'),
    array('nome' => 'Maria', 'idade' => 21, 'sexo' => 'F'),
    array('nome' => 'Carlos', 'idade' => 31, 'sexo' => 'M')
);

var_dump($pessoas);

foreach($pessoas as $valor){
    foreach($valor as $indice => $dic){
        echo $indice.':'.$dic.'<br>';
    };

    echo '<br>';
};


echo "<hr>";
echo "<hr>";

interface PaymentInterface {
    public function payNow();
};

interface LoginInterface {
    public function loginFirst();
};


class Paypal implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
};

class Visa implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
};

class BankTransfer implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}
class Cash implements PaymentInterface{
    public function payNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }

    public function onlinePay(loginInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);

echo "<hr>";
echo "<hr>";


// class Person{
//     public $first;
//     public $last;
//     public $age;

//     const HUMAN = TRUE;

//     public function setFirst($first){
//         $this->first = $first;
//     };
//     public function getFirst(){
//         return $this->first;
//     };

//     public function setLast($last){
//         $this->last = $last;
//     };
//     public function getLast(){
//         return $this->last;
//     };

//     public function setAge($age){
//         $this->age = $age
//     };
//     public function getAge(){
//         return $this->age;
//     };

//     public static function itsHuman(){
//         return self::HUMAN;
//     }
// };

// class Pet extends Person{
//     public static $itsNotSilvester = TRUE;

//     public function getOwner(){
//         $a = $this->first;
//         return $a;
//     }
// };

// $pet = new Pet();

// echo $pet->getOwner();
