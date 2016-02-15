<?php

namespace marqu3s\summernote;

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

        parent::init();
    }
}
