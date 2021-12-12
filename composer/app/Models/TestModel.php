<?php

namespace App\Models;

class TestModel {
  private $text = "Hello PHP!!";

  public function getHello() {
    return $this->text;
  }
}

?>