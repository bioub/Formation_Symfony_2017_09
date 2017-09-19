<?php
namespace Util;

class Logger {
    
    protected $fic;
    
    public function __construct($filePath) {
        $this->fic = fopen($filePath, 'a');
    }
    
    public function write($msg) {
        fwrite($this->fic, date('d/m/Y H:i:s') . " - $msg\n");
    }
    
    public function __destruct() {
        fclose($this->fic);
    }
}
