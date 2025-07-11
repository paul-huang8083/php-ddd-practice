<?php

class EmailVO
{
    // 使用 private 控制外部不可改變值
    private string $email;

    public function __construct(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Invalid email format.");
        }
        $this->email = $email;
    }

    // value 改為 get 比較直覺 => 命名直觀
    public function value(): string
    {
        return $this->email;
    }

    public function equals(EmailVO $other): bool
    {
        return $this->email === $other->value();
    }
}