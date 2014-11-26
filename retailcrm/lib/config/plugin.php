<?php
return array(
    'name'          => 'retailCRM',
    'description'   => 'Автоматизация интернет-продаж',
    'vendor'        => '1010049',
    'version'       => '3.0.1',
    'img'           => 'img/icon.png',
    'shop_settings' => true,
    'frontend'      => true,
    'handlers'      => array(
        'order_action.create'   => 'orderAdd',
        'order_action.process'  => 'orderAdd',
        'order_action.pay'      => 'orderAdd',
        'order_action.ship'     => 'orderAdd',
        'order_action.refund'   => 'orderAdd',
        'order_action.edit'     => 'orderAdd',
        'order_action.complete' => 'orderAdd',
        'order_action.comment'  => 'orderAdd',
        'order_action.callback' => 'orderAdd',
        'frontend_head'         => 'analyticsAdd',
    ),
);
