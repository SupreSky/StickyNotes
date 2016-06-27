<?php
if(!isset($_POST['guestName']) or !isset($_POST['guestContent'])) {
    header("LOCATION:show.php");
}
$name = $_POST['guestName'];
$text = $_POST['guestContent'];
$date = date("Y-m-d");
$photo_name = "None";

echo $_FILES['photo']['type'];
$y = strpos("--".$_FILES['photo']['type'],'image');
echo $y;
if($y==null && $_FILES["photo"]["error"]!=4){
    $text = urlencode($text);
    $name = urlencode($name);
    echo "<script>alert('the file type is wrong!');location.href='./index.php?name=$name && text=$text'</script>";
}
else
{
    $upload_dir ="upload/";
    $upload_file = $upload_dir.$_FILES['photo']['name'];
    if(strlen($upload_file)>0 && move_uploaded_file($_FILES['photo']['tmp_name'],$upload_file)){
        $photo_name = $_FILES['photo']['name'];
    }
	$sql = "INSERT INTO showBoard (`guestName`,`guestEmail`,`guestGender`,`guestSubject`,`guestContent`,`guestTime`,`photo`)
							values ('$guestName','$guestEmail','$guestGender','$guestSubject','$guestContent','$guestTime','$photo_name')";
	mysqli_query($Cmysqli,$sql) or die(mysqli_error($Cmysqli));
}

if($photo_name!="None"){
    $sql = "SELECT `guestID`,`photo` FROM showBoard WHERE `guestName`='$name' AND `guestContent`='$text'";
    $row = mysqli_fetch_array(mysqli_query($Cmysqli,$sql));
    $id = $row[guestID];
    $ext=strrchr($_FILES['photo']['name'],'.');
    $new_photo_name = (string)$id.$ext;
    rename($upload_file, $upload_dir.$new_photo_name);
    $sql = "UPDATE showBoard SET `photo`='$new_photo_name' WHERE `guestID`='$id' ";
	mysqli_query($Cmysqli,$sql) ;
	header("LOCATION:show.php");
}
else if($_FILES['photo']['error']==4) header("LOCATION:show.php");
?>
