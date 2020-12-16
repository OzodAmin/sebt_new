<?php 
$style = '<link href="/sebt/assets/css/pages/login/classic/login-6.css" rel="stylesheet" type="text/css" />';
require_once "../lang/ru.php";
require_once '../header.php';
require_once '../sidebar.php';
?>
<!--begin::Login-->
<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/sebt/assets/media/bg/bg-2.jpg);">
		<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
			<!--begin::Login Header-->
			<div class="d-flex flex-center mb-15">
				<a href="#">
					<img src="/sebt/assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
				</a>
			</div>
			<!--end::Login Header-->
			<!--begin::Login Sign in form-->
			<div class="login-signin">
				<div class="mb-10">
					<h3 class="opacity-40 font-weight-normal"><?=$lang['1'];?></h3>
					<p class="opacity-40"><?=$lang['2'];?></p>
				</div>
				<form class="form" id="kt_login_signin_form">
					<div class="form-group">
						<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="<?=$lang['3'];?>" autocomplete="off" />
					</div>
					<div class="form-group">
						<input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="<?=$lang['4'];?>" />
					</div>
					<div class="form-group text-center mt-10">
						<button id="kt_login_signin_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3"><?=$lang['5'];?></button>
					</div>
				</form>
				<div class="mt-10">
					<p><a href="/sebt/pages/register.php" class="text-white opacity-30 font-weight-normal"><?=$lang['11'];?></a></p>					
					<p><a href="/sebt/pages/registerRKP.php" class="text-white opacity-30 font-weight-normal"><?=$lang['7'];?></a></p>					
				</div>
			</div>
			<!--end::Login Sign in form-->
		</div>
	</div>
</div>

<?php 
$script = '<script src="/sebt/assets/js/pages/custom/login/login-general.js"></script>';
require_once '../footer.php'; 
?>