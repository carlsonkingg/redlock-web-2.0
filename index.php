<?php
    # Membuat variable dan credentials yang akan digunakan.
    $server = "mysql";
    $user = "root";
    $pass = "pass123";
    $db = "redlock";

    # Membuat connection baru ke mysql.
    $conn = new mysqli($server, $user, $pass, $db);

    # Membuat test connection jika adalah masalah connection.
    if($conn->connect_error)
    {
        die("Connection Failed: ". $conn->connect_error);
    }

    # Variable untuk mengambil seluruh data yang berada dalam table users.
    $sql = "SELECT * FROM users";

    # Mendapatkan hasil dari variable sql diatas.
    $res = $conn->query($sql);

    # Membuat variable untuk menghitung jumlah data yang ada
    $total = 0;

    # Validasi yang dilakukan sesuai dengan data yang didapatkan variable res.
    if($res->num_rows > 0)
    {
        # Data akan diprint jika ada data dalam table users
        while($row = $res->fetch_assoc())
        {
            echo "ID: ". $row["ID"]. " | Nama: ". $row["Nama"]. " | Alamat: ". $row["Alamat"]. " | Jabatan: ". $row["Jabatan"]. "<br>";
            $total = $total++;
        }
        # Menampilkan jumlah data yang ada
        echo "Total data: ". $total;
    }
    else
    {
        # Akan ditampilkan "0 results" jika tidak ada data dalam table users.
        echo "0 results";
    }

    # Menutup connection.
    $conn->close();
?>