<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriks n x n dengan Pola Tertentu</title>
</head>
<body>
    <h1>Matriks n x n dengan Pola Tertentu</h1>
    <form action="php_05.php" method="post">
    <label for="n">Masukkan nilai n (1 - 10):</label>
<input type="number" id="n" name="n" min="1" max="10" required pattern="[0-9]{1,2}">
        <button type="submit">Tampilkan Matriks</button>
    </form>

    <?php
       // Mendapatkan input dari text box
       if (isset($_POST['n'])) {
       $n = $_POST['n'];
       
       // Memvalidasi input
       if (!is_numeric($n) || $n < 1 || $n > 10) {
           echo "Input tidak valid. Masukkan nilai numerik antara 1 dan 10.";
           exit;
       }
       
       // Membuat matriks
       $matrix = [];
       for ($i = 0; $i < $n; $i++) {
           $row = [];
           for ($j = 0; $j < $n; $j++) {
               if ($i == $j) {
                   $row[] = $j + 1;
               } else if ($i + $j == $n - 1) {
                   $row[] = $j + 1;
               } else {
                   $row[] = "*";
               }
           }
           $matrix[] = $row;
       }
       
       // Menampilkan matriks
       echo "<table border=1>";
       foreach ($matrix as $row) {
           echo "<tr>";
           foreach ($row as $cell) {
               echo "<td>$cell</td>";
           }
           echo "</tr>";
       }
       echo "</table>";
       
    }else{
        echo "Tolong masukan angka";
    }
       
    ?>
</body>
</html>
