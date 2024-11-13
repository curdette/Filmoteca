<?php
class Router{
    public function route():string{
        $requestUri = $_SERVER['REQUEST_URI'];
        return $requestUri;
    }
}
?>