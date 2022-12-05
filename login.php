<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="./assets/dist/css/styles.css" rel="stylesheet">
  <title>Login | Online Document Sharing System</title>
 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		background-color: #052e39;
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top:0;
	    left: 0
	}
	main#main{
		width:100%;
		height: calc(100%);
		display: flex;
	}

</style>

<body>


  <main id="main" >
  	
  		<div class="align-self-center w-100">
		<h4 class="text-white text-center"><b>CORA </b></h4>
  		<div id="login-center" class="row justify-content-center">
  			<div class="card col-md-4 col-sm-6">
  				<div class="card-body">
					<h1>Login</h1>
  					<form id="login-form" >
  						<div class="centered">
							<input type="text" id="email" name="email" class="textfield form-control form-control-sm" required>
							<span class="placeholder">Email</span>
  						</div>
  						<div class="centered">
							<input type="password" id="password" name="password" class="textfield form-control form-control-sm" required>
							<span class="placeholder">Password</span>
  						</div>
  						<center><button class="btnReverse btn-sm btn-block btn-wave col-md-4 col-sm-6 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
  		</div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
	$('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>	
</html>