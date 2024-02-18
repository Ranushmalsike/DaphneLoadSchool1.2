<?php


class daphnescV{
//1
 //public  $xml;
//2
 public $v1 = "DAPHNE LORD SCHOOL";
//3
 public $v2 = "DAPHNE";
//4
public $v3 = "Discover a world of knowledge and possibilities at";
//5
public $v4 = "Welcome to Daphne load school, an institution that goes beyond traditional education";
//6
public $v5 = "Welcome to Daphne load school, an institution that goes beyond traditional education";
//7
public $v6 = "Welcome to Daphne load school, an institution that goes beyond traditional education";
//8
public $v7 = "Welcome to Daphne load school, an institution that goes beyond traditional education";
//9
public $v8 = "Welcome to Daphne load school, an institution that goes beyond traditional education";

//construct
 public function __construct() {
    //$this->xml = simplexml_load_file('vbl.xml');
}

 // Title
 public function title() {
     // Access the property using $this->
     print($this->v1);
 }

//logo
 public function logo(){
    print($this->v2);
 }

//home section1 (about us)
public function homesec1(){
    //print($this->xml->department->section1);
    print($this->v3);

}

//home section2 (about us)
public function homesec2(){
    
    print($this->v4);

}

//home section3 (about us)
public function homesec3(){
    
    print($this->v5);

}

//home section4 (about us)
public function homesec4(){
    
    print($this->v6);

}
//home section2 (about us)
public function homesec5(){
    
    print($this->v7);

}
//home section2 (about us)
public function homesec6(){
    
    print($this->v8);

}

}

//adm class
class admpanel{
    //admin page varibles
        //header
        public $adm_v1 = "DAPHNE M Pannel";

    //adm header
    public function adm_header(){
        print($this->adm_v1);
    }

}

//for all footer

class commonKeyWord_footer{
        public $vblset = "ReachIT";

    public function comFooter(){
        print($this->vblset);
    }
}
?>