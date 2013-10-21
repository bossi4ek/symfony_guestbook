<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 21.10.13
 * Time: 21:30
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\GuestBookBundle;


class Randomer {

    protected $length;

    public function __construct($length = 10)
    {
        $this->length = $length;
    }

    //Рандомный string
    public function generateRandomString() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
        $randomString = '';
        for ($i = 0; $i < $this->length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

}