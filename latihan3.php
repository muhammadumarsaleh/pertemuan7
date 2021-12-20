<?php 


$mahasiswa = 
[
    [ "Nama" => "Muhammad Umar Saleh",
    "NRP" => "02030237954",
    "Email" => "01muh.umar@gmail.com",
    "Jurusan" => "Teknik Komputer Dan Jaringan"],

    ["Nama" => "Rizki febrian",
    "NRP" => "02030237954",
    "Email" => "01muh.umar@gmail.com",
    "Jurusan" => "Teknik Komputer Dan Jaringan"],

    ["Nama" => "Indro sutino",
    "NRP" => "02030237954",
    "Email" => "01muh.umar@gmail.com",
    "Jurusan" => "Teknik Komputer Dan Jaringan",
    "Nilai" => ["112", "64", "556564"]
    ]
];

echo $mahasiswa[2]["Nilai"][1];

?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Data Mahasiswa</h1>

        <ul>
            <?php foreach( $mahasiswa as $mhs ) : ?>
                <li><?php echo $mhs["Nama"]; ?></li>
                <li><?php echo $mhs["NRP"]; ?></li>
                <li><?php echo $mhs["Email"]; ?></li>
                <li><?php echo $mhs["Jurusan"]; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html> -->