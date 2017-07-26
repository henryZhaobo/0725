<?php
/*图片父类*/
class Image{
    public $width;
    public $height;
    public $type=null;
    public function __construct($_width,$_height){
        $this->width=$_width;
        $this->height=$_height;
    }
    public function Msg(){
        echo "我是子类JPEG的方法<br>";
    }
}
/*JPEG继承了Image类*/
class JPEG extends Image{
    public $type="jpeg";
    public $owner="kong";
    public function Msg(){
        parent::Msg(); //在子类中调用父类的方法
        echo "我是重写子类JPEG的方法<br>";
    }
    public function getOwner(){
        return $this->owner;
    }
}
class GIF extends Image{
   
}
$jpeg=new JPEG(100,120);
// var_dump($jpeg);
$jpeg->Msg();
echo $jpeg->type."<br>";
echo $jpeg->getOwner();
?>