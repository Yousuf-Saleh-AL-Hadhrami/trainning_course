<?php 

namespace Moe1\Oop\Notifications;
trait Notification
{
    public function notifyAdmin()
    {
        return 'The Admin is Notified';
    }


    public function notifyUser()
    {
        return 'The User is Notified';
    }


    public function notifyGuest()
    {
        return 'The Guest is Notified';
    }
}