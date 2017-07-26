<?php
//api:application Programming interface
Interface Image{
    public function Msg();
    public function Demo();
}
Interface Member{
    public function Sayhi();
    
}
class foo implements Image,member{
    public function Msg(){
        echo"hello";
        
    }
    public function Demo(){}
    public function Sayhi(){
        echo "member接口";
    }
}
$f=new foo();
$f->Sayhi();
var_dump($f->Msg());
?>