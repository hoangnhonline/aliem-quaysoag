<?php
session_start();
error_reporting(1);
include '../dbconn.php';
if(isset($_GET['logout'])){
		session_destroy();
		header('Location:call_action.php');
}
if(isset($_POST['btnLogin'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$result = mysqli_query($conn, "SELECT * FROM users where username = '$username' AND password = '$password'");
		$user = mysqli_fetch_assoc($result);		
		if(!empty($user)){
			$_SESSION['login'] = 1;	
		}else{
			$_SESSION['login'] = 0;
		}
}

if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
	if(isset($_POST['btnSave'])){
		$content = (addslashes($_POST['content']));
		$btn1_text = (addslashes($_POST['btn1_text']));
		$btn1_color = (addslashes($_POST['btn1_color']));
		$btn1_url = (addslashes($_POST['btn1_url']));
		$btn2_text = (addslashes($_POST['btn2_text']));
		$btn2_color = (addslashes($_POST['btn2_color']));
		$btn2_url = (addslashes($_POST['btn2_url']));
		$time_open = (int) $_POST['time_open'];
		$time_close = (int) $_POST['time_close'];	
		$modal_off = isset($_POST['modal_off']) ? 1 : 0;
		$result = mysqli_query($conn, "UPDATE call_action 
					SET 
						content = '$content',
						btn1_text = '$btn1_text',
						btn1_color = '$btn1_color',
						btn1_url = '$btn1_url',
						btn2_text = '$btn2_text',
						btn2_color = '$btn2_color',
						btn2_url = '$btn2_url',
						time_open = $time_open,
						time_close = $time_close,
						modal_off = $modal_off
					WHERE id = 1");
	}
	$result = mysqli_query($conn, "SELECT * FROM call_action where id = 1");
	$row = mysqli_fetch_assoc($result);
}
?>

<!doctype html>
<html lang="vi">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Thông tin call action modal</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px;">
    	<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 1){ ?>
    	<h4>Cài đặt nội dung modal</h4>
    	<a class="btn btn-danger btn-sm" href="call_action.php?logout=1" style="float:right;">Logout</a>
    	<div style="clear:both"></div>
    	<form method="POST" action="">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nội dung</label>
		    <textarea id="content" class="form-control" rows="4" name="content"><?php echo $row['content']; ?></textarea>
		  </div>
		  <div class="row">
			  <div class="form-group col-md-2">
			    <label for="btn1_text">Button 1 - Text</label>
			    <input type="text" class="form-control" id="btn1_text" placeholder="" value="<?php echo $row['btn1_text']; ?>" name="btn1_text">
			  </div>
			  <div class="form-group col-md-2">
			    <label for="btn1_color">Button 1 - Màu sắc</label>
			    <input type="text" class="form-control" id="btn1_color" value="<?php echo $row['btn1_color']; ?>" placeholder="" name="btn1_color">
			  </div>
			  <div class="form-group col-md-8">
			    <label for="btn1_url">Button 1 - Link</label>
			    <input type="text" class="form-control" id="btn1_url" value="<?php echo $row['btn1_url']; ?>" placeholder="" name="btn1_url">
			  </div>			  
		  </div>
		  <div class="row">
			  <div class="form-group col-md-2">
			    <label for="btn2_text">Button 2 - Text</label>
			    <input type="text" class="form-control" id="btn2_text" value="<?php echo $row['btn2_text']; ?>" placeholder="" name="btn2_text">
			  </div>
			  <div class="form-group col-md-2">
			    <label for="btn2_color">Button 2 - Màu sắc</label>
			    <input type="text" class="form-control" id="btn2_color" value="<?php echo $row['btn2_color']; ?>" placeholder="" name="btn2_color">
			  </div>
			  <div class="form-group col-md-8">
			    <label for="btn2_url">Button 2 - Link</label>
			    <input type="text" class="form-control" id="btn2_url" value="<?php echo $row['btn2_url']; ?>" placeholder="" name="btn2_url">
			  </div>			  
		  </div>
		  <div class="row">
			  <div class="form-group col-md-6">
			    <label for="btn2_text">Time open</label>
			    <input type="text" class="form-control" id="time_open" value="<?php echo $row['time_open']; ?>" placeholder="" name="time_open">
			  </div>
			  <div class="form-group col-md-6">
			    <label for="btn2_color">Time close</label>
			    <input type="text" class="form-control" id="time_close" value="<?php echo $row['time_close']; ?>" placeholder="" name="time_close">
			  </div>		  
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" value="1" class="form-check-input" id="modal_off" name="modal_off" <?php echo $row['modal_off'] == 1 ? 'checked' : ''; ?>>
		    <label class="form-check-label" for="modal_off">Tắt modal</label>
		  </div>
		  <button type="submit" id="btnSave" name="btnSave" class="btn btn-primary">Save</button>
		  <button type="reset" class="btn">Clear</button>
		  
		</form>
		<?php }else{ ?>
		<h4>Login</h4>
    	<form method="POST" action="">		 
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" value="" name="username">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="text" class="form-control" id="password" value="" name="password">
		  </div>
		  <button type="submit" id="btnLogin" name="btnLogin" class="btn btn-primary">Login</button>		  
		</form>
		<?php } ?>
    </div>
    
    <script src="../js/ckeditor/ckeditor.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		CKEDITOR.replace('content', {
    			height:300
    		});
    		$('#btnSave').click(function(){
    			if($('#modal_off').is(':checked') == false){
	    			if($('#btn1_text').val() == '' ||  $('#btn1_url').val() == '' ||  $('#btn1_color').val() == '' ||  $('#btn2_text').val() == '' ||  $('#btn2_color').val() == '' ||  $('#btn2_url').val() == '' || $('#time_open').val() == '' || $('#time_open').val() == ''){
	    				alert('Vui lòng nhập đầy đủ thông tin');
	    				return false;
	    			}
    			}
    		});
    	});
    </script>
  </body>
</html>