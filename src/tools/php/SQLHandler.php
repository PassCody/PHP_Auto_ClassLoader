<?php
    CLASS SQLHandler{
        private $page, $path = "Pages";
        FUNCTION main($super) {
            $this->path = $super->getPath().$this->path;
            print_r($this);
        }
    }
?>
