<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>	
<div class="breadcrums">
	<div class="container">
		<h1 class="pull-left">Tin Tức </h1>
		<ul class="pull-right breadcrumb">       
			<li class="active">
				<a href="<?= Url::home(); ?>">Trang chủ</a>/Giới thiệu
			</li>
        </ul>
	</div>
	<hr>
</div>
<div class="container content">
	<div class="row blog-page">
		<div class="col-md-9 md-margin-bottom-40">
			<div id="dsNewsList" name="dsNewsList">
				<div class="blog margin-bottom-40">
					<h2> Giới thiệu về công ty</h2>
					<hr>
					<div class="journal-content-article">
						<b> Công ty TNHH một thành viên nước sạch Hà Đông </b><br>
						<b> Địa chỉ:</b>  Số 2A phố Nguyễn Trãi, Phường Nguyễn Trãi, Quận Hà Đông, Hà Nội<br><br>
						Công ty TNHH MTV Nước sạch Hà Đông được thành lập ngày 25/02/1957, tiền thân là một cơ sở cấp nước được tiếp quản sau cuộc Kháng chiến chống Pháp. Hiện nay nhiệm vụ của Công ty gồm: Khai thác, xử lý và cung cấp nước sạch; Lắp đặt hệ thống cấp thoát; Tư vấn giám sát thi công công trình cấp thoát nước… đảm bảo đủ nhu cầu cấp nước cho nhân dân Quận Hà Đông; một số xã thuộc các huyện Thanh Oai, Phú Xuyên; Đan Phượng, huyện Ứng Hòa.
						<br>
						Hiện nay, trên thị trường Công ty đã tiến hành cung cấp sản phẩm nước tinh khiết - HaDoWa .
						<br><hr>
						<b>Tên giao dịch:</b> HADONG WATER CO.,LTD<br>
						<b>Giấy phép kinh doanh:</b> 0500237984 - ngày cấp: 11/09/1998<br>
						<b>Ngày hoạt động:</b> 11/09/1998<br>
						<b>Giám đốc:</b> LẠI VĂN THỊNH / NGUYỄN VĂN DŨNG<br>
						<b>Số TK:</b> 102010000454227</br>
						<b>Ngân hàng:</b> NGÂN HÀNG VIETTINBANK QUANG TRUNG<br><br>
						<b>Các Dịch Vụ</b>
						<hr>
						<b>Cách Liên Lạc:</b><br>
						<b>Số điện thoại: </b>0433824317<br>
						<b>Fax:</b> 0433119046<br>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="headline headline-md">
				<h2> Tin tức khác</h2>
			</div>
			<ul class="list-unstyled margin-bottom-30">
				<?php
					foreach($other as $other):?>
						<li class="margin-bottom-10">
							<i class="fa fa-newspaper-o color-green"></i>
							<a href="<?=Url::to(['site/detail'])?>&id=<?=$other['id']?>">
							<?=$other['tieuDe'];?></a>
						</li>
						
					<?php endforeach?>			
			</ul>
		</div>
	</div>
</div>	