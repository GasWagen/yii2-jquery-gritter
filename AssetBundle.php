<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link http://phptime.ru
 */

namespace rmrevin\yii\jquery\gritter;

class AssetBundle extends \yii\web\AssetBundle
{

	public $sourcePath = '@vendor/jboesch/gritter';

	public $css = ['css/jquery.gritter.css'];
	public $js = ['js/jquery.gritter.min.js'];

	public $depends = [
		'yii\web\JqueryAsset',
	];
} 