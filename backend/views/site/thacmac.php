<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>	
<div class="breadcrums">
	<div class="container">
		<h1 class="pull-left">Giải đáp thắc mắc </h1>
		<ul class="pull-right breadcrumb">       
			<li class="active">
				<a href="<?= Url::home(); ?>">Trang chủ</a>/Giải đáp thắc mắc
			</li>
        </ul>
	</div>
	<hr>
</div>
<div class="content content-theme margin-top-20 margin-bottom-20">
	<div class="row">
		<div class="col-md-3">
			<li class="list-group-item ">
					<?php echo Html::a( $text='Thông báo', $url =  Url::to(['site/thongbao','i'=>0]), $options = ['class'=>'accordion-toggle'] ); ?>
				</li>
					
				<li class="list-group-item ">
					<?php echo Html::a( $text='Giải đáp thắc mắc', $url =  Url::to(['site/thacmac']), $options = ['class'=>'accordion-toggle'] ); ?>
				</li>
				<li class="list-group-item ">
					<?php echo Html::a( $text='Tra cứu hóa đơn hàng tháng', $url =  Url::to(['site/lichsu']), $options = ['class'=>'accordion-toggle'] ); ?>
				</li>
		</div>
		
		<div class="col-md-9">
			<div class="container content">
				<div class="row">
					<div class="col-md-9">
						<div class="headline">
							<h2> Giá nước sinh hoạt</h2>
						</div>
						<div class="panel-group acc-v1 margin-bottom-40" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" style="border-bottom: 1px solid #ddd;">
										 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#SHSHBT">
											Giá nước sinh hoạt bậc thang
										</a>
                                    </h4>
								</div>
								<div id="SHSHBT" class="panel-collapse collapse">
									<div style="padding:15px; padding-top:0px;">
										&#65279;
										<table>
											<tbody>
												<tr>
													<td>
													Số nước trên hộ gia đình dc tính theo số khẩu và số người(xem cách tính bên dưới).<br>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div style="padding:15px;">
										<div class="panel-body table-responsive">
											<table id="table" class="table  table-bordered table-hover dataTable no-footer">
												<tbody>
													<tr>
														<th class="text-center">
															Số nước trên hộ gia đình
														</th>
														<th class="text-center">
															Giá nước (đồng/m<sup>3</sup>)
														</th>
													</tr>
													<tr>
														<td>
															10m    <sup>3</sup> đầu                  
														</td> 
														<td class="text-right" style="color: #cb3e3e;">
															
														</td>
													</tr>
													<tr>
														<td>
															30m<sup>3</sup> tiếp
														</td>
														<td class="text-right" style="color: #cb3e3e;">
															
														</td>
													</tr>
													<tr>
														<td>
															50m<sup>3</sup> tiếp                                           
														</td>
														<td class="text-right" style="color: #cb3e3e;">
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							
								<div class="panel-heading">
									<h4 class="panel-title" style="border-bottom: 1px solid #ddd;">
										 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#nsh">
											Cách tính số nước trên hộ gia đình
										</a>
                                    </h4>
								</div>
								<div id="nsh" class="panel-collapse collapse">
									<div style="padding:15px; padding-top:0px;">
										&#65279;
										<table>
											<tbody>
												<tr>
													<td>
													Tính theo số khẩu và số người. 1 khẩu thì chỉ được phép tối đa 4 ng. Ví dụ với mức 10 m3:<br>
													1 khẩu(1,3,6,9…. Người): 10m3<br>
													2 khẩu 2 người : 10m3<br>
													2 khẩu 6 người: 10 m3(4 người) + 2 người * 2.5 m3/người = 15 m3<br>
													2 khẩu 10 người: 20m3(8 người full cho 2 khẩu, số ng còn lại k tính)
													.<br>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									
								</div>
							
							
							</div>	
						</div>
						
						<div class="headline">
							<h2>Kiểm định đồng hồ</h2>
						</div>
						<div class="panel-group acc-v1 margin-bottom-40" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
								Khi tháo lắp đồng hồ cập nhật giữa kỳ hoặc kiểm định đồng hồ thì sẽ thay bằng 1 đồng hồ mới. 
								</div>
								<div class="panel-heading">
									<h4 class="panel-title" style="border-bottom: 1px solid #ddd;">
										 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#kdcase">
											Các trường hợp phải kiểm định đồng hồ
										</a>
                                    </h4>
								</div>
								<div id="kdcase" class="panel-collapse collapse">
									<div style="padding:15px; padding-top:0px;">
										&#65279;<table>
											<tbody>
												<tr>
													<td>
													Đồng hồ hỏng:<br>
													Đồng hồ đã dùng quá thời gian cho phép<br>
													..........
													.<br>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									
								</div>	
								
								<div class="panel-heading">
									<h4 class="panel-title" style="border-bottom: 1px solid #ddd;">
										 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#kdc">
											Cách thông báo công ty về kiểm định đồng hộ
										</a>
                                    </h4>
								</div>
								<div id="kdc" class="panel-collapse collapse">
									<div style="padding:15px; padding-top:0px;">
										&#65279;<table>
											<tbody>
												<tr>
													<td>
													unidentfied
													.<br>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									
								</div>
							
							
							</div>	
						</div>
						<?php echo Html::a( $text='Vui lòng đặt câu hỏi tại đây nếu bạn còn thắc mặc', $url =  Url::to(['site/contact']), $options = ['style'=>'color:blue'] ); ?>
					</div>
				</div>
			</div>
			<style>
				@media screen and (max-width: 767px) .table-responsive {
					width: 100%; margin-bottom: 15px; overflow-y: hidden; -ms-overflow-style: -ms-autohiding-scrollbar; border-top: none !important border-bottom: 1px solid #ddd; border-left: none !important border-right: none !important;
				}

				.panel-body {
					padding: 0px;
				}
			</style>
		</div>
	</div>
</div>	
	