<?php

require_once 'UserDTO.php';
require_once 'EmailVO.php';

// DTO
$user = new UserDTO('Test', 'test@test.com');

echo $user->name . ' - ';
echo $user->email;
die();

// VO
$emailA = new EmailVO('aaa@test.com');
$emailB = new EmailVO('bbb@test.com');

echo $emailA->value();
echo $emailA->value();

if ($emailA->equals($emailB)) {
    echo 'Same';
} else {
    echo 'XXXX';
}

// 正確設計 VO 時，無法這樣更動變數值，除非將變數改為 public
// $emailA->email = 'bbb@test.com';
// echo $emailA->equals($emailB);

// 正確的修改 VO 值方式: 新建一個物件
$emailA = new EmailVO('ccc@test.com');
echo $emailA->value();
