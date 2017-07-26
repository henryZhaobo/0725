<?php
include '../../../smarty.init.php';
$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD);
$pdo->query("set names utf8");
if($_GET['id']){
    $sql="select * from member where id=".$_GET['id'];
    //     echo $sql;
    $result=$pdo->query($sql);
    $data=$result->fetchAll(PDO::FETCH_OBJ);
    //     var_dump($data[0]);
    if($data[0]==null){
        echo "数据不存在";
    }
    if($_POST['send']){
        if($_POST['pwd2']==$_POST['pwd']){
            $pwd=$_POST['pwd'];
        }else {
            $pwd=md5($_POST['pwd']);
        }
        $sql= "update member set username='".$_POST['username']."',
                              pwd='".$pwd."',
                               email='".$_POST['email']."'
where id=".$_GET['id'];
        $result=$pdo->exec($sql);
        if($result){
            echo "<script>alert('数据修改成功');
location.href='home.php';
</script>";
        }else if ($result==0){
            echo "未修改";
        }else {
            echo "修改失败";
        }
    }
}else {
    header("location:home.php");
}
$smarty->assign("data", $data);

$smarty->display("home/update.html");
?>