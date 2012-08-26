<?php
// +----------------------------------------------------------------------
// | ThinkPHP
// +----------------------------------------------------------------------
// | Copyright (c) 2007 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

/**
 +------------------------------------------------------------------------------
 * Think兼容函数库 针对5.2.0以下版本
 +------------------------------------------------------------------------------
 * @category   Think
 * @package  Common
 * @author   liu21st <liu21st@gmail.com>
 * @version  $Id$
 +------------------------------------------------------------------------------
 */

if (!function_exists('json_encode')) {
     function format_json_value(&$value)
    {
        if(is_bool($value)) {
            $value = $value?'true':'false';
        }elseif(is_int($value)) {
            $value = intval($value);
        }elseif(is_float($value)) {
            $value = floatval($value);
        }elseif(defined($value) && $value === null) {
            $value = strval(constant($value));
            
        }
    }
}