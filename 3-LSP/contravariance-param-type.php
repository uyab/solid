<?php
class User {
    public function __construct(?string $username, string $password)
    {
    }

    public function login(?string $username, string $password) {
        // ...
    }
}

class Admin extends User {

    public function __construct(string $username, string $password)
    {
        parent::__construct($username, $password);
    }

    public function login(string $username, string $password) {

    }
}


class Calculator {
    public function add(float|int $a, float|int $b) {
        return $a + $b;
    }
}

class EasyCalculator extends Calculator {
    public function add(int $a, int $b) {
        return $a + $b;
    }
}
