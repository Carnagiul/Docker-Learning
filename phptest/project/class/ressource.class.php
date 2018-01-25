<?php

class ressource
{

	private $id;
	private $name;
	private $amount;
	private $max;
	private $prod;

	function setId($id)
	{
		$this->id = $id;
	}

	function getId()
	{
		return ($this->id);
	}

	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return ($this->name);
	}

	function setAmount($amount)
	{
		$this->amount = $amount;
	}

	function getAmount()
	{
		return ($this->amount);
	}

	function setMax($storage)
	{
		$this->max = $storage;
	}

	function getMax()
	{
		return ($this->max);
	}

	function setProd($prod)
	{
		$this->prod = $prod;
	}

	function getProd()
	{
		return ($this->prod);
	}

}

?>
