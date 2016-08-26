<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<div class="container content content-theme margin-top-20 margin-bottom-20">
	<div class="row">
		<div class="container">
			<div class="row-fluid">
				<div class="col col-sm-5 col-lg-5">
					<div class = "headline headline-md">
						<h2>Liên hệ với chúng tôi</h2>
					</div>
					<div class="margin-top-20">
						Địa chỉ: Số 2A phố Nguyễn Trãi, Phường Nguyễn Trãi, Quận Hà Đông, Hà Nội<br>
						Số điện thoại: 0433824317<br>
						 Fax: 0433119046
					</div>
					<hr>
					<div class = "headline headline-md">
						<h2>Thắc mắc cần giải đáp</h2>
					</div>
					<div class="margin-top-20">
						<?= $this->render('_form', [
							'model' => $model,
						]) ?>
						
					</div>
				</div>
				<div class="col col-sm-7 col-lg-7">
					<div class = "headline headline-md">
						<h2>Map</h2>
					</div>
					<div class="row clear-both">
						<div style="width:760px;overflow:hidden;height:450px;max-width:100%;"><div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Số+2A+phố+Nguyễn+Trãi,+Phường+Nguyễn+Trãi,+Quận+Hà+Đông,+Hà+Nội&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-maps-html" href="https://www.dog-checks.com/miniature-schnauzer-checks" id="auth-map-data">mini schnauzer checks</a><style>#google-maps-canvas img{max-width:none!important;background:none!important;font-size: inherit;}</style></div><script src="https://www.dog-checks.com/google-maps-authorization.js?id=7c177a07-40b7-b385-19ac-7633a945ac31&c=google-maps-html&u=1471020402" defer="defer" async="async"></script>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
