<?php
echo "Menampilkan angka genap dari 1-10<br>";
for($i=1; $i<=10; $i++) {
    echo ($i % 2 == 0) ? $i : " ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
</head>
<body>
    <table border="1">
        <tr style="background-color: green;">
            <td style="background-color: white;">Bilangan</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <?php
            for($i=1;$i<=10; $i++) {
                echo "<tr>
                        <td style='background-color: green;'>$i</td>";
                for($j=1;$j<=10;$j++) {
                    $hasil = $i * $j;
                    echo ($hasil%2 == 0)? "<td style='background-color: blue;'>$hasil</td>" : "<td style='background-color: yellow;'>$hasil</td>";
                }
                echo "<tr>";
            }
        ?>
        
        
    </table>
</body>
</html>