<?php
class Author{
    // Thuộc tính

    private $ma_tgia;
    private $ten_tgia;


    public function __construct($ma_tgia, $ten_tgia){
        $this->ma_tgia=$ma_tgia;
        $this->ten_tgia=$ten_tgia;
    }

    // Setter và Getter
    public function getTitle(){
        return $this->ma_tgia;
    }

    public function getTen()
    {
        return $this->ten_tgia;
    }
}