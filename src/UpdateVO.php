<?php


class Example{
    public function __construct(
        public int $age = 20
    ){}

    // 避免修改時影響原始資料
    public function updateAge(int $age){
        return new self($age);
    }
}

$A = new Example();
$B = $A->updateAge(50);
echo $A->age;