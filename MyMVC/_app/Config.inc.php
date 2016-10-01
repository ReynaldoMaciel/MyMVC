<?php

require('Url.class.php');
require('Page.class.php');
require('Controller.class.php');

/*INCLUINDO TODOS OS MODELS*/
/*PESQUISAR FORMA MELHOR DE FAZER ISSO*/

$files = scandir(getcwd() . "\\models\\");
foreach ($files as $file) {
    if (is_file(getcwd() . "\\models\\" . $file)) {
        require(getcwd() . "\\models\\" . $file);
    }
}
$files = scandir(getcwd() . "\\_app\\Conn\\");
foreach ($files as $file) {
    if (is_file(getcwd() . "\\_app\\Conn\\" . $file)) {
        require(getcwd() . "\\_app\\Conn\\" . $file);
    }
}
// CONFIGRAÇÕES DO BANCO ####################
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');

// DEFINE A BASE DO SITE ####################
define('HOME', 'http://localhost/MyMVC');
define('THEME', 'MyMVC');
define('SEPARATOR', '/');
define('INCLUDE_PATH', HOME . '/' . 'themes' . SEPARATOR . THEME);
define('REQUIRE_PATH', 'themes' . SEPARATOR . THEME);

/* PEGANDO URL COMO VETOR */
$URL = new Url();
if ($URL->getText() != null):
    /* CONVENÇÃO */
    /* Colocando primeira letra como letra maiuscula */
    $aux = ucfirst(strtolower($URL->asArray()[0]));
    //var_dump($aux);
    //VERIFICANDO SE EXISTE ARQUIVO COM NOME DA URL NA PASTA CONTROLLERS
    $file = getcwd() . '\\controllers\\' . $aux . '.class.php';
    if (is_file($file)):
        require($file);

        $obj = new $aux;

        if (!isset($URL->asArray()[1])):
            call_user_func(array($obj, "index"));
        else:
            $method = $URL->asArray()[1];
            if ($method == null):
                call_user_func(array($obj, "index"));
            else:
                if (method_exists($obj, $method)):
                    call_user_func(array($obj, $method));
                else:

                    die("404 Página não encontrada");
                endif;
            endif;
        endif;
    else:
        die("404 Página não encontrada");
    endif;
else:
    require(getcwd() . '\\controllers\Home.class.php');
    $inicio = new Home;
    $inicio->index();
endif;



