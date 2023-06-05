<?php
function checkLogin(){
    $session = sessionInit();
    $isUserLoggedIn = $session->get('isUserLoggedIn');
    if (!isset($isUserLoggedIn)) {
        return false;
    } else {
        return true;
    }
    

}

function sessionInit(){
    return session();
}