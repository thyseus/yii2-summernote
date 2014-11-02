<?php

namespace Zelenin\yii\widgets\Summernote;

use yii\web\AssetBundle;

class FontawesomeAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/fontawesome';
    /** @var array */
    public $depends = ['yii\bootstrap\BootstrapAsset'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css[] = YII_DEBUG
            ? 'css/font-awesome.css'
            : 'css/font-awesome.min.css';
        parent::init();
    }
}
