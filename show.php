<?php 
require("connect2.php");
//$Cmysqli = new mysqli('localhost','root','0000','guest');
//$Cmysqli->query("SET NAMES utf8");//以utf8讀取資料，讓資料可以讀取中文
$data = mysqli_query($Cmysqli,'SELECT * from showBoard order by guestTime desc');//讓資料由最新呈現到最舊
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<title>超時空便利貼</title>

<link rel="stylesheet" href="showStyle.css">
<link rel="icon" href="favicon.ico" type="image/ico" />
</head>

<body background="BGImage.jpg" style="background-repeat:repeat-x;">

<div class="container">
	<div class="jumbotron">
		<h1>嗨！</h1>
		<p>
		不論彼此相隔多遠</br>
		抑或時光如何飛逝</br>
		只要能回到大家回憶中保有的那個地方的話</br>
		還能讓時光從那時候延續...
		</p>
  		<p><a class="btn btn-primary btn-lg" href="#DN" role="button">留下便條！</a></p>
	</div>
</div>
    </div>
</div>
      
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
for($i=1;$i<=mysqli_num_rows($data);$i++){
 $rs=mysqli_fetch_assoc($data);
?>
<div class="container">
	<div class="CSSTableGenerator">
		<table align="center">
			<tr>
			  	<td><?php echo $rs['guestSubject']?></td>
			  	<!-- <td><a href="reply.php?id=<?php echo $rs['guestID'] ?>">回覆</a>
				<a href="delete.php?id=<?php echo $rs['guestID'] ?>">刪除</a> </td>	-->
            </tr>
            <tr>
              <td width="25%">暱稱</td>
              <td width="75%"><?php echo $rs['guestName']?></td>
            </tr>
            <tr>
              <td>信箱</td>
			  <td><?php echo $rs['guestEmail']?></td>
            </tr>
            <tr>
              <td>性別</td>
              <td><?php echo $rs['guestGender']?></td>
            </tr>
            <tr>
              <td>留言內容</td>
				<td><?php echo $rs['guestContent'];
					if( is_file('upload/'.$rs['photo']) )
					{
						echo '</br>';
						echo '<img src="upload/'.$rs['photo'].'"/>';
					}
					echo '</br>';
					echo "留言時間︰";
					echo $rs['guestTime'];?>		
				</td>
            </tr>
			<?php }?>
		</table>
		<a name="DN">
		<div class="panel panel-default">
			<div class="panel-heading">留下便條！</div>
 			<div class="panel-body" style="background-color: rgba(91,60,248,0.8)">
			<?php	require("post.php")?>
			</div>
		</div>
		</a>
 </div>
</div>
<br />


</body>
</html>
