<?php
    session_start();

    //carrega o autoload do facebook
    require 'Facebook/autoload.php';

    //instancia a classe Facebook
    $fb = new Facebook\Facebook([
        //define o app id
        'app_id' => '',
        //define o token
        'app_secret' => '',
        //define a versão
        'default_graph_version' => 'v8.0'
    ]);
?>
