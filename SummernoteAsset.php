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
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $postfix = YII_DEBUG ? '' : '.min';

        $this->css[] = 'summernote.css';
        $this->js[] = 'summernote' . $postfix . '.js';

        parent::init();
    }
}
