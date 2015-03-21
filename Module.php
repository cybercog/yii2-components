<?php

/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2014 Digital Deals s.r.o. 
 * @license http://www.digitaldeals/license/
 */

namespace dlds\menu;

/**
 * This is the main module class for the Menu module.
 *
 * @author Jiri Svoboda <jiri.svoboda@dlds.cz>
 */
class Module extends \yii\gii\Module {

    public $rules = [
        'edu/*' => 'common',
    ];

    /**
     * Returns the list of the core code generator configurations.
     * @return array the list of the core code generator configurations.
     */
    protected function coreGenerators()
    {
        return [
            'model' => ['class' => 'dlds\giixer\generators\model\Generator'],
            'crud' => ['class' => 'dlds\giixer\generators\crud\Generator'],
            'controller' => ['class' => 'yii\gii\generators\controller\Generator'],
            'form' => ['class' => 'yii\gii\generators\form\Generator'],
            'module' => ['class' => 'yii\gii\generators\module\Generator'],
            'extension' => ['class' => 'yii\gii\generators\extension\Generator'],
        ];
    }

}
