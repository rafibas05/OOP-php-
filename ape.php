<?php
    require_once("animal.php");
    class ape extends Animal {
        public $legs ="2";

      public function suara(){
        return "auoooo";
      }
    }
?>
