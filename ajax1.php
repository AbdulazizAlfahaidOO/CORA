<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Redfined Path&nbsp;For&nbsp;Malware Security, Benefits of CORA&nbsp;&nbsp;For Malware analyst &amp;amp; Threat Intel analyst, Fast &amp;amp; Efficient Scanning, CIA Traid, Stress relief, CORA Built with variety of tools​​​, Have any Concerns ?, contact form, follow us">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/CORA-LOGO.png"
}</script>
<meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-c68e"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="./login.php" class="u-image u-logo u-image-1" data-image-width="158" data-image-height="183">
          <img src="images/CORA-LOGO.png" class="u-logo-image u-logo-image-1">
        </a>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  <link rel=""
  </head>
  <style>
.regsiter__field {
	padding: 20px 0px;	
	position: relative;	
}
.regsiter__input {
	border: none;
	border-bottom: 2px solid #000000;
	background: none;
	padding: 10px;
	padding-left: 14px;
	font-weight: 700;
	width: 100%;
	transition: .2s;
}
.regsiter__input:active,
.regsiter__input:focus,
.regsiter__input:hover {
	outline: none;
	border-bottom-color: #000000;
}
  </style>
  <body class="bg-white" >
			<form action="/ajax1.php" method="post" enctype="multipart/form-data" >
			<h1>Register </h1>
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row justify-content-center">
					<div class="col-md-6 border-center" id="personalInfo-box">
							<b class="text-muted">Personal Information</b>
							<div class="regsiter__field form-group">
								<input type="text" name="firstname" id="firstname" class="regsiter__input" placeholder="First Name" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
							</div>
							<div class="regsiter__field form-group">
								<input type="text" name="middlename" id="middlename" class="regsiter__input" placeholder="Middle Name" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
							</div>
							<div class="regsiter__field form-group">
								<input type="text" name="lastname" id="lastname" class="regsiter__input" placeholder="Last Name" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
							</div>
							<div class="regsiter__field form-group">
								<input type="text" name="contact" id="contact" class="regsiter__input" placeholder="Contact No." required value="<?php echo isset($firstname) ? $firstname : '' ?>">
							</div>
							<div class="regsiter__field form-group">
								<textarea name="address" id="address" cols="30" rows="4" class="regsiter__input" placeholder="Address" required><?php echo isset($address) ? $address : '' ?></textarea>
							</div>
							<button class="btn btn-primary mr-2" onclick="showPasswordBox()">Next</button>
							<button class="btn btn-secondary" type="button" onclick="location.href = 'index.html'">Cancel</button>
					</div>					
					<div class="col-md-6" id="password-box">
							<b class="text-muted">System Credentials</b>
							<br>
							<div class="regsiter__field form-group">
								<input type="email" class="regsiter__input"  name="email" placeholder="Email" required value="<?php echo isset($email) ? $email : '' ?>">
								<small id="#msg"></small>
							</div>
							<div class="regsiter__field form-group">
								<input type="password" class="regsiter__input" name="password" placeholder="Password" <?php echo isset($id) ? "":'required' ?>>
							</div>
							<div class="regsiter__field form-group">
								<input type="password" class="regsiter__input" name="cpass" placeholder="Confirm Password" <?php echo isset($id) ? 'required' : '' ?>>
								<small id="pass_match" data-status=''></small>
							</div>
							<div class="custom-file">
							</div>
							<button class="btn btn-primary mr-2" name="submit" type="submit"onclick="location = 'login.php'">Save</button>
					</div>
				</div>

				</div>
				<hr>
			</form>
		</div>
	</div>
</div>
</body>

            
            <?php

if(isset($_POST['submit'])){
    $conn= new mysqli('localhost','root','','odss_db')or die("Could not connect to mysql".mysqli_error($conn));
    //if($_FILES['img']['tmp_name'] != ''){
       // $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
     //   $move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
   // }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
	$password = $_POST['password'];
    if(strlen($_POST["password"]) <= 8) {
		print 
		"<script>
			alert('At least 8 characters');
		</script>";
	}elseif(!preg_match("#[0-9]+#",$password)) {
		print 
		"<script>
			alert('Your Password Must Contain At Least 1 Number!');
		</script>";
	}elseif(!preg_match("#[A-Z]+#",$password)){
		print 
		"<script>
			alert('Your Password Must Contain At Least 1 Capital Letter!');
		</script>";
	}elseif(!preg_match("#[a-z]+#",$password)){
		print 
		"<script>
			alert('Your Password Must Contain At Least 1 Lowercase Letter!');
		</script>";
	}else {
		$password = md5($_POST['password']);
		if($conn->query("INSERT INTO users VALUES (null, ' $firstname', '$lastname', '$middlename', '$contact', '$address', '$email', '$password', '2', '', current_timestamp())")){
		print 
		"<script>
			alert('Account created successfully');
			location.replace('login.php')
		</script>";
	
		} else {
			   echo 'Error :(';
	 }
	}
}




?>
<script>
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})
	function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{14,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{10,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        var pwd = document.getElementById("password");
        if (pwd.value.length == 0) {
            strength.innerHTML = '';
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = 'Atleast 8 Character';
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green">Strong!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Medium!</span>';
        } else {
            strength.innerHTML = '<span style="color:red">Weak!</span>';
        }
    }
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage_user').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		if($('#pass_match').attr('data-status') != 1){
			if($("[name='password']").val() !=''){
				$('[name="password"],[name="cpass"]').addClass("border-danger")
				end_load()
				return false;
			}
		}
		$.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('login.php')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
	document.getElementById('password-box').style.display ='none';
        function showPasswordBox(){
            var personalInfo = document.getElementById('firstname, middlename, lastname, contact, address').value;
            document.getElementById('personalInfo-box').style.display ='none';
            document.getElementById('password-box').style.display ='block';
        }
        function onEyeClick(){
            let ele = document.getElementById('eye-icon');
            let password = document.getElementById('password');
           
           if(password.value.length > 0){
            
            document.getElementById('password').value = password.value;
            password.focus();
                //document.getElementById('password-label').classList.add('password-fixed');
                if(ele.className == 'fa fa-eye-slash'){
                    document.getElementById('eye-icon').classList.remove('fa-eye-slash');
                    document.getElementById('eye-icon').classList.add('fa-eye');
                    password.setAttribute('type','text');
                }else{
                    document.getElementById('eye-icon').classList.remove('fa-eye');
                    document.getElementById('eye-icon').classList.add('fa-eye-slash');
                    password.setAttribute('type','password');
                }
           }    
        }
</script>