<?php

namespace App\Models;

use Nette\Utils\Array;

/**
 * Repr
 */
class Game
{
/**
   * field where game is played
   *
   * @var Field
   */
  private $field;
  /**
   * Team #1 vs. Team #2
   *
   * @var Array
   */
  private $teams;

  
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


}