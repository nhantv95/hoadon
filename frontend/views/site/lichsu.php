<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>
<div class="breadcrums">
	<div class="container">
		<h1 class="pull-left">Tra cứu lượng nước tiêu dùng </h1>
		<ul class="pull-right breadcrumb">       
			<li class="active">
				<a href="<?= Url::home(); ?>">Trang chủ</a>/Tra cứu lượng nước tiêu dùng
			</li>
        </ul>
	</div>
	<hr>
</div>
<div class="content content-theme margin-top-20 margin-bottom-20">
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group sidebar-nav-v1 fa-fixed " id="sidebar-nav">
				<li class="list-group-item ">
					<?php echo Html::a( $text='Thông báo', $url =  Url::to(['site/thongbao','i'=>0]), $options = ['class'=>'accordion-toggle'] ); ?>
				</li>
					
				<li class="list-group-item ">
					<?php echo Html::a( $text='Giải đáp thắc mắc', $url =  Url::to(['site/thacmac']), $options = ['class'=>'accordion-toggle'] ); ?>
				</li>
				<li class="list-group-item ">
					<?php echo Html::a( $text='Tra cứu hóa đơn hàng tháng', $url =  Url::to(['site/lichsu']), $options = ['class'=>'accordion-toggle'] ); ?>
				</li>
			</ul>
		</div>
		
		<div class="col-md-9">
			<!--<form class="sky-form" id="sky-form" novalidate="novalidate" action="#">-->
			<?php Pjax::begin(); ?>
			<?= Html::beginForm(['site/lichsu'], 'post', ['data-pjax' => '', 'class' => 'form-inline sky-form','novalidate'=>'novalidate','id'=>'sky-form']); ?>	
				<fieldset>
					<div class="row">
						<section class="col col-sm-12">
							<div class="row">
								
										<?php//var_dump($string)?>
										<div class="col col-sm-12">	
											<div class="col col-sm-2">
												<label>
													Chọn năm
												</label>
											</div>
											<?php 
												// echo "year";
												// echo $start;
											$year = intval(date('Y'));
											//	 var_dump($year);
											 ?>
											<?php for($a=$year;$a>=$start;$a--):?>
												<div class="col col-sm-1">
												<?php echo Html::a('<button class="btn">'.$a.'</button>', ['site/lichsu','string'=>$a], []); ?>
												</div>
											<?php endfor?>
										</div>	
										
									<?php //var_dump($lichsu); ?>
							</div>
						</section>
						<hr>
					</div>
					
					<div class="row margin-top-20">
						<div class="table-responsive">
							<table class="table table-bordered table-hover margin-top-20">
								<thead>
									<tr class="text-center">
										<th class="text-center">Tháng</th>
										<th class="text-center">Năm</th>
										<th class="text-center">Lượng nước tiêu thụ</th>
										<th class="text-center">Thành Tiền</th>
										<th class="text-center">Trạng thái hóa đơn</th>
									</tr>
								</thead>
								<tbody>
									
									<?php 
									$thang =array();
									$sonuoc = array();
									if($lichsu!=null):?>
										<?php foreach($lichsu as $lichsu):?>
											<tr class="text-center">
												<td><?=$lichsu->thangChot?> </td>
												<td><?=$lichsu->namChot?> </td>
												<td><?=$lichsu->chiSoChot?> </td>
												<td><?=$lichsu->chiSoChot*5000?> đồng </td>
												<td><?=$lichsu->trangThaiNop?> </td>
												<?php 
												array_push($thang, strval($lichsu->thangChot)."-".strval($lichsu->namChot));
												array_push($sonuoc, $lichsu->chiSoChot);
												
												?>
											</tr>
										<?php endforeach?>	
									<?php endif?>
								</tbody>
							</table>
						</div>
					</div>
					<hr style="border-top: 3px double blue !important">
					<div class="row">
						<section class="col col-sm-12">
							<div id="reportBaThang">
								<?php 
									$jsthang = json_encode($thang);
									$jsnc = json_encode($sonuoc);
									//var_dump($jsthang);
									
								?>
								<div id='chartForPower_DB_container'></div>
								<script type='text/javascript'>
									var chartForPower_DB;
									$(document).ready(function() {
										chartForPower_DB = new Highcharts.Chart({
											chart: { renderTo:'chartForPower_DB_container', marginBottom: 100, zoomType: 'xy' }, 
											legend: { align: 'center', floating: true, layout: 'horizontal', verticalAlign: 'bottom' }, 
											loading: { hideDuration: 2000, labelStyle: { color: 'white' }, showDuration: 2000, style: { backgroundColor: 'gray' } }, 
											title: { text: 'Biểu đồ thống kê sử dụng nước' }, 
											tooltip: { formatter: function() { return ''+ this.x +': '+ Highcharts.numberFormat(this.y, 2) + ' khối'; } }, 
											xAxis: { categories: <?=$jsthang?> }, 
											yAxis: [{ labels: { formatter: function() { return this.value +' khối'; }, style: { color: '#4572A7' } }, min: 0, title: { style: { color: '#4572A7' }, text: 'Số nước sử dụng' } }], 
											series: [{ data:<?=$jsnc?> , name: 'Số nước ', type: 'column', color: '#FCDA44' }]
										});
									});
								</script>
							</div>
						</section>
					</div>
				
				</fieldset>
			<!--</form>-->
			<?= Html::endForm() ?>
			<?php Pjax::end(); ?>
		</div>
	</div>
</div>