<?php

require_once ("project/class/user.class.php");
require_once ("project/class/ressource.class.php");
require_once ("project/class/server.class.php");
require_once ("project/class/cache.server.class.php");
include ("project/config/config.php");



echo username;
echo "<br />";
$server = new server();
$server->setRessources();
$obj = $server->getRessources();
foreach ($obj as $o)
{
	echo "Nom : " . $o->getName() . "<br />Amount : " . $o->getAmount() . " <br />Max : " . $o->getMax() . "<br />";
}
?>
