<?php

  class Parallelepipedo {

    public $x;
    public $y;
    public $z;

    function __construct($x, $y, $z) {

      $this -> altezza = $y;
      $this -> lunghezza = $x;
      $this -> profondita = $z;
    }


    public function getArea() {

      $area = 2 * ($this -> lunghezza * $this -> altezza + $this -> lunghezza * $this -> profondita + $this -> altezza * $this -> profondita);

      return $area;
    }

    public function getVol() {

      $vol = $this -> lunghezza * $this -> altezza * $this -> profondita;

      return $vol;
    }
  }


  $parallelepipedi = [
    new Parallelepipedo(3, 4, 5),
    new Parallelepipedo(3, 4, 5),
    new Parallelepipedo(3, 4, 5),
    new Parallelepipedo(3, 4, 5)
  ];

  $sumArea = 0;
  $sumVol = 0;

  foreach ($parallelepipedi as $key) {
    echo 'Area: ' . $key -> getArea() . '<br>';
    echo 'Volume: ' . $key -> getVol() . '<br><br>';

    $sumArea += $key -> getArea();
    $sumVol += $key -> getVol();
  }

  echo "Somma aree: " . $sumArea . '<br>';
  echo "Somma volumi: " . $sumVol . '<br>';
 ?>
