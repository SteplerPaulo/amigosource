<?php
App::import('Helper', 'Html');
class CustomHtmlHelper extends HtmlHelper {
    function __formatAttribute($key, $value, $escape = true) {
        if (in_array($key, array('async', 'defer'))) {
            return $key;
        }
        return parent::__formatAttribute($key, $value, $escape);
    }
}