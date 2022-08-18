<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

/**
 *  Get user data
 *
 * @param int $user_id
 *
 * @return mixed If success request, return user data array, else bool false
 */

function fn_user_info_get_user_data($user_id) {
    if (is_numeric($user_id) and $user_id > 0) {
        $user_info = db_get_row("SELECT `company`, `firstname`, `lastname`, `email`, `phone` FROM `?:users` WHERE `user_id` = ?i LIMIT 1", $user_id);
        return $user_info;
    }
    return false;
}

/**
 *  Returns an array that replaces keys with headers
 *
 * @param array $title_list
 * @param array $field_list
 *
 * @return array Title => Value array
 */

function fn_user_info_set_title_fields($field_list, $title_list) {
    $out_fields = array();
    if (is_array($title_list) and is_array($field_list)) {
        foreach($field_list as $key => $value) {
            if (isset($title_list[$key])) {
                $out_fields[$title_list[$key]] = $value;
            }
        }
    }
    return $out_fields;
}