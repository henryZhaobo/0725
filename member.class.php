<?php
class Member1{
    protected $username="tom";
}
class Member2{
    protected $username="bob";
}
class VIP extends Member{
    public function demo(){
        return $this->username;
    }
}
$m=new VIP();
//public>protected>private
echo $m->demo();
?>