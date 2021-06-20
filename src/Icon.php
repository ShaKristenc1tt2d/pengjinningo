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
        $names = preg_split('/\s*/', trim($name), -1, PREG_SPLIT_NO_EMPTY);
        Html::addCssClass($options, 'fa');
        foreach ($names as $key => $value) {
            if (stripos('fa-', $value) !== false) {
                Html::addCssClass($options, $name);

            } else {
                Html::addCssClass($options, 'fa-' . $name);
            }
        }
        return Html::tag('i', '', $options);
    }
}