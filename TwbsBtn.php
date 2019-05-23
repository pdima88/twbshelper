<?php

namespace pdima88\twbshelper;

use Nette\Utils\Html;

class TwbsBtn {
    static function success($html, $classNames = '') {
        return self::btn($html, 'btn btn-success '.$classNames);
    }

    static function successXs($html, $classNames = '') {
        return self::success($html, 'btn-xs '.$classNames);
    }

    static function danger($html, $classNames = '') {
        return self::btn($html, 'btn btn-danger '.$classNames);
    }

    static function dangerXs($html, $classNames = '') {
        return self::danger($html, 'btn-xs '.$classNames);
    }

    static function warning($html, $classNames = '') {
        return self::btn($html, 'btn btn-warning '.$classNames);
    }

    static function warningXs($html, $classNames = '') {
        return self::warning($html, 'btn-xs '.$classNames);
    }

    static function btn($html, $classNames = '') {
        return Html::el('button', ['class' => $classNames])->addHtml($html);
    }

    static function a_def($html, $classNames = '') {
        return self::a($html, 'btn btn-default '.$classNames);
    }

    static function a_success($html, $classNames = '') {
        return self::a($html, 'btn btn-success '.$classNames);
    }

    static function a_successXs($html, $classNames = '') {
        return self::a_success($html, 'btn-xs '.$classNames);
    }

    static function a_danger($html, $classNames = '') {
        return self::a($html, 'btn btn-danger '.$classNames);
    }

    static function a_dangerXs($html, $classNames = '') {
        return self::a_danger($html, 'btn-xs '.$classNames);
    }

    static function a_warning($html, $classNames = '') {
        return self::a($html, 'btn btn-warning '.$classNames);
    }

    static function a_warningXs($html, $classNames = '') {
        return self::a_warning($html, 'btn-xs '.$classNames);
    }

    static function a($html, $classNames = '') {
        return Html::el('a', ['class' => $classNames])->addHtml($html);
    }

    
}