<?php declare(strict_types=1);

namespace Harmony\Communication;

class Response
{
    private string $data;
    public function setData(string $data) : static
    {
        $this->data = $data;
        return $this;
    }  
    public function contentType($type) : self 
    {
        header("Content-type: application/$type");
        return $this;
    } 
    public function send()
    {
        echo $this->data;
    }
}