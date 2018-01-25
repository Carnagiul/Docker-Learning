<?php

class user
{
	private $name;
	private $mail;
	private $pass;
	private $id;

	function setName($name)
	{
		$this->name = $name;
	}

	function getName()
	{
		return ($this->name);
	}

	function setMail($mail)
	{
		$this->mail = $mail;
	}

	function getMail()
	{
		return ($this->mail);
	}

	function setPass($pass)
	{
		$this->pass = $pass;
	}

	function getPass()
	{
		return ($this->pass);
	}

	function setId($id)
	{
		$this->id = $id;
	}

	function getId()
	{
		return ($id);
	}
}

?>
