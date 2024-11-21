<?php
namespace Color;

interface Red{
    function info();
}

abstract class Yellow implements Red {
   abstract function display();
}

class Blue extends Yellow {
    function info() {
        echo "It's Red <br>";
    }
    function display () {
        echo "It's Yellow";
    }
}
?>