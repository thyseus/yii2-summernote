<?php
/**
 * @copyright Aleksandr Zelenin <aleksandr@zelenin.me>
 */
namespace Zelenin\yii\widgets\Summernote;

use yii\web\AssetBundle;

/**
 * Class FontawesomeAsset
 * @package Zelenin\yii\widgets\Summernote
 */
class FontawesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';
    public $depends = ['yii\bootstrap\BootstrapAsset'];

    public function init()
    {
        $this->css[] = YII_DEBUG
            ? 'css/font-awesome.css'
            : 'css/font-awesome.min.css';
        parent::init();
    }
}
