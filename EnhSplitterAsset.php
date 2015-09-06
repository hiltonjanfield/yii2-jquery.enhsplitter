<?php

/**
 * @link https://github.com/hiltonjanfield/yii2-jquery.enhsplitter
 * @copyright Copyright (c) 2015 Hilton Janfield
 */

namespace hiltonjanfield\enhsplitter;

use yii\web\AssetBundle;

/**
 *
 * @author Hilton Janfield <hilton@janfield.ca>
 */
class EnhSplitterAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@bower/jquery.enhsplitter';
    public $js = ['js/jquery.enhsplitter.js'];
    public $css = ['css/jquery.enhsplitter.css'];
    public $depends = ['yii\web\JqueryAsset'];

}
