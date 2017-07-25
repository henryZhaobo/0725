<?php
//导入smarty配置文件
include '../../../smarty.init.php';
$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD);
$pdo->query("set names utf8");
/////////////分页开始////////////
$total=$pdo->query("select * from member")->rowCount();
//总记录数；
// echo $total;
$pagesize=3;//每页显示数据的条数
$pagetotal=ceil($total/$pagesize);
//总页数
// echo $pagetotal;
//查询的sql语句
if($_GET['page']){
    $page=$_GET['page'];
    if($page>=$pagetotal){
        //当前页大于总页数时就等于总特殊
        $page=$pagetotal;
    }
}else{
    
    $page=1;
}
$sql="select * from member order by id desc limit ".($page-1)*$pagesize.",".$pagesize;
/////////////分页结束//////////////////
// var_dump($pdo);
// $sql="select * from member order by id desc";
$result=$pdo->query($sql);
$data=$result->fetchAll(PDO::FETCH_OBJ);
$str="<ul class='pagination pagination-lg'>";
if ($page==1){
    $str.='<li class="disabled">
         <a href="?page='.($page-1).'">
          <span>&laquo;</span>
          </a>
          </li>';
}else {
    $str.='<li>
         <a href="?page='.($page-1).'">
          <span>&laquo;</span>
          </a>
          </li>';
}
//前一夜
for($i=1;$i<=$pagetotal;$i++){
    if ($page==$i){
        $str.="<li class='active'><a href='?page=".$i."'>".$i."</a></li>";
    }else {
    $str.="<li><a href='?page=".$i."'>".$i."</a></li>";}
}
if ($page=$pagetotal){
    $str.='<li class="disabled">
         <a href="?page='.($page+1).'">
          <span>&raquo;</span>
          </a>
          </li>';
}else {
    $str.='<li>
         <a href="?page='.($page+1).'">
          <span>&raquo;</span>
          </a>
          </li>';
}
$str.="</ul>";
$smarty->assign("page", $str);
// var_dump($data);
//指定要显示的静态页面
$smarty->assign("data", $data);
$smarty->display("home/home.html");
?>