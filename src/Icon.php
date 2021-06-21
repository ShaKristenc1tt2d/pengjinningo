<?php
/**
 * @author Di Zhang <zhangdi_me@163.com>
 */

namespace yiizh\fontawesome;

use yii\helpers\Html;

class Icon
{

    /**
     * @param string $name e.g <code><?=yiizh\fontawesome\Icon::i("home 2x");?></code>
     * @return string
     */
    public static function i($name)
    {
        $names = explode(' ', $name);
        Html::addCssClass($options, 'fa');
        foreach ($names as $key => $value) {
            if (!empty($value)) {
                if (stripos($value, 'fa-') !== false) {
                    Html::addCssClass($options, $value);
                } else {
                    Html::addCssClass($options, 'fa-' . $value);
                }
            }
        }
        return Html::tag('i', '', $options);
    }
}