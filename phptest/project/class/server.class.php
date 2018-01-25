<?php

class server
{
	private $name;
	private $id;
	private $ressources;
	private $user_limit;
	private $actual_amount;

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
		//define ("ress_amount", 3);
		//define ("ress_name", array("Fer", "Pierre", "Bois"));
		//define ("server_speed_prod", array(1, 1, 1));
		//define ("server_storage_increase", array(1, 1, 1));
		//define ("server_increase_prod", array(1, 1, 1));
		for ($i = 0; $i < ress_amount; $i++)
		{
			$this->ressources[$i] = new ressource();
			$this->ressources[$i]->setName(ress_name[$i]);
			$this->ressources[$i]->setMax(server_storage_increase[$i] * 1000);
			$this->ressources[$i]->setAmount(1000 * server_storage_increase[$i] - 500);
		}
	}

	function getRessources()
	{
		return ($this->ressources);
	}

	function setLimit($limit)
	{
		$this->user_limit = $limit;
	}

	function getLimit()
	{
		return ($this->user_limit);
	}

	function setActual($actual)
	{
		$this->actual_amount = $actual;
	}

	function getActual()
	{
		return ($this->actual_amount);
	}
}

?>
