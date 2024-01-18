<?php


class Animal {
    protected function printSpecialization() {
        echo "Sono un animale\n";
    }
}

class Vertebrate extends Animal {
    public function printDetails() {
        parent::printSpecialization();
        echo "Sono un animale Vertebrato\n";
    }
}

class ColdBlooded extends Vertebrate {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class WarmBlooded extends Vertebrate {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class Reptile extends ColdBlooded {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un rettile\n";
    }
}

class Amphibian extends ColdBlooded {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un anfibio\n";
    }
}

class Fish extends ColdBlooded {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un pesce\n";
        echo "Nuoto!\n";
    }

   
}

class Bird extends WarmBlooded {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un uccello\n";
    }
}

class Mammal extends WarmBlooded {
    public function printDetails() {
        parent::printDetails();
        echo "Sono un mammifero\n";
    }
}

$magikarp = new Fish();
$magikarp->printDetails();


$aquila = new Bird();
$aquila->printDetails();



?>