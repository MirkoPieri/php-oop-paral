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
    } //funzione per calcolare area

    public function getVol() {

      $vol = $this -> lunghezza * $this -> altezza * $this -> profondita;

      return $vol;
    } //funzione per calcolare volume
  }

  //prendo dati da URL
  $x = $_GET['x'];
  $y = $_GET['y'];
  $z = $_GET['z'];

  $x1 = $_GET['x1'];
  $y1 = $_GET['y1'];
  $z1 = $_GET['z1'];

  $x2 = $_GET['x2'];
  $y2 = $_GET['y2'];
  $z2 = $_GET['z2'];

//creo array oggetti
  $parallelepipedi = [
    new Parallelepipedo($x, $y, $z),
    new Parallelepipedo($x1, $y1, $z1),
    new Parallelepipedo($x2, $y2, $z2)
  ];

  $sumArea = 0;
  $sumVol = 0;
  //stampo tutte le formule
  foreach ($parallelepipedi as $key) {
    echo 'Area: ' . $key -> getArea() . '<br>';
    echo 'Volume: ' . $key -> getVol() . '<br><br>';

    $sumArea += $key -> getArea();
    $sumVol += $key -> getVol();
  }
  //stampo la somma di voliume e area
  echo "Somma aree: " . $sumArea . '<br>';
  echo "Somma volumi: " . $sumVol . '<br>';
 ?>
