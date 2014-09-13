<?php

class mysql{
    function connect($db){
        echo "connect to database${db[0]}\r\n";
    }
}

class sqlproxy{

    private $target;

    function __construct($tar){
        $this->target[] = new $tar();
    }

    function __call($name, $args){
        foreach ($this->target as $obj) {
            $r = new ReflectionClass($obj);
            if($method = $r->getMethod($name)){
                if($method->isPublic()&&!$method->isAbstract()){
                    echo "do something before method is called!\r\n";
                    $method->invoke($obj,$args);
                    echo "do something after method is called!\r\n";
                }
            }
            # code...
        }
    }
}

$obj = new sqlproxy('mysql');
$obj->connect('member');