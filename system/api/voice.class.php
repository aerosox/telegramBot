<?php
class Voice {
    public $file_id;
    public $duration;
    public $mime_type;
    public $file_size;

    public function __construct($b = false) {
        if (is_array($b)) {
            $this->load($b);
        }
    }

    public function load($b) {
        $this->file_id      = $b["file_id"];
        $this->duration     = $b["duration"];
        $this->mime_type    = Api::pre($b, "mime_type", "");
        $this->file_size    = Api::pre($b, "file_size", 0);
    }
}
?>