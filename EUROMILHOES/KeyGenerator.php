<?php

// definição da classe
class KeyGenerator {

    // propriedades
        public $estrelas = array();
        public $numeros = array();

    // metodos
        public function __construct() {
            $this->estrelas = $this->populate(1,12,3);
            $this->numeros = $this->populate(1,50,5);
        }

        private function populate($min,$max,$nelem) {
            $bag = array();
            while (sizeof($bag) < $nelem) {
                $newelem = rand($min,$max);
                if (!in_array($newelem,$bag)) {
                    $bag[] = $newelem;
                }
            }
            sort($bag);
            return $bag;
        }

       public function asJSON() {
           return json_encode($this);
       }
}


// testes

//nova instancia da classe
//$key = new KeyGenerator();
//mostrar conteudo do estrelas
//var_dump ($key->estrelas);
//var_dump ($key->numeros);

?>