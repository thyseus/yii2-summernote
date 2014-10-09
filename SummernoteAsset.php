<?php
/**
 * @copyright Aleksandr Zelenin <aleksandr@zelenin.me>
 */
namespace Zelenin\yii\widgets\Summernote;

use Yii;
use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@bower/summernote/dist';
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'Zelenin\yii\widgets\Summernote\FontawesomeAsset',
        'Zelenin\yii\widgets\Summernote\CodemirrorAsset',
    ];

    public function init()
    {
        $this->css[] = 'summernote.css';
        $this->js[] = YII_DEBUG
            ? 'summernote.js'
            : 'summernote.min.js';

        parent::init();
    }
}
