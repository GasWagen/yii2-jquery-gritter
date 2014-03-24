<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link http://phptime.ru
 */

namespace rmrevin\yii\jquery\gritter;

class AssetBundle extends \yii\web\AssetBundle
{

	public $css = ['css/jquery.gritter.css'];
	public $js = ['js/jquery.gritter.min.js'];

	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init()
	{
		parent::init();

		$this->sourcePath = YII_PATH . '/../jboesch/gritter';
	}
} 