<?php
class StrUtils {

    private String $str;

    public function __construct(String $str) {
        $this->setStr($str);
    }

    public function bold($str) {
        echo "<strong>".$this->getStr($str)."</strong>";
    }
    public function ital($str) {
        echo "<I>".$this->getStr($str)."</I>";
    }
    public function underline($str) {
        echo "<u>".$this->getStr($str)."</u>";
    }
    public function caps($str) {
        echo "<p style='text-transform: capitalize'>".$this->getStr($str)."</p>";
    }
    public function uglify($str) {
        echo "<strong><u><I>".$this->getStr($str)."</I></u></strong>";
    }

    /**
     * @return mixed
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * @param mixed $str
     */
    public function setStr($str): void
    {
        $this->str = $str;
    }


}