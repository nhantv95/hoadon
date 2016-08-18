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
			<div class="headline headline-md" style="text-align:center"><h2 style="border-bottom:2px solid #3498db">Chúng tôi là ai</h2></div><br>
			<div class="col-lg-2 " style="text-align:center">
				<img src="/HoaDon_ad/frontend/web/image/ctynuoc.jpg" height=175px style="border-right: solid blue 1px">
				<hr>
			</div>
			<div class="col-lg-10">
				Công ty TNHH MTV Nước sạch Hà Đông được thành lập ngày 25/02/1957, tiền thân là một cơ sở cấp nước được tiếp quản sau cuộc Kháng chiến chống Pháp. <br><br>Hiện nay nhiệm vụ của Công ty gồm: Khai thác, xử lý và cung cấp nước sạch; Lắp đặt hệ thống cấp thoát; Tư vấn giám sát thi công công trình cấp thoát nước… đảm bảo đủ nhu cầu cấp nước cho nhân dân Quận Hà Đông; một số xã thuộc các huyện Thanh Oai, Phú Xuyên; Đan Phượng, huyện Ứng Hòa.<br><br>
				Hiện nay, trên thị trường Công ty đã tiến hành cung cấp sản phẩm nước tinh khiết - HaDoWa .
				<hr>
			</div>
			
			<div style="clear:both"></div>
			<div class="col-lg-12">
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
					<span style="float:right;color:blue"><?php echo Html::a( $text='xem thêm', $url =  Url::to(['site/thongbao','i'=>0]), $options = ['style'=>'color:blue'] ); ?></span>
					<div style="clear:both"></div>
				</div>
			</div>
		</div>
	</div>
</div>