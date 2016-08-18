<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="breadcrums">
	<div class="container">
		<h1 class="pull-left">Thông Tin Khách Hàng </h1>
		<ul class="pull-right breadcrumb">       
			<li class="active">
				<a href="<?= Url::home(); ?>">Trang chủ</a>/Thông tin khách hàng
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
			<form class="sky-form" id="sky-form" action="#" novalidate="novalidate">
				<fieldset style="background-color:#FAFAFA;">
					<div class="row">
						<div class="shadow-wrapper margin-bottom-60">
							<div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="height:250px;">
								<h2>Thông tin khách hàng</h2>
								<section class="col col-sm-12">
									<div class="row">
										<label class="col col-4">Mã khách hàng: </label>
										<p class="col col-8">
											<?=$user->id?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Tên khách hàng: </label>
										<p class="col col-8">
											<?=$user->username?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Địa chỉ: </label>
										<p class="col col-8">
											<?=$user->address?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Số Điện Thoại: </label>
										<p class="col col-8">
											<?=$user->phone?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Số Khẩu: </label>
										<p class="col col-8">
											<?=$user->SoKhau?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Mã hợp đồng: </label>
										<p class="col col-8">
											<?=$hopdong->maHopDong?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Loại hợp đồng: </label>
										<p class="col col-8">
											<?=$hopdong->loaiHopDong?>
										</p>
									</div>

								</section>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="shadow-wrapper margin-bottom-60">
							<div class="tag-box tag-box-v1 box-shadow shadow-effect-2" style="min-height:210px;">
								<h2>Chỉ số tháng <?=$chiSo[0]['thangChot']?>/<?=$chiSo[0]['namChot']?></h2>
								<section class="col col-sm-12">
									<div class="row">
										<label class="col col-4">Giá Nước: </label>
										<p class="col col-8">
											
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Ngày ghi chỉ số: </label>
										<p class="col col-8">
											<?=$chiSo[0]['ngayChot']?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Số nước: </label>
										<p class="col col-8">
											<?=$chiSo[0]['chiSoChot']?>
										</p>
									</div>
									<div class="row">
										<label class="col col-4">Trạng thái thanh toán: </label>
										<p class="col col-8">
											<?=$chiSo[0]['trangThaiNop']?>
										</p>
									</div>

								</section>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="headline"><h2 class="heading-sm">Biểu đồ điện tiêu thụ nước</h2></div>
					</div>
					
					<div class="row">
						<section class="col col-sm-6">
							<div id="reportBaThang">
								<div id='chartForPower_DB_container'></div>
									<script type='text/javascript'>
										var chartForPower_DB;
										$(document).ready(function() {
											chartForPower_DB = new Highcharts.Chart({
												chart: { renderTo:'chartForPower_DB_container', marginBottom: 100, zoomType: 'xy' }, 
												legend: { align: 'center', floating: true, layout: 'horizontal', verticalAlign: 'bottom' }, 
												loading: { hideDuration: 2000, labelStyle: { color: 'white' }, showDuration: 2000, style: { backgroundColor: 'gray' } }, 
												title: { text: 'Thống kê 3 tháng' }, 
												tooltip: { formatter: function() { return ''+ this.x +': '+ Highcharts.numberFormat(this.y, 2) + ' khối'; } }, 
												xAxis: { categories: ['T5/2016', 'T6/2016', 'T7/2016'] }, 
												yAxis: [{ labels: { formatter: function() { return this.value +' khối'; }, style: { color: '#4572A7' } }, min: 0, title: { style: { color: '#4572A7' }, text: 'Số nước sử dụng' } }], 
												series: [{ data: [204, 299, 200], name: 'Số nước ', type: 'column', color: '#FCDA44' }]
											});
										});
										</script>
							</div>
						</section>
					</div>
				</fieldset>
			</form>
			
		</div>
	</div>
</div>