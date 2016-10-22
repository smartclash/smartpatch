<?php

class MessageHandler
{
    public function __construct($text, $type)
    {
        $this->checkData($text, $type);
    }

    public function checkData($obj1, $obj2)
    {
        switch($obj2):
            case INFO:
                $this->INFO($obj1);
                break;
            case WARNING:
                $this->WARNING($obj1);
                break;
            case ERROR:
                $this->ERROR($obj1);
                break;
            case SUCCESS:
                $this->SUCCESS($obj1);
                break;
            default:
                $this->noInput();
        endswitch;
    }

    public function INFO($text)
    {
        echo "[INFO] -> " . $text;
    }

    public function WARNING($text)
    {
        echo "[WARNING] -> " . $text;
    }

    public function ERROR($text)
    {
        echo "[ERROR] -> " . $text;
    }

    public function SUCCESS($text)
    {
        echo "[SUCCESS] -> " . $text;
    }

    public function noInput()
    {
        echo "Oops, no type is declared in any one of your echo strings";
    }
}