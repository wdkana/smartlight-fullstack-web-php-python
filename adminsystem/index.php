<?php
if(isset($_SESSION['user']) && $_SESSION['user']=='adminsystem')
{
	echo "hello user";
}
else
{
	$msg = "error";
	return false;
}


?>