<?php

/**
 * Hiển thị lỗi ra view khi validate các input
 *@param Illuminate\Support\MessageBag $errors
 *@param string $name
 *@return html
*/
function showError($errors, $name){
    if($errors->has($name)){
        return '<div class="alert alert-danger">'.$errors->first($name).'</div>';
    }
}
/**
 * Hiển thị thông báo thành công sau khi thực hiện xong các tác vụ
 *@param array|string|null  $key
 *@param string $name
 *@return html
*/
function showSuccess($key, $message){
    if(session($key)){
        return '<div class="alert bg-success" role="alert">'.__($message).'</div>' ;
function showError($errors,$name){
    if($errors->has($name)){
        return '<div class="alert alert-danger" style="margin-top:3px">
        '.$errors->first($name).'
        </div>';
    }
}
function showNotification($name){
    if(session($name)){
        return
        '<div class="alert bg-success" role="alert">'.
            __('messages.'.$name.'')
        .'</div>';
    }
}