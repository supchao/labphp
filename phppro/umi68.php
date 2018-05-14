<?php
    class Sock {
        public $sockets; //socket的連接池，即client連接進來的socket標記
        public $users;  //所有client連接進來的訊息，包括socket、client名字等
        public $master; //socket的resource，即前期初始化socket時返回的socket資源

        public function

        __construct($address, $port) {

            //創建socket並把保存socket資源在$this->master
            $this->master = $this->WebSocket($address, $port);
            $this->sockets = array($this->master);


            function WebSocket($address, $port) {

                $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                socket_set_option($server, SOL_SOCKET, SO_REUSEADDR, 1);//1表示接受所有的數據包
                socket_bind($server, $address, $port);
                socket_listen($server);
                $this->e('Server Started : '.date('Y-m-d H:i:s'));
                $this->e('Listening on  : '.$address.
                ' port '.$port
            )
                ;
                return $server;
            }

        }
    }

?>