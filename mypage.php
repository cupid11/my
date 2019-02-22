<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<style>
    .page a{
       border:#1a1a1a 1px solid;
        text-decoration: none;
        padding: 2px 5px 2px 5px;
   }
    .aa{
       border: #000099 1px solid;
      background-color: #000099;
        padding: 4px 6px 4px 6px;
        margin: 2px;
        color: white;
        font-weight:bolder;   //加粗效果

    }
    .disable{
        border: #eee 1px solid;
        padding: 2px 5px 2px 5px;
        margin: 2px;
        color: #ddd;
    }
     .page{
         text-align: center;
     }
    .page form{
        display: inline;   //让form表单内容在一行显示，去掉自动换行
    }
    .content{
        height: 200px;
    }
     body{
         font-size: 12px;
         FONT-FAMILY: Verdana;
         width: 100%;
     }
</style>

  <body>
<?php
/**
 * Created by 方令鑫
 * User: harry
 * Date: 18.12.20
 * Time: 16:29
 */
$page=$_GET['p'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exam";
$pageSize=4;
$showPage=5;  //为了后面显示5个页码
//
/*// 创建连接*/
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("连接失败: " . $conn->connect_error);
}
//输出数据的个数   ，                               起始位置      ，显示条数
$sql = "SELECT * FROM xuexi LIMIT ".(($page-1)*$pageSize).",{$pageSize}";  //($page-1)*10.1 第二个10表示一页分数据个
$result = $conn->query($sql);
//
echo "<div class='content'>";
if ($result->num_rows > 0) {
// 输出数据
echo "<table border='2px'  cellspacing='0px' align='center' width='40%' style='text-align: center;margin-top: 80px;'>";
echo "<tr> <td>id</td><td>name</td><td>age</td></tr>";
while($row = $result->fetch_assoc()) {
//echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. " - address: " . $row["address"]. " - email " . $row["email"]. " -Sex: " . $row["sex"]. "<br>";

   echo "<tr>";
   echo "<td>{$row['id']} </td>";
   echo "<td>{$row['name']} </td>";
   echo "<td>{$row['age']} </td>";

   echo "</tr>";

}
} else {
echo "0 结果";
}
//获取数据总数
$total_sql="SELECT COUNT(*) FROM xuexi";
$total_result=mysqli_fetch_array(mysqli_query($conn,$total_sql));
$total=$total_result[0];
//计算页数
$total_pages=ceil($total/$pageSize);
echo "</table>";
echo "</div>";
//关闭数据库
$conn->close();
//显示数据+分页条
echo "<div class='page'>";
$page_banner="";
//计算偏移量    等于我们的显示页数减1在除以2
$pageoffset=($showPage-1)/2;

if ($page>1){   //显示上一页和首页，如果过了。就变成灰色
    $page_banner ="<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
    $page_banner .="<a href='".$_SERVER['PHP_SELF']."?p=".($page-1). "'><上一页</a>";
}else{
    $page_banner .="<span class='disable'>首页</span>";
    $page_banner .="<span class='disable'>上一页</span>";
}
$start=1;
$end=$total_pages;
if ($total_pages>$showPage){
    if ($page>$pageoffset){
        $page_banner .="...";
    }
    if ($page>$pageoffset){    //当前页大于偏移量的情况下
        $start=$page-$pageoffset;
        $end=$total_pages>$page+$pageoffset?$page+$pageoffset:$total_pages;
        //三段式  如果为真就执行？号后面的，否则就执行冒号后面的
        //当前页加上偏移量小于总页数，就会有省略，这样就也能保持显示五个
    }else{   //当前页小于偏移量的情况下
      $start=1;
      $end=$total_pages>$showPage?$showPage:$total_pages;
    }
    if ($page+$pageoffset>$total_pages){   //当前页加偏移量大于最后一页
        $start=$start-($page+$pageoffset-$end);  //等于开始位置减去（当前页+偏移量减去尾部位置）

    }
}

for ($i=$start;$i<=$end;$i++){
    if ($page==$i){
        $page_banner .="<span class='aa'>{$i}</span>";
    }else {
        $page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . $i . "'>{$i}</a>";
    }
}

//尾部省略的冒号输出
if ($total_pages>$showPage && $total_pages>$page+$pageoffset){   //当总页数大于显示的页数时候，并且最后一页大于大于当前页加上偏移量我们用冒号隐藏
    $page_banner .="...";
}


if ($page<$total_pages){    //  //显示下一页和尾页，如果过了。就变成灰色
    $page_banner .="<a href='".$_SERVER['PHP_SELF']."?p=".($page+1). "'>下 一页></a>";
    $page_banner .="<a href='".$_SERVER['PHP_SELF']."?p=".($total_pages). "'>尾页</a>";
}else{

        $page_banner .="<span class='disable'>下一页</span>";
        $page_banner .="<span class='disable'>尾页</span>";

}


 $page_banner .="共{$total_pages}页，";
 $page_banner .="<form action='mypage.php' method='get'>";
 $page_banner .="到第<input type='text' size='2' name='p'>页";
 $page_banner .="<input type='submit' value='确定'>页";
 $page_banner .="</form></div>";

 echo $page_banner;
 ?>
  </body>

</html>