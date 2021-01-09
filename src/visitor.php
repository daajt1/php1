<?php
    class Visitor
    {
        private static $visitors = 0;
        function __construct()
        {
            self::$visitors++;
        }
        static function getVisitors()
        {
            return self::$visitors;
        }
    }
    // Instantiate the Visitor class.
    $visits = new Visitor();
    echo Visitor::getVisitors()."<br />";
    // Instantiate another Visitor class.
    $visits2 = new Visitor();
    echo Visitor::getVisitors()."<br />";

/*  importar clases php 
    require_once("classes/Books.class.php");
require_once("classes/Employees.class.php");*/

?>