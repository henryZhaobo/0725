<?php
// oop:面向对象的编程
//声明类
class Member{
    public $username="tom";
    //构造方法
  /*   public function Member(){ //方法名与类名称相同  类实例化时首先触发构造方法。
        echo "Member";
    } */
    /**
     * 获取类中的用户名
     * @return string  */
    public function __construct(){
        echo "construct Member<br>";
    }
    public function Msg(){
        echo "Msg方法";
    }
    public function getusername(){
        /* var_dump($this->username); */
        return $this->Msg();
    }
    public function __destruct(){//析构方法   构造方法的反动作
        echo "destruct Member<br>";
    }
}
//实例化类
$m=new Member();
echo $m->getusername()."<br>";
echo $m->username."<br>";
echo $m->Msg()."<br>";
?>