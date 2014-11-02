<?php

namespace Zelenin\yii\widgets\Summernote;

use Yii;
use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/summernote/dist';
    /** @var array */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'Zelenin\yii\widgets\Summernote\FontawesomeAsset',
        'Zelenin\yii\widgets\Summernote\CodemirrorAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css[] = 'summernote.css';
        $this->js[] = YII_DEBUG
            ? 'summernote.js'
            : 'summernote.min.js';

        parent::init();
    }
}
