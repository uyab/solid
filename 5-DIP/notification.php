<?php

class MailNotification
{
    public function send($user, $message)
    {
        // send $message to $user
    }
}

class UserService
{
    private $mailNotification;

    public function __construct(MailNotification $notification)
    {
        $this->mailNotification = $notification;
    }

    public function register($data)
    {
        // 1. register user
        $user = User::create($data);
        // 2. send welcome email
        $this->mailNotification->send($user, 'Welcome!');
    }
}
