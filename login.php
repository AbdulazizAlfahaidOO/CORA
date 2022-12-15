<!DOCTYPE html>
<html lang="en">
	
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:ind.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top:0;
	    left: 0;
	}
	main#main{
		width:100%;
		height: calc(100%);
		display: flex;
		background-color: #052e39;
	}
	#content {
        position: relative;
    }
    #content img {
        position: absolute;
        top: 40px;
        left: 10px;
		width: 5%;
        height: auto;
    }
	.ribbon {
		height: 80px;
		width: 70px;
	}
	.card {
		box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	}

	.login__field {
	padding: 20px 0px;	
	position: relative;	
	}
	.login__icon {
		position: absolute;
		top: 35px;
		color: #000000;
	}

	.login__input {
		border: none;
		border-bottom: 2px solid #D1D1D4;
		background: none;
		padding: 10px;
		padding-left: 24px;
		font-weight: 700;
		width: 100%;
		transition: .2s;
	}

	.login__input:active,
	.login__input:focus,
	.login__input:hover {
		outline: none;
		border-bottom-color: #6A679E;
	}
</style>

<body class="bg-white" >

  <main id="main" >
  	
  		<div class="align-self-center w-100" >
  		<div id="login-center" class="row justify-content-center">
  			<div class="card col-lg-2 col-md-4 col-sm-10">
  				<div class="card-body">
				  <center><img src="images/CORA-LOGO.png" class="ribbon" alt="" /></center> <br>
				  <center><h1>Log In</h1></center>
  					<form id="login-form" >
						<div class="login__field">
							<i class="login__icon fas fa-user"></i>
							<input type="text" class="login__input" placeholder="Email">
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-lock"></i>
							<input type="password" class="login__input" placeholder="Password">
						</div>
  						<left><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></left><br>
						<p><a href="/ajax1.php">Dont have an Account?</a></p>
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
					location.href ='ind.php?page=home';
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