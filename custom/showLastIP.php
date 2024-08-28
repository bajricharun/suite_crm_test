<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/Account.php');

$accountId = $_REQUEST['id'];
$account = new Account();
$account->retrieve($accountId);

echo json_encode(array('saved_from_ip_c' => $account->saved_from_ip_c));