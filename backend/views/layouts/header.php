<?php
use yii\helpers\Html;
use yii\helpers\BaseUrl;
use yii\helpers\Url;


?>

 <!--=== Header ===-->
        <div class="header">
            <div class="header-v6 header-classic-white header-sticky">
                <div class="navbar mega-menu" role="navigation">
                    <div class="row">
                        <div class="container">
                            <div class="clear-both">
                                <!-- Logo -->
                                <div class="col-lg-4 col-md-4 hidden-xs hidden-sm">
									<a class="logo" href="<?= Url::home(); ?>">
										<img src="image/logoevnhanoi_.png" alt="Logo" />
									</a>
								</div>
                                <!-- End Logo -->
                                <!-- Topbar -->
                              <div class="col col-md-8 col-lg-8 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                                    <div id="divLogin" name="divLogin">
                                        <style>
   
										</style>
										<link href="css/Site.css" rel="stylesheet" />
										<form  class="navbar-right" id="logoutForm" method="post" style="padding: 15px !important;">
												<div class="topbar hidden-xs">
													<ul class="loginbar pull-right right">
														<li class="hoverSelector hidden-xs" title="Hỗ trợ trực tuyến" style="font-size:15px !important;">
															<i class="fa fa-phone-square">
																<b>Điện Thoại Liên Lạc:</b>
															</i>
															<span class="color_hotline">
																<b>0433824317</b>
															</span>
															<br />
															<?php if(!Yii::$app->user->isGuest):?>
															<li><i class="fa fa-user">Xin chào &nbsp;<?php echo Html::a( $text=Yii::$app->user->identity->username, $url =  Url::to(['site/account']), $options = ['style'=>'color:white;font-size:16px'] ); ?> </i>&nbsp; &nbsp; &nbsp; </li>
															<?php echo Html::a( $text='<i class="fa fa-sign-out" aria-hidden="true">Đăng xuất</i>', $url =  Url::to(['site/logout']), $options = ['data-method'=>'post'] ); ?>	
															<?php endif ?>
														</li>
													</ul>
													<div class="clr"></div>
												</div>
										</form>

                                    </div>
                                </div>
                                
							</div>
                            <!-- End Topbar -->
											<!-- Toggle get grouped for better mobile display -->
											<div class="clear-both" style="margin-top:5px;margin-bottom:5px;">
												<div class="col-md-8 col-sm-8 col-xs-8 hidden-md hidden-desktop hidden-lg  hidden-print" style="padding-:5px;">
														<a class="logo" href="/">
															<img src="image/logoevnhanoi_.png" alt="Logo" />
														</a>
												</div>
											</div>   
											<!-- End Toggle -->
										</div>
									</div>
					<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse nav_margin">
						 <div class="container">
							<ul class="nav navbar-nav nav_khac">
								<li class="dropdown">
									<?php echo Html::a( $text='<i class="fa fa-home"></i>', $url =   Url::home(), $options = ['style'=>'color:white !important'] ); ?>
								</li>
								<li>                     
										<?php echo Html::a( $text='Giới thiệu', $url =  Url::to(['site/about']), $options = ['style'=>'color:white !important'] ); ?>	
							    </li>
								<li>                     
									<?php echo Html::a( $text='Thông báo', $url =  Url::to(['site/thongbao', 'i'=>0]), $options = ['style'=>'color:white !important'] ); ?>	
									
								</li>
								<li>                     
									<?php echo Html::a( $text='Liên hệ', $url =  Url::to(['site/contact']), $options = ['style'=>'color:white !important'] ); ?>	
								</li>
				</ul>
				</div><!--/end container-->
		
					</div>

<script>
  

</script>
                </div>
            </div>
        </div>

        <!--=== End Header ===-->
        <!--=== Slider ===-->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>

					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title='Slide 1'>
						<!-- MAIN IMAGE -->
						<img src="/HoaDon_ad/frontend/web/image/banner.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
						<div class="tp-caption revolution-ch1 sft start"
							 data-x="650"
							 data-hoffset="0"
							 data-y="180"
							 data-speed="1500"
							 data-start="500"
							 data-easing="Back.easeInOut"
							 data-endeasing="Power1.easeIn"
							 data-endspeed="300"></div>
							<!-- LAYER -->
						<div class="tp-caption revolution-ch2 sft"
							 data-x="850"
							 data-hoffset="0"
							 data-y="230"
							 data-speed="1400"
							 data-start="2000"
							 data-easing="Power4.easeOut"
							 data-endspeed="300"
							 data-endeasing="Power1.easeIn"
							 data-captionhidden="off"
							 style="z-index: 6">
							
						</div>

							<!-- LAYER -->
						<div class="tp-caption sft"
							 data-x="400"
							 data-hoffset="0"
							 data-y="360"
							 data-speed="1600"
							 data-start="2800"
							 data-easing="Power4.easeOut"
							 data-endspeed="300"
							 data-endeasing="Power1.easeIn"
							 data-captionhidden="off"
							 style="z-index: 6"></div>
					</li>
					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title='"Slide 2"'>
					<!-- MAIN IMAGE -->
						<img src="image/banner_blue.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
						<div class="tp-caption revolution-ch1 sft start"
							 data-x="700"
							 data-hoffset="0"
							 data-y="100"
							 data-speed="1500"
							 data-start="500"
							 data-easing="Back.easeInOut"
							 data-endeasing="Power1.easeIn"
							 data-endspeed="300"> HANOI</div>
							<!-- LAYER -->
						<div class="tp-caption revolution-ch2 sft"
							 data-x="550"
							 data-hoffset="0"
							 data-y="150"
							 data-speed="1400"
							 data-start="2000"
							 data-easing="Power4.easeOut"
							 data-endspeed="300"
							 data-endeasing="Power1.easeIn"
							 data-captionhidden="off"
							 style="z-index: 6">
							CHUYÊN NGHIỆP - VĂN MINH - HIỆU QUẢ
						</div>

						<!-- LAYER -->
						<div class="tp-caption sft"
							 data-x="400"
							 data-hoffset="0"
							 data-y="360"
							 data-speed="1600"
							 data-start="2800"
							 data-easing="Power4.easeOut"
							 data-endspeed="300"
							 data-endeasing="Power1.easeIn"
							 data-captionhidden="off"
							 style="z-index: 6"></div>
					</li>
				<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title='"Slide 3"'>
					<!-- MAIN IMAGE -->
					<img src="image/Banner_homeevnhanoi04.jpg" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
					<div class="tp-caption revolution-ch1 sft start"
						 data-x="80"
						 data-hoffset="0"
						 data-y="100"
						 data-speed="1500"
						 data-start="500"
						 data-easing="Back.easeInOut"
						 data-endeasing="Power1.easeIn"
						 data-endspeed="300">CUNG CẤP DỊCH VỤ KHÁCH HÀNG</div>
						<!-- LAYER -->
						<div class="tp-caption revolution-ch2 sft"
							 data-x="150"
							 data-hoffset="0"
							 data-y="150"
							 data-speed="1400"
							 data-start="2000"
							 data-easing="Power4.easeOut"
							 data-endspeed="300"
							 data-endeasing="Power1.easeIn"
							 data-captionhidden="off"
							 style="z-index: 6">
							DỄ TIẾP CẬN, DỄ THAM GIA, DỄ GIÁM SÁT
						</div>

						<!-- LAYER -->
						<div class="tp-caption sft"
							 data-x="400"
							 data-hoffset="0"
							 data-y="360"
							 data-speed="1600"
							 data-start="2800"
							 data-easing="Power4.easeOut"
							 data-endspeed="300"
							 data-endeasing="Power1.easeIn"
							 data-captionhidden="off"
							 style="z-index: 6"></div>
					</li>
			</ul>
			<div class="tp-bannertimer tp-bottom"></div>
		</div>
	</div>
</div>
<!--=== End Slider ===-->