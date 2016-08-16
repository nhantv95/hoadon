<?php
use yii\helpers\Url;
?>	
<div class="breadcrums">
	<div class="container">
		<h1 class="pull-left">Tin Tức </h1>
		<ul class="pull-right breadcrumb">       
			<li class="active">
				<a href="/">Trang chủ</a>/Tin Tức
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
						<b> Công ty nước sạch chi nhánh quận Hà Đông </b><br>
						<b> Địa chỉ:</b> Số x Mỗ Lao, Hà Đông<br>
						Chúng tôi có nhiệm vụ cung cấp nước sạch tới toàn bộ khu dân cư và doanh nghiệp trong địa phần Quận Hà Đông. Chúng tôi làm việc với tinh thần trách nhiệm và hiệu quả để đem lại sự thuận tiện trong cuộc sống của khách hàng.<br><hr>
						<b>Các Dịch Vụ</b>
						<hr>
						<b>Cách Liên Lạc:</b><br>
						<b>Số điện thoại</b><br>
						<b>email:</b>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="headline headline-md">
				<h2> TIn tức khác</h2>
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