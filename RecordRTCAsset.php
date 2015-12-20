<?php

namespace GermanIgortcev\yii\widgets\RecordRTC;
/**
 * Created by PhpStorm.
 * User: German Igortcev
 * Email: german.igortcev@gmail.com
 * Date: 21.12.2015
 * Time: 2:07
 */

use Yii;
use yii\web\AssetBundle;

class RecordRTCAsset extends AssetBundle{
    /** @var string */
    public $sourcePath = '@bower/recordrtc';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $postfix = YII_DEBUG ? '' : '.min';
        $this->js[] = 'RecordRTC' . $postfix . '.js';
        parent::init();
    }
}