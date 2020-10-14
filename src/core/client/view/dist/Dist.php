<?php

namespace core\client\view\dist;

class Dist {
    public $filename;
    public $src;
    public $mimetype;

    public function __construct($filename) {
        $this->filename = $filename;
        $this->src = readfile($filename);
        $this->mimetype = mime_content_type($filename);
    }
}