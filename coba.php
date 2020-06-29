<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Mean</title>
</head>
<body>
    <?php

        //buatlah file dengan nama cari-mean.php. Di dalam file tersebut buatlah sebuah function dengan nama cari_mean yang menerima parameter berupa array berisi angka-angka. function akan mengembalikan nilai mean atau rata-rata dari kumpulan angka pada array tersebut. Contohnya jika parameternya [1,2,3,4,5] maka function akan me-return angka 3 yang merupakan nilai rata-rata dari data di dalam array tersebut.

        function cari_mean($arr){
        //kode di sini
            echo round(array_sum($arr)/count($arr))."<br>";
        }

        //TEST CASE 
        echo cari_mean([1, 2, 3, 4, 5]); // 3
        echo cari_mean([3, 5, 7, 5, 3]); // 5
        echo cari_mean([6, 5, 4, 7, 3]); // 5
        echo cari_mean([1, 3, 3]); // 2
        echo cari_mean([7, 7, 7, 7, 7]); // 7
        echo cari_mean([7, 5, 1, 9, 7]); // 7
        echo cari_mean([7, 2, 18, 2, 10]); // 7
        echo cari_mean([99, 14, 3, 32, 22]); // 7

    ?>
    
</body>
</html>