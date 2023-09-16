<?php
//sistem pemesanan tiket bios
/*
1.user meemsan tiket apa yang akan di pesan dan brapap jumlha tiket ✔
2.jika user memilih film 1 maka harga nya adalah 1000 jika user memilih film2 maka harga nya 1200✔
3.setelah user memilih film dan brapa tiket yang di pesan tampilkan jumlah yang harus di bayar✔
4.selanjut nya user meng input uang yang harus di bayar jika kurang tampilkan(uang tidak cukup) jika pas tampilkan(silhakan tiket anda ) jika uang lebih tampilkan (silahkan tiket anda dan kembalian nya $total kembalian)


*/


class pesan_tiket
{

    public $pilih_film;
    public $jumlah_ticket;
    public $bayar;
    public $film1 = 1000;
    public $film2 = 1200;

    public function __construct($pilih_film, $jumlah_ticket, $bayar)
    {
        $this->pilih_film = $pilih_film;
        $this->jumlah_ticket = $jumlah_ticket;
        $this->bayar = $bayar;
    }


    public function ticket()
    {
        if ($this->pilih_film == 1) {
            echo "harga ticket film 1 adalah : " . $this->film1 . "<br>";
        } else if ($this->pilih_film == 2) {
            echo "harga ticket film 2 adalah : " . $this->film2 . "<br>";
        } else {
            echo "film ini sedang tidak tersedia <br>";
        }
    }

    public function jumlah_yang_harus_di_bayar()
    {
        if ($this->pilih_film == 1) {
            echo "total yang harus di bayar " . $this->film1 * $this->jumlah_ticket . "<br>";
        } elseif ($this->pilih_film == 2) {
            echo "total yang harus di bayar " . $this->film2 * $this->jumlah_ticket . "<br>";
        }
    }


    public function bayar()
    {
        if ($this->pilih_film == 1 && $this->bayar >= $this->film1 * $this->jumlah_ticket) {
            echo "silahkan ticket anda <br> ";
        } elseif ($this->pilih_film == 2 && $this->bayar >= $this->film2 * $this->jumlah_ticket) {
            echo "silahkan ticket anda <br>";
        } elseif ($this->bayar < $this->film1 * $this->jumlah_ticket || $this->bayar < $this->film2 * $this->jumlah_ticket ) {
            echo "uang anda tidak cukup <br>";
        }
    }


    public function userbayar(){
        echo "user membayar seharga : $this->bayar <br>";
    }


    public function kembalian()
    {
        if ($this->pilih_film == 1) {
            echo "kembalian nya :" . $this->bayar - ($this->film1 * $this->jumlah_ticket) . "<br>";
        } elseif ($this->pilih_film == 2) {
            echo "kembalian nya :" . $this->bayar - ($this->film2 * $this->jumlah_ticket) . "<br>";
        } elseif($this->pilih_film >2) {
            echo "";
        }
    }
}


$order = new pesan_tiket(1, 2, 7000);
$order->ticket();
$order->jumlah_yang_harus_di_bayar();
$order->userbayar();
$order->kembalian();
echo "<hr>";
$order->bayar();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>