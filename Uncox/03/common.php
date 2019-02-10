<?php
function getDateTime(){
    return date('Y-m-d H:i:s');
}
function encriptPassword($password){
    global $config;
    return md5($password.$config['salt']);
}