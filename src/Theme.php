<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\adminlte;

class Theme extends \codeup\base\Theme
{
    public $pathMap = [
        '@codeup/views' => [
            '@app/views-adminlte',
            '@app/views',
            '@codeup/adminlte/views',
        ],
        '@app/views'    => [
            '@app/views-adminlte',
            '@app/views',
            '@codeup/adminlte/views',
        ],
    ];
    public $attributes_replace = [
        '{ctheme}container-fluid'    => 'container-fluid',
        '{ctheme}row'    => 'row',
        '{ctheme}col-'   => 'col-',
        '{ctheme}table'  => 'table',

        '{ctheme}btn'    => 'btn',

        '{ctheme}text-' => 'text-',
        '{ctheme}alert-' => 'alert-',
        '{ctheme}list-' => 'list-',
        '{ctheme}form-' => 'form-',


    ];
    public function bootstrap($app)
    {
        parent::bootstrap($app);
        new Bootstrap($app);
    }
}