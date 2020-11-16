<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="gudanggitar">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Warna</td>
                <td><input type="text" name="warna"></td>
            </tr>
            <tr> 
                <td>Type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $warna = $_POST['warna'];
        $type = $_POST['type'];
        $tahun = $_POST['tahun'];

    
        include_once("config.php");

        
        $result = mysqli_query($mysqli, "INSERT INTO gudanggitar(nama,warna,type,tahun) VALUES('$nama','$warna','$type','$tahun')");

        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>