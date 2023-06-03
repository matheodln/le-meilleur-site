<?php
class Conf{
    static $databases = array(
        'default' => array(
            'host' => 'localhost',
            'database' => 'mamaroma_base',
            'login' => 'root',
            'password' => ''
        )
    );
}
Routeur::prefix('gladiator', 'admin');
Routeur::prefix('marchand', 'vendeur');
Routeur::prefix('voyageur', 'acheteur');
