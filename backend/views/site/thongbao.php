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
<div class="container content content-theme margin-top-20 margin-bottom-20">
	<div class="row">
		<div class="container">
			<div class="row block-grid-v2">
				<?php
					foreach ($thongbao as $thongbao):?> 
						<div class="col-md-4 col-sm-6 md-margin-bottom-30">
							<div class="easy-block-v1">
								<img src="image/catnuoc.jpg">
								<div class="easy-block-v1-badge rgba-purple">
									<?php echo ($thongbao['ChuDe']);
										//var_dump($thongbao);
									?>
								</div>
							</div>
							<div class="block-grid-v2-info rounded-bottom>">
								<h3><a href="<?=Url::to(['site/detail'])?>&id=<?=$thongbao['id']?>"><?=$thongbao['tieuDe'] ?> </a><h3>
							</div>
						</div>
				<?php endforeach;?>
			<div style="clear:both"></div>
			</div>
		</div>
	</div>
</div>	