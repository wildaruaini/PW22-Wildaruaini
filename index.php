<!DOCTYPE html>
<html lang="en">

<?php
  include 'proses.php';
?>


<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="header">
    <img src="Logo_UPG.png" alt="Logo" class="logo">
        Form Mahasiswa <font color="orange">UPG</font>
        <div class="copyright">
    <p></p>
</div>
</div>
    

    <div class="content">
        <form method="post" action="proses.php">
            <table  border="1" style="width: 500px;">
                <tr>
                    <td align="center" colspan="3" bgcolor="black">
                        <font color="#FFFFFF" size="4px">
                            <b>Isi Data Anda Di Bawah Ini Dengan Lengkap!</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nim</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Nama Mahasiswa</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Alamat</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="alamat">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">No.Telp</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="telp">
                    </td>
                </tr>
                <tr> 
                    <td bgcolor="#DEDEDE">Agama</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <select name="agama">
                            <option value="Pilih">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">Jenis Kelamin</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                
     <input type='radio' name='jeniskelamin' value='laki-laki' />Laki-Laki
     <input type='radio' name='jeniskelamin' value='Perempuan' />Perempuan
                        
                    </td>
                </tr>
                <tr>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue">
                        <input type="submit" name="submit" value="SIMPAN">
                        <input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        <table align="center" border="1" style="width: 1250px;">
            <tr>
                <th bgcolor="Silver">No</th>
                <th bgcolor="Silver">Nim</th>
                <th bgcolor="Silver">Nama Mahasiswa</th>
                <th bgcolor="Silver">Alamat</th>
                <th bgcolor="Silver">No Telp</th>
                <th bgcolor="Silver">Agama</th>
                <th bgcolor="Silver">Jenis Kelamin</th>
                <th bgcolor="Silver">Aksi</th>
            </tr>
            <?php
        $no = 1;
        $data = mysqli_query($penghubung, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td bgcolor="white"><?php echo $no++ ?></td>
          <td bgcolor="white"><?php echo $d['nim']?></td>
          <td bgcolor="white"><?php echo $d['nama']?></td>
          <td bgcolor="white"><?php echo $d['alamat']?></td>
          <td bgcolor="white"><?php echo $d['telp']?></td>
          <td bgcolor="white"><?php echo $d['agama']?></td>
          <td bgcolor="white"><?php echo $d['jeniskelamin']?></td>
          <td bgcolor="white"><a href="hapus.php?id=<?php echo $d['nim']; ?>">Hapus</a> 
        </tr>

        <?php
        }
        ?>
        </table></br>
    </div>

   

    <script>feather.replace();</script>

</body>
</html>
