<?php
/**
 * MODUL 151 | GÄSTEBUCH
 *
 *
 * @author: Janina Imberg
 * @date 27.05.2013
 *
 * ---------------------------------------------------------------- */

class DBConnect {

    private $config = array(
        'user' => 'root',
        'password' => '',
        'host' => '127.0.0.1',
        'database' => 'guestbook'
    );

    public function __construct() {



        $mysqli = new mysqli($this->config['host'], $this->config['user'], $this->config['password'], $this->config['database'] );
var_dump($mysqli);
        /*if( $connect = mysqli_connect( $this->config['host'], $this->config['user'], $this->config['password'], $this->config['database'] ) ) {
            die($connect);
        } else {

        }*/
    }

}