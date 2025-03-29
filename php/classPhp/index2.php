<?php

class Cachorro {
    public $cor;

    public function setCor(string $cor) {
        $this->cor = $cor;
    }

    public function getCor() {
        return $this->cor;
    }
}

$animal = new Cachorro();
$animal->setCor('black');
echo $animal->getCor();

?>

