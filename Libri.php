<?php

class Libreria {
  public $genere;
}


class Libri extends Libreria {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $pagine;
  public $prezzo;
  public $scaffale;
  public $formato;
  public function __construct($_isbn, $_titolo) {
    $this->isbn = $_isbn;
    $this->titolo = $_titolo;
  }
  public function getPosition()
  {
    if (empty($this->scaffale)) {
      die('Lo scaffale non è stato inserito');
    }
    return $this->scaffale;
  }
}


class Cd extends Libreria {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $tracce;
  public $prezzo;
  public $scaffale;
  public $formato;
  public function __construct($_isbn, $_titolo) {
    $this->isbn = $_isbn;
    $this->titolo = $_titolo;
  }
  public function getPosition()
  {
    if (empty($this->scaffale)) {
      die('Lo scaffale non è stato inserito');
    }
    return $this->scaffale;
  }
}

class Guide extends Libreria {
  public $isbn;
  public $titolo;
  public $pagine;
  public $editore;
  public $prezzo;
  public $scaffale;
  public $formato;
  public function __construct($_isbn, $_titolo)
  {
    $this->isbn = $_isbn;
    $this->titolo = $_titolo;
  }
  public function getPosition()
  {
    if (empty($this->scaffale)) {
      die('Lo scaffale non è stato inserito');
    }
    return $this->scaffale;
  }
}
// esempio con un libro
$cercandoLonda = new Libri('978-88-09-81802-6', 'Cercando l\'onda');
$cercandoLonda->nomeAutore = 'Christopher Vick';
$cercandoLonda->pagine = 382;
$cercandoLonda->prezzo = 14.70;
$cercandoLonda->scaffale = '10B';
$cercandoLonda->formato = 'Digitale/Audiobook';
$cercandoLonda->genere = 'Drammatico';

var_dump($cercandoLonda);

// esempio con un cd
$curtainCall = new Cd('456-789-1011-12', 'Curtain Call');
$curtainCall->nomeAutore = 'Eminem';
$curtainCall->tracce = 20;
$curtainCall->prezzo = 21.99;
$curtainCall->scaffale = '10A';
$curtainCall->formato = 'Vinile';
$curtainCall->genere = 'Rap/Hip Hop';

var_dump($curtainCall);

// esempio con guida turistica
$portogallo = new Guide('956-789-1511-14', 'Portogallo');
$curtainCall->editore = 'Lonely Planet';
$portogallo->pagine = 150;
$portogallo->prezzo = 21.99;
$portogallo->scaffale = '15C';
$portogallo->formato = 'Pocket';
$portogallo->genere = 'Guide Turistiche';

var_dump($portogallo);
?>