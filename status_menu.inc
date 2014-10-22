<?php

$pages = Array(
	'name' => "Big Green Button",
	'type' => "status",
	'page' => "plugin_setup.php",
	);

?>

<li><a href="<?php echo preg_replace('/.*\/plugins\/(.*)/', 'plugin.php?plugin=$1&page=plugin_setup.php', dirname(__FILE__)); ?>">Big Green Button</a></li>
