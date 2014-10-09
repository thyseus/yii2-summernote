<?php

namespace Zelenin\yii\widgets\Summernote;

use yii\web\AssetBundle;

/**
 * Class CodemirrorAsset
 * @package Zelenin\yii\widgets\Summernote
 */
class CodemirrorAsset extends AssetBundle
{
    public $sourcePath = '@bower/codemirror';

   public function init()
    {
        $this->css[] = 'lib/codemirror.css';
        $this->css[] = 'theme/monokai.css';

        $this->js[] = 'lib/codemirror.js';
        $this->js[] = 'mode/xml/xml.js';
        $this->js[] = "//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js";

        parent::init();
    }
}
