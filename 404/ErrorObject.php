<?php
class ErrorObject
{
    private $_error;

    public function __construct($error)
    {
        $this->_error = $error;
    }

    public function write()
    {
        fwrite(STDERR, $this->getError());
    }

    private function getError()
    {
        return $this->_error;
    }
}

( new errorObject("404: Not Found") )->write();
?>
