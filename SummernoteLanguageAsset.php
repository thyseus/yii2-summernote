<?php

namespace marqu3s\summernote;

use Yii;
use yii\web\AssetBundle;

class SummernoteLanguageAsset extends AssetBundle
{
    /** @var string */
    public $language;
    /** @var string */
    public $sourcePath = '@bower/summernote-0.6.16/lang';
    /** @var array */
    public $depends = [
        'Zelenin\yii\widgets\Summernote\SummernoteAsset'
    ];

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        $this->js[] = 'summernote-' . $this->language . '.js';
        parent::registerAssetFiles($view);
    }
}
