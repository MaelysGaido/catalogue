<?php
require_once 'Article.php';


class Clothing extends Article {
    private $size;

    public function __construct ($id,$name,$description,$price,$picture,$weigth,$quantity,$available, $size) {

        parent::__construct ($id,$name,$description,$price,$picture,$weigth,$quantity,$available);

       $this->size = $size;
    }

    public function getSize() {
         return $this->size;
    }

}