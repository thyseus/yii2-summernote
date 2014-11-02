<?php

namespace Zelenin\yii\widgets\Summernote;

use yii\web\AssetBundle;

class CodemirrorAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/codemirror';

    /**
     * @inheritdoc
     */
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
