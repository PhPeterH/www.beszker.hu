<?php


include("./config.php");

require_once('./header.php');


	if(isset($_GET['r'])&&!empty($_GET['r'])){

		if(file_exists('./content/'.$_GET['r'].'.php')){
			require_once('./content/'.$_GET['r'].'.php');
		}else{
			//header('Location: 404.html');
			require_once('./content/404.php');
		}
		
	}else{
		require_once('./content/fooldal.php');	
	}

require_once('./footer.php');

?>