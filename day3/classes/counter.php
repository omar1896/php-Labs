<?php
class counter
{
    private $_count;
    private $_session_flag;

    public function __construct()
    {
        $this->_count = $this->get_count();

    }

    public function get_count()
    {
        if (file_exists(_counter_file_)) {
            return intval(file_get_contents(_counter_file_));
        } else {
            return 0;
        }

    }
    public function increament()
    {
        if (!isset($_SESSION[_session_flag_])) {
            $this->_count++;
            $_SESSION[_session_flag_] = true;
            return $this->_count;
        } else {
            return false;
        }
    }

    public function update_count()
    {
        $fh = fopen(_counter_file_, "w+");
        fwrite($fh, $this->_count);
        fclose($fh);
    }
    public function increament_and_update()
    {
      if(  $this->increament()!=false){
        $this->update_count();}
    }




}