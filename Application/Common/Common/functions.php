<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 2017/1/1
 * Time: 16:42
 */


function dd($arr){
    if(is_bool($arr) || is_string($arr)){
        var_dump($arr);
    }
    if(is_array($arr) || is_object($arr)){
        echo '<pre>'.print_r($arr).'</pre>';
    }
}

/**
 * 全局变量
 *
 * @param $name 变量名
 * @param string $value 变量值
 *
 * @return mixed 返回值
 * v('a','abc');  v('a')
 */
if ( ! function_exists( 'v' ) ) {
    function v( $name = null, $value = '[null]' ) {
        static $vars = [ ];
        if ( is_null( $name ) ) {
            return $vars;
        } else if ( $value == '[null]' ) {
            //取变量
            $tmp = $vars;
            foreach ( explode( '.', $name ) as $d ) {
                if ( isset( $tmp[ $d ] ) ) {
                    $tmp = $tmp[ $d ];
                } else {
                    return null;
                }
            }

            return $tmp;
        } else {
            //设置
            $tmp = &$vars;
            foreach ( explode( '.', $name ) as $d ) {
                if ( ! isset( $tmp[ $d ] ) ) {
                    $tmp[ $d ] = [ ];
                }
                $tmp = &$tmp[ $d ];
            }

            return $tmp = $value;
        }
    }
}
