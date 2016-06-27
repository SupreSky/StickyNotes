<?php
require("connect2.php");
@$guestID = $_POST['guestID'];
@$guestName = $_POST['guestName'];
@$guestEmail = $_POST['guestEmail'];
@$guestGender = $_POST['guestGender'];
@$guestSubject = $_POST['guestSubject'];
@$guestContent = $_POST['guestContent'];
@$guestTime = date("Y:m:d H:i:s");
if(isset($guestName)){
	require("upload.php");
	//header("location:show.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我要留言</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="top">
    </div>
    <form id="form1" name="form1" method="post" action="post.php" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="guestName" class="col-sm-4 control-label">暱稱：</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="您的暱稱" name="guestName" id="guestName" />
            </div>
        </div>
        <div class="form-group">
            <label for="guestEmail" class="col-sm-4 control-label">信箱：</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="您的信箱" name="guestEmail" id="guestEmail" />
            </div>
        </div>
        <div class="form-group">
            <label for="guestGender" class="col-sm-4 control-label">性別：</label>
            <label class="radio-inline">
                <input type="radio" name="guestGender" id="radio" value="男" /> 男
            </label>
            <label class="radio-inline">
                <input type="radio" name="guestGender" id="radio2" value="女" />女
            </label>
        </div>
        <div class="form-group">
            <label for="guestSubject" class="col-sm-4 control-label">留言主旨：</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="guestSubject" id="guestSubject" />
            </div>
        </div>
        <div class="form-group">
          <label for="guestContent" class="col-sm-4 control-label">留言內容：</label>
          <div class="col-sm-6">
              <textarea name="guestContent" class="form-control" id="guestContent" rows="5"></textarea>
          </div>
		</div>
		<div class="form-group" style="padding-left: 500px">
				<input type="file" name="photo" id="fileToUpload">
				<input type="submit" name="button" id="button" value="送出" class="btn" style="color: #FFFFFF"/>
		</div>
    </form>
    
</div>

</body>
</html>
