<?php
$hook_array['before_save'][] = array(
    1,
    'Set saved_from_ip_c field with the user IP',
    'custom/modules/Accounts/setSavedFromIP.php',
    'setSavedFromIP',
    'setIP'
);