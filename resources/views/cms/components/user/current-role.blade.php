<?php
//// Lấy ra role của user đang đăng nhập.
$roleCurrentUser = Auth::user()->roles()->get()->pluck('title');
?>

<span style="font-size: 14px">{{ ucwords(implode(' - ',$roleCurrentUser->toArray())) }}</span>






