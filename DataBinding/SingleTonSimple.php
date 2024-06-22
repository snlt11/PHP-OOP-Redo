<?php
class Index
{
    private static $instance = null;
    private $name;

    private function __construct()
    {
        $this->name = "tester";
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Index();
        }
        return self::$instance;
    }

    public function getName()
    {
        return $this->name;
    }
}

$obj = Index::getInstance();
echo $obj->getName();
