  <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mengambil data waktu otomatis

$hariInggris = date("l");
$tanggal = date("d");
$bulanInggris = date("F");
$tahun = date("Y");
$jam = date("H:i:s");

// SWITCH HARI
switch($hariInggris){

    case "Sunday":
        $hariIndonesia = "Minggu";
        break;

    case "Monday":
        $hariIndonesia = "Senin";
        break;

    case "Tuesday":
        $hariIndonesia = "Selasa";
        break;

    case "Wednesday":
        $hariIndonesia = "Rabu";
        break;

    case "Thursday":
        $hariIndonesia = "Kamis";
        break;

    case "Friday":
        $hariIndonesia = "Jumat";
        break;

    case "Saturday":
        $hariIndonesia = "Sabtu";
        break;

    default:
        $hariIndonesia = "Hari tidak diketahui";
}

// SWITCH BULAN
switch($bulanInggris){

    case "January":
        $bulanIndonesia = "Januari";
        break;

    case "February":
        $bulanIndonesia = "Februari";
        break;

    case "March":
        $bulanIndonesia = "Maret";
        break;

    case "April":
        $bulanIndonesia = "April";
        break;

    case "May":
        $bulanIndonesia = "Mei";
        break;

    case "June":
        $bulanIndonesia = "Juni";
        break;

    case "July":
        $bulanIndonesia = "Juli";
        break;

    case "August":
        $bulanIndonesia = "Agustus";
        break;

    case "September":
        $bulanIndonesia = "September";
        break;

    case "October":
        $bulanIndonesia = "Oktober";
        break;

    case "November":
        $bulanIndonesia = "November";
        break;

    case "December":
        $bulanIndonesia = "Desember";
        break;

    default:
        $bulanIndonesia = "Bulan tidak diketahui";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Switch</title>

    <style>

        body{
            background-color: #f8ebf8;
            font-family: Arial;
            text-align: center;
            margin-top:100px;
        }

        .win {
            background-color: #f4eaf5;
            width: 800px;
            margin:auto;
            padding:50px;
            border-radius:20px;
            box-shadow: 0px 0px 10px   #9929EA;
            animation: gerak 5s infinite ease-in-out, 
            glow 3s infinite alternate;
        }
        @keyframes gerak{
            0%{
                transform: translateY(0px);
            }
            50%{
                transform: translateY(-30px);
            }
            100%{
                transform: translateY(0px);
            }
        }
        @keyframes glow{
            from{
                box-shadow: 0px 0px 10px  #9929EA;
            }
            to{
                box-shadow: 0px 0px 20px  #9929EA;
                box-shadow: 0px 0px 40px  #9929EA;
                box-shadow: 0px 0px 60px  #9929EA;
            }
        }

        h1{
            color: #9929EA;
        }

        p{
            font-size: 30px;
        }

    </style>

</head>

<body>

<div class="win">

    <h1> SWITCH MENENTUKAN HARI</h1>

    <p>

 <?php

    echo "Hari Ini : <br><br>";

    echo $hariIndonesia . ", " .
         $tanggal . " " .
         $bulanIndonesia . " " .
         $tahun;

        echo "<br><br>";

 ?>
    <h2 id="jam"></h2>

    <script>
    function tampilJam() {
    let waktu = new Date();

    let jam = waktu.getHours();
    let menit = waktu.getMinutes();
    let detik = waktu.getSeconds();

    document.getElementById("jam").innerHTML =
    jam + ":" + menit + ":" + detik;
}

    setInterval(tampilJam, 1000);
</script>

    </p>

</div>

</body>
</html>