<?php

class server
{
	private $name;
	private $id;
	private $ressources;

	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return ($this->name);
	}

	function setId($id)
	{
		$this->id = $id;
	}

	function getId()
	{
		return ($this->id);
	}

	function setRessources()
	{
		$this->ressources[0] = new ressource();
		$this->ressources[1] = new ressource();
		$this->ressources[2] = new ressource();

		$this->ressources[0]->setName("Fer");
		$this->ressources[1]->setName("Pierre");
		$this->ressources[2]->setName("Bois");

		$this->ressources[0]->setMax(2000);
		$this->ressources[1]->setMax(2000);
		$this->ressources[2]->setMax(2000);

		$this->ressources[0]->setAmount(1000);
		$this->ressources[1]->setAmount(1000);
		$this->ressources[2]->setAmount(1000);
	}

	function getRessources()
	{
		return ($this->ressources);
	}
}

?>
