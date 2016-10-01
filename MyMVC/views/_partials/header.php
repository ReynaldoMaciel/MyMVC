<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?= $pagina['Título'] ?></title>

        <!--[if lt IE 9]>
            <script src="../../_cdn/html5.js"></script>
         <![endif]--> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $pagina['Descricao'] ?>" />	
        <meta name="robots" content="index, follow" />
        <!-- SEMPRE PASSAR MANUAL-->
        <link rel="canonical" href="<?= HOME ?>/" />     
        <link rel="shortcut icon" href="<?= INCLUDE_PATH ?>/img/logo-framework.fw.png" />	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">	
        <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/rm.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/boot.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH ?>/css/style.css">
    </head>
    <body>
        <header class="rm-black">
            <?php require(getcwd() . '\\views\\_partials\\navbar.php'); ?>
        </header>