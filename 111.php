<?php
class My_class{
    static $myStatic = 42;
    static function my(){
        echo self::$myStatic;
    }
}
echo My_class::$myStatic;
echo My_class::my();
?>