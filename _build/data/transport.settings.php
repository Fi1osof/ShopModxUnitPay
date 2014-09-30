<?php

$settings = array();

$setting_name = 'unitpay.bill_serv_id';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = "unitpay.pay_server";
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = "unitpay.secret_key";
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


unset($setting,$setting_name);
return $settings;