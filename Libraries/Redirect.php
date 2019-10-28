<?php
class Redirect{
    public static function redirected($url) {
        header("location: " . $url);
    }

}