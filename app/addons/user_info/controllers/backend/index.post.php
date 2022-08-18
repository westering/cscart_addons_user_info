<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'index') {
    if (isset($_SESSION['auth'])) {
        $user_id = $_SESSION['auth']['user_id'];
        $user_data = fn_user_info_get_user_data($user_id);
        if (is_array($user_data)) {
            $title_fields = [
                'company'    => __("user_info.company"),
                'firstname'  => __("user_info.firstname"),
                'lastname'   => __("user_info.lastname"),
                'email'      => 'Email',
                'phone'      => __("user_info.phone"),
            ];
            $user_fields = fn_user_info_set_title_fields($user_data, $title_fields);
            Tygh::$app['view']->assign([
                'userSessionData' => $user_fields,
            ]);
        }
    }
}