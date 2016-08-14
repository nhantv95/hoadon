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
					<h2> <?=$news[0]['tieuDe']?></h2>
					<span style="color:#999966">Loại tin tức:<?=$news[0]['ChuDe']?>, người đăng: <?=$news[0]['UserName']?>, ngày đăng: <?=$news[0]['ngayDang']?></span>
					<hr>
					<div class="journal-content-article">
						<?=$news[0]['noiDung']?>
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