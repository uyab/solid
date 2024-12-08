<?php

// Refactored
interface Notification
{
    public function send($user, $message);
}

class MailNotification implements Notification
{
    public function send($user, $message)
    {
        // send $message to $user using SMTP mail
    }
}

class WhatsAppNotification implements Notification
{
    public function send($user, $message)
    {
        // send $message to $user using WhatsApp
    }
}

class UserService
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function register()
    {
        // 1. register user
        // $user = create user...
        // 2. send welcome email
        $this->notification->send($user, 'Welcome!');
    }
}
