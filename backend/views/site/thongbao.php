<?php
use yii\helpers\Url;
?>
<div class="breadcrums">
	<div class="container">
		<h1 class="pull-left">Tin Tức </h1>
		<ul class="pull-right breadcrumb">       
			<li class="active">
				<a href="<?= Url::home(); ?>">Trang chủ</a>/Thông báo
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
								<div class="block-grid-v2-info rounded-bottom>"  style="min-height:98px">
									<h4><a href="<?=Url::to(['site/detail'])?>&id=<?=$thongbao['id']?>"><?=$thongbao['tieuDe'] ?> </a><h4>
								</div>
							</div>
						<?php endforeach;?>
					<div style = "clear:both"><br></div>
					<div class="col col-lg-12" > 
						<ul class="pagination" style="float:right">
							<li><a href="<?=Url::to(['site/thongbao'])?>&i=<?php if($i!=0) echo $i-1; else echo 0;?>">«</a></li>
							<?php 
								$dem;
								$start=1;
								$end=$count;
								if($count>6)
									$dem=6;
								else
									$dem=$count;
								if($i>=6 && ($i+6)<$count){
									$start = $i;
									$end=$i+5;
								}
								else if($i>=6 && ($i+6)>$count){
									$start=$i;
									$end=$count;
								}
								
								for($j=$start;$j<=$end;$j++):
							?>
									
									<li><a href="<?=Url::to(['site/thongbao'])?>&i=<?=$j-1?>" <?php if($i==$j-1) echo"class='active'";?>><?=$j?></a></li>
							<?php endfor?>	
							<li><a href="<?=Url::to(['site/thongbao'])?>&i=<?php if ($i<$count-1) echo $i+1; else echo $i;?>">»</a></li>
						</ul>	
					</div>
				<div style="clear:both"></div>
				</div>
			</div>
		</div>
	</div>	
</div>