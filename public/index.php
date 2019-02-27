<?php 

require_once "../vendor/autoload.php";

use App\Model\Usuario;

$usuario = new Usuario(null, "leandro", "leandro@gmail.com", "1234", 1, 1);

/**

require_once "../env.php"


require_once "../App/View/header.phtml";


if(isSet($_SESSION['logado'])){
	var_dump($_SESSION['logado']);
	require_once "../App/View/home/index.phtml";
}
else
{
	require_once "../App/View/login/index.phtml";	
}

require_once "../App/View/footer.phtml";

*/