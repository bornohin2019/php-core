<?php 
class Drinks{
    public $name;
    public $flaber;
    public $cotars;


    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
       return $this->name;
    }


    function set_flaber($flaber) {
        $this->flaber = $flaber;
    }
     function get_flaber() {
       return $this->flaber;
    }

    function set_cotars($cotars){
        $this->name = $cotars;
    }
    function get_cotars(){
        return $this->cotars;
    }
}

$wine = new Drinks();

$wine->set_name("Wine");
$wine->set_flaber("Lemon");
$wine->set_cotars("2 peg");

echo $wine->get_name();
echo "<br>";
echo $wine->get_flaber();
echo "<br>";
echo $wine->get_cotars();
?>