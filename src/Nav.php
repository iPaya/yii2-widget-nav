<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPaya\widgets\nav;

use yii\helpers\ArrayHelper;

class Nav extends \yii\bootstrap\Nav
{
    public $nav;

    public function init()
    {
        parent::init();
        if (isset($this->nav)) {
            $this->items = self::getNavItems($this->nav);
        }
    }

    /**
     * 设置菜单
     *
     * @param string $nav 菜单编号
     * @param array $items 菜单项
     */
    public static function setNavItems($nav, array $items = [])
    {
        \Yii::$app->getView()->params['navItems'][$nav] = $items;
    }

    /**
     * 获取菜单
     *
     * @param string $nav
     * @return array
     */
    public static function getNavItems($nav)
    {
        return ArrayHelper::getValue(\Yii::$app->getView()->params, "navItems.{$nav}", []);
    }

    /**
     * 添加菜单项
     *
     * @param string $nav 菜单编号
     * @param string|array $item 菜单项
     */
    public static function addMenuItem($nav, $item)
    {
        $items = static::getNavItems($nav);
        $items[] = $item;
        \Yii::$app->getView()->params['navItems'][$nav] = $items;
    }
}