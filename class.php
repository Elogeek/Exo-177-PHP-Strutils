<?php
class StrUtils {

    private String $str;

    public function __construct(String $str) {
        $this->setStr($str);
    }

    public function bold($str) {
        echo "<strong>".$this->getStr($str)."</strong>" ."<br>";
    }
    public function ital($str) {
        echo "<i>".$this->getStr($str)."</i>" ."<br>";
    }
    public function underline($str) {
        echo "<u>".$this->getStr($str)."</u>" ."<br>";
    }
    public function caps($str) {
        echo "<cap style='text-transform: capitalize'>".$this->getStr($str)."</cap>" ."<br>";
    }
    public function uglify($str) {
        echo "<strong><i><u>".$this->getStr($str)."</u></i></strong>" ."<br>";
    }
    public function uppercase($str) {
        echo "<p style='text-transform: uppercase'>" . $this->getStr($str) . "</p>" ."<br>";
    }

    /**
     * @return mixed
     */
    public function getStr() {
        return $this->str;
    }

    /**
     * @param mixed $str
     */
    public function setStr($str): void {
        $this->str = $str;
    }


}