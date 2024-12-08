<?php

abstract class Character
{
    abstract public function agility(): int;
}

class Superman extends Character
{
    public function agility(): int
    {
        return 100;
    }
}

class Flash extends Character
{
    public function agility(): int
    {
        return 1000;
    }
}

class Tree extends Character
{
    public function agility(): int|null
    {
        return null;
    }
}
