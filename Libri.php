<?php
class Libri {
  public $isbn;
  public $titolo;
  public $nomeAutore;
  public $pagine;
  public $genere;
  public $prezzo;
  public $scaffale;
  public function __construct($_isbn, $_titolo) {
    $this->isbn=$_isbn;
    $this->titolo=$_titolo;
  }
  public function 
}
$ilPiccoloPrincipe = new Libri('ISBN001', 'Il Piccolo Principe');
var_dump($ilPiccoloPrincipe);

?>