<?php

class building
{
	private $name;
	private $id;
	private $descr;
	private $level;
	private $max_level;
	private $cost;
	private $time;
	private $is_aviable;
	private $next_aviable;
	private $is_pending;
	private $next_pending;
	private $research_cost;
	private $building_cost;

	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return ($this->getName());
	}

	function setId($id)
	{
		$this->id = $id;
	}

	function getId()
	{
		return ($this->id);
	}
}

?>
