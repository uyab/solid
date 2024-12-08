<?php

interface Workable
{
    public function code();

    public function test();
}

class Programmer implements Workable
{
    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Workable
{
    public function code()
    {
        throw new Exception('Opps! I can not code');
    }

    public function test()
    {
        return 'testing in test server';
    }
}
