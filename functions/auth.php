<?php


 function is_authenticated() {
    
    if(empty($_SESSION['is_authenticated'])) { 
        return false;
    } else {  
        return true;
    }
 }