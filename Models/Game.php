<?php

namespace App\Models;

use Nette\Utils\Array;

class Game
{



  var $s = "hello";
  var $a = 5;
  
  /**
   * Get field where game is played
   *
   * @return  Field
   */ 
  public function getField()
  {
    return $this->field;
  }
  
  /**
   * Set field where game is played
   *
   * @param  Field  $field  field where game is played
   *
   * @return  self
   */ 
  public function setField(Field $field)
  {
    $this->field = $field;
    echo "123";
    return $this;
  }
   
  /**
   * Get team #1 vs. Team #2
   *
   * @return  ArrayList
   */ 
  public function getTeams()
  {
    return $this->teams;
  }

  /**
   * Set team #1 vs. Team #2
   *
   * @param  Array  $teams  Team #1 vs. Team #2
   *
   * @return  self
   */ 
  public function setTeams(ArrayList $teams)
  {
    $this->teams = $teams;
    
    return $this;
  }
  function start(){
    echo "Bolsa Team 1 Team 2";
  }
  
  function helloKitty():void{

    echo "hello kuromi";
  }



  function helloKuromi():void{
    
    echo "hello kuromi";
  }




}