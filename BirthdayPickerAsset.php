<?php

namespace repost1\birthdaypicker;

use yii\web\AssetBundle;

class BirthdayPickerAsset extends AssetBundle
{
    public $sourcePath = '@repost1/birthdaypicker/assets/';

    public $js = [
        'jquery.birthdaypicker.min.js'
    ];

    public $css = [
        'jquery.birthdaypicker.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init() {
        parent::init();
    }
}
