<?php
class Article extends DBConnection{
    // Thuộc tính

    public $ma_bviet ;
    private $tieude;
    private $ten_bhat;
    private $ma_tloai ;
    private $tomtat;
    private $noidung;
    private $ma_tgia ;
    private $ngayviet;
    private $hinhanh;
    
    protected $db;
    public function __connect()
        
	    {
		$this->db = new DBConnection();
		$this->db->getConnection();
	    }
    
    public function __construct($ma_bviet, $tieude, $ten_bhat, $ma_tloai, $tomtat, $noidung, $ma_tgia, $ngayviet, $hinhanh){
        $this->ma_bviet = $ma_bviet;
        $this->tieude = $tieude;
        $this->ten_bhat=$ten_bhat;
        $this->ma_tloai = $ma_tloai;
        $this->tomtat = $tomtat;
        $this->noidung=$noidung;
        $this->ma_tgia = $ma_tgia;
        $this->ngayviet = $ngayviet;
        $this->hinhanh=$hinhanh;
    }

    public function add_article($tieude, $ten_bhat, $ma_tloai, $tomtat, $noidung, $hinhanh){
        $this->tieude = $tieude;
        $this->ten_bhat=$ten_bhat;
        $this->ma_tloai = $ma_tloai;
        $this->tomtat = $tomtat;
        $this->noidung=$noidung;
        $this->hinhanh=$hinhanh;
        $sql = "INSERT INTO baiviet(tieude , ten_bhat, ma_tloai, tomtat, noidung, hinhanh)
							VALUES ('$tieude', '$ten_bhat', '$ma_tloai', '$tomtat', '$noidung', '$hinhanh')";
        return $this->db->conn->query($sql);
    }

    // Setter và Getter
    public function getTitle(){
        return $this->ma_bviet;
    }
}
