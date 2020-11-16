<?php

include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $warna=$_POST['warna'];
    $type= $_POST['type'];
    $tahun= $_POST['tahun'];

    
    $result = mysqli_query($mysqli, "UPDATE gudanggitar SET nama='$nama',warna='$warna',type='$type',tahun='$tahun' WHERE id=$id");

    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM gudanggitar WHERE id=$id");
$myData = mysqli_fetch_array($result);
$nama = $myData['nama'];
$warna = $myData['warna'];
$type = $myData['type'];
$tahun = $myData['tahun'];


?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Warna</td>
                <td><input type="text" name="warna" value=<?php echo $warna;?>></td>
            </tr>
            <tr> 
                <td>Type</td>
                <td><input type="text" name="type" value=<?php echo $type;?>></td>
            </tr>
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun" value=<?php echo $tahun;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>