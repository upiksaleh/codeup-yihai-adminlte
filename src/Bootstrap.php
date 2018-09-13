<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\adminlte;

use Yii;

class Bootstrap
{
    /**
     * Bootstrap constructor.
     * @param \yii\base\Application $app
     */
    public function __construct($app)
    {
        Yii::setAlias('@codeup/adminlte', __DIR__);
        Yii::$container->set('codeup\assets\ThemeAsset', 'codeup\adminlte\ThemeAsset');
    }
}