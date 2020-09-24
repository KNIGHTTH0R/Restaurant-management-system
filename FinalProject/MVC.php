<?php

function includeModel($modelName) {
  //add named model 
  include_once("../Model/".$modelName);
}

function controllerPath($controllerName) {
    //return controller full path   
    // ignore relative path complexicity 
}

function ViewPath($controllerName) {
    //return view full path   
    // ignore relative path complexicity 
}

function redirect($path){
    // redirect to the given path 
    header('Location: '.$path);
}

function redirectToView($viewName){
    // redirect to the named view
    $str="../View/".$viewName; 
    header('Location: '.$str);
}

function redirectToViewWithError($viewName,$Err){
    // redirect to the named view with error message in url 
}

function addPartialView($partialView){
    //include partial view to that page 
    // only to be used from main view 
    include("partialView/".$partialView);
}

function AutoSideNav(){
        if($_SESSION["role"]=="customer") include_once("./partialView/sideNav_customer.php"); 
        if($_SESSION["role"]=="manager") include_once("./partialView/SideNav_manager.php");
        if($_SESSION["role"]=="admin") include_once("./partialView/sideNav_admin.php");
}
function AutoTopNav(){
        if($_SESSION["role"]=="customer") include_once("./TopNav_customer.php"); 
        if($_SESSION["role"]=="manager") include_once("./TopNav_manager.php");
        if($_SESSION["role"]=="admin") include_once("./TopNav_admin.php");
}
?>