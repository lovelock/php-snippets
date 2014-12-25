<?php
class MyException extends Exception
{
    public function __construct($message, $code = 0)
    {
        // custom code
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction()
    {
        echo "A custom function for this type of exception";
    }
}
?>
