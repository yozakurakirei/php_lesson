<?php

function perform($logger) {
    $logger->log('perform');
}

class EchoLogger {
    public function log($msg) {
        echo $msg;
    }
}

class FileLogger {
    protected $fileWriter;

    public function log($msg) {
        $this->fileWriter->write($$msg);
    }
}


?>