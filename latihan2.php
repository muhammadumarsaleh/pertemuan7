<?php 


$mahasiswa = 
    [
    [ "Muhammad Umar Saleh", "02030237954", "01muh.umar@gmail.com", "Teknik Komputer Dan Jaringan"],
    [ "RIZKI", "02030237954", "01muh.umar@gmail.com", "Teknik Komputer Dan Jaringan"],
    [ "INDRO", "02030237954", "01muh.umar@gmail.com", "Teknik Komputer Dan Jaringan"]
    ];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Data Mahasiswa</h1>

        <ul>
            <?php foreach( $mahasiswa as $m ) : ?>
                <?php foreach( $m as $a) : ?>
                    <li><?php echo $a; ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
 