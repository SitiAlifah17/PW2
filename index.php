<?php

//class Tes{


//}

//$a = new Tes();


class Mobil{
    public $nama, $merk, $warna;
    

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
}

$mobil1 = new Mobil();




class Produk {
    public  $nama = 'ini nama', 
            $jenis = 'ini jenis',
            $harga = 9999;
    
    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
        
    }


    public function printHarga(){
        return $this->harga;
    }
}

$produk1 = new Produk("HOODIE", "JAKET", 185000);

echo "$produk1->nama, $produk1->jenis";
echo "<br>";
echo "Harga :" . $produk1->printHarga();

//echo $produk1->nama;
//echo $produk1->jenis;


//echo "Produk 1: $produk1->nama"


?>