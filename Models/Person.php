<?php

namespace App\Models;

/**
 * Represents any person.
 */
class Person
{

  /**
     * Person name
     *
     * @var string
     */
    protected $name;

  /**
   * age of person
   *
   * @var int
   */
  private $age;
  
  /**
   * Get name of person
   *
   * @return  string 
   */ 

  public function getName()
  {
    return $this->name;
  }

  /**
   * Get age of person
   *
   * @return  int
   */ 

  public function getAge()
  {
    return $this->age;
  }

  /**
   * Set name of person
   *
   * @param  int  $age  age of person
   *
   * @return  self
   */ 

   public function setName(string $name)
   {
       $this->name = $name;

       return $this;
   }

  /**
   * Set age of person
   *
   * @param  int  $age  age of person
   *
   * @return  self
   */

  public function setAge(int $age)
  {
      $this->age = $age;
      
      return $this;
    }
    function run(){
      echo "running";
    }
}
