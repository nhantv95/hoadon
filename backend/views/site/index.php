<?php

/* @var $this yii\web\View */

use yii\web\view;
use yii\helpers\Url;;
use yii\helpers\Html;
?>
<div class="container content-sm content_theme_icon">
	<div class="row title_theme">
		<h1 style="font-size:40px !important; text-align:center"><b>Công Ty TNHH MTV Nước Sạch Hà Đông</b></h1>
		<hr size="3">
	</div>
</div>
<div class="container content content-theme margin-top-20 margin-bottom-20">
	<div class="row">
		<div class="container">
			<div class="headline headline-md" style="text-align:center"><h2 style="border-bottom:2px solid #3498db">Các dịch vụ công ty cung cấp</h2></div><br>
			<div class="col-lg-6 " style="text-align:center">
				<h3><i class="fa fa-home"></i>Nước sinh hoạt cho hộ gia đình</h3>
				<img src="/HoaDon_ad/frontend/web/image/photo.jpg" class="img-circle img-thumbnail" height=400px style="height:300px">
				<hr>
			</div>
			<div class="col-lg-6">
				<h3><i class="fa fa-industry"  aria-hidden="true"></i>Nước sạch công nghiệp, dịch vụ</h3>
				<img src="/HoaDon_ad/frontend/web/image/factory-512.png"  class="img-circle img-thumbnail" height=400px style="height:300px">
				<hr>
			</div>
			
			<div class="row block-grid-v2">
				<div class="headline headline-md" style="text-align:center"><h2 style="border-bottom:2px solid #3498db">Tin Tức</h2></div><br>
				<?php
					foreach ($other as $thongbao):?> 
						<div class="col-md-4 col-sm-6 md-margin-bottom-30">
							<div class="easy-block-v1">
								<img src="/HoaDon_ad/frontend/web/<?=$thongbao['anhBia']?>">
								<div class="easy-block-v1-badge rgba-purple">
									<?php echo ($thongbao['tieuDe']);?>
								</div>
							</div>
							<div class="block-grid-v2-info rounded-bottom>">
								<h3><a href="<?=Url::to(['site/detail'])?>&id=<?=$thongbao['id']?>"><?=$thongbao['tieuDe']; ?> </a><h3>
							</div>
						</div>
				<?php endforeach;?>
				<span style="float:right;color:blue"><?php echo Html::a( $text='xem thêm', $url =  Url::to(['site/thongbao']), $options = ['style'=>'color:blue'] ); ?></span>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
</div>