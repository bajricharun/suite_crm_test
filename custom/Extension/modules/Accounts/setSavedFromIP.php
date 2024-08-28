<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class setSavedFromIP
{
    public function setIP($bean, $event, $arguments)
    {
        if (empty($bean->saved_from_ip_c)) {
            // Get client IP
            $clientIP = $_SERVER['REMOTE_ADDR'];

            // Set the IP in saved_from_ip_c
            $bean->saved_from_ip_c = $clientIP;
        }
    }
}