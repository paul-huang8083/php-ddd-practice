<?php

class UserDTO
{
    // 改為 private，不要被直接依賴
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }
}