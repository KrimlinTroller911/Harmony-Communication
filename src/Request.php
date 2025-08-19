<?php declare(strict_types=1);

namespace Harmony\Communication;

class Request
{
    public function getMethod() : string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
    public function getURI() : string 
    {
        return $_SERVER['REQUEST_URI'];
    }
    public function getContentType() : string 
    {
        //Request should be POST
        return $_SERVER['CONTENT_TYPE'];
    }
    public function getBody() : array | bool | string
    {
        if(empty($_GET)){
            return $_POST;
        }
        if(empty($_POST)){
            return file_get_contents("php://input");
        }
        return $_GET;
    }

    public function getCookie() : array 
    {
        return $_COOKIE;
    }

    public function getHost() : string 
    {
        return $_SERVER['HTTP_HOST'];
    }
}