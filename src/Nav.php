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
    public $itemsId;

    public function init()
    {
        parent::init();
        if (isset($this->itemsId)) {
            $this->items = self::getNavItems($this->itemsId);
        }
    }

    /**
     * 设置菜单
     *
     * @param string $itemsId 菜单编号
     * @param array $menuItems 菜单项
     */
    public static function setNavItems($itemsId, array $menuItems = [])
    {
        \Yii::$app->getView()->params['menuItems'][$itemsId] = $menuItems;
    }

    /**
     * 获取菜单
     *
     * @param string $menuId
     * @return array
     */
    public static function getNavItems($menuId)
    {
        return ArrayHelper::getValue(\Yii::$app->getView()->params, "menuItems.{$menuId}", []);
    }

    /**
     * 添加菜单项
     *
     * @param string $itemsId 菜单编号
     * @param string|array $item 菜单项
     */
    public static function addMenuItem($itemsId, $item)
    {
        $menu = static::getNavItems($itemsId);
        $menu[] = $item;
        \Yii::$app->getView()->params['menuItems'][$itemsId] = $menu;
    }
}