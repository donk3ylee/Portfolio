<?php

function getRealName($name){
    switch ($name){
    case 'firstName':
        return "The First Name";

    case 'lastName':
        return "The Last Name";
    
    case 'emailAddress':
        return "Your Email Address";
    
    case 'subject':
        return "The Subject Line";

    case 'message':
        return "The Message";
    
    default:
        return null;
    }
}