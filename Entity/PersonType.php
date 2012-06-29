<?php
namespace TJM\Bundle\SportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use TJM\Bundle\SportsBundle\Entity\Item;

/**
TJM\Bundle\SportsBundle\Entity\PersonType
@ORM\Table(name="sports_personTypes")
@ORM\Entity(repositoryClass="TJM\Bundle\SportsBundle\Repository\Items")
*/
class PersonType extends Item{
	/*==========
	==attributes/fields
	==========*/
	/**
	@var string $name
	@ORM\Column(name="name", type="string")
	*/
	protected $name;


	/*==========
	==getters and setters
	==========*/
	/**
	get name attribute
	@return string $name
	*/
	public function getName(){
		return $this->name;
	}
	/**
	set name attribute
	@return string $name
	*/
	public function setName($value){
		$this->name = $value;
		return $this;
	}
}
