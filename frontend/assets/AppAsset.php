<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	public $jsOptions = array(
    'position' => \yii\web\view::POS_END,
	);
	
    public $css = [
       'css/Site.css',
       'css/animate.css',
       'css/blue.css',
       'css/app.css',
       'css/blocks.css',
       'css/bootstrap.css',
       'css/bootstrap.min.css',
       'css/custom.css',
       'css/custom-sky-forms.css',
       'css/font-awesome.min.css',
       'css/footer-v1.css',
       'css/header-default.css',
       'css/header-v6.css',
       'css/ie8.css',
       'css/jquery.fancybox.css',
       'css/line-icons.css',
       'css/mychat.css',
       'css/settings.css',
       'css/owl.carousel.css',
       'css/plugins.css',
       'css/sky-forms.css',
       'css/stacktable.css',
       'css/style_add.css',
       'css/style.css',
    ];
    public $js = [
		'jquery/jquery.cookie.js',
		'jquery/jquery.fancybox.pack.js',
		'jquery/jquery.parallax.js',
		'jquery/jquery.signalR-1.1.4.min.js',
		'jquery/jquery.themepunch.revolution.min.js',
		'jquery/jquery.themepunch.tools.min.js',
		'jquery/jquery.unobtrusive-ajax.min.js',
		'jquery/jquery-migrate.min.js',
		'jquery/jquery-ui.min.js',
		'js/convertion.min.js',
		'js/custom.js',
		'js/CustomerHelper.js',
		'js/datepicker.js',
		'js/fancy-box.js',
		'js/highcharts.js',
		'js/faq.js',
		'js/owl.carousel.js',
		'js/owl-carousel.js',
		'js/password.js',
		'js/revolution-slider.js',
		'js/smoothScroll.js',
		'js/stacktable.js',
		'js/app.js',
		'js/back-to-top.js',
		'js/bootstrap.min.js'
		
    ];
    public $depends = [
      'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
