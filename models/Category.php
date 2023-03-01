<?php
class Category{
    // Thuộc tính

    private $ma_tloai;
    private $ten_tloai;


    public function __construct($ma_tloai, $ten_tloai){
        $this->ma_tloai=$ma_tloai;
        $this->ten_tloai=$ten_tloai;
    }

    // Setter và Getter
    public function getTitle(){
        return $this->ma_tloai;
    }

    public function getTen()
    {
        return $this->ten_tloai;
    }
}