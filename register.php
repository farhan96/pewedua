<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
    <?php 
    $kabupaten = [
        [

            "id"=>1,
            "nama_kab"=>"pontianak"

        ],
        [
            "id"=>2,
            "nama_kab"=>"singkawang"
        ],
        [
            "id"=>3,
            "nama_kab"=>"sekadau"
        ]
    ]
    ?>
	<h1>FORMULIR PENDAFTARAN</h1>

<form method="POST" action="proses.php">
<table>
<tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username"></td>
</tr>

<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password"></td>
</tr>

<tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
</tr>

<tr>
    <td>No Hp</td>
    <td>:</td>
    <td><input type="number" name="no_hp"></td>
</tr>

<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea name="alamat"></textarea></td>
</tr>

<tr>
    <td>Kabupaten</td>
    <td>:</td>
    <td><select name="kabupaten">
        <?php foreach ($kabupaten as $kab): ?>
    	<option value="1"><?php echo $kab["id"] ?><?php echo $kab["nama_kab"]; ?></option>
    <?php endforeach ?>
    </select></td>
</tr}>
<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
    <input type="radio" name="Jenis" value="Laki-Laki">Laki-Laki
    <input type="radio" name="Jenis" value="Perempuan">Perempuan</td>
</tr>

<tr>
    <td>Prodi Pilihan</td>
    <td>:</td>
    <td><input type="checkbox" name="sistem informasi">Sistem Informasi</td>
    <td><input type="checkbox" name="ti">Teknik Informatika</td>
    <td><input type="checkbox" name="Biologi">Biologi</td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="simpan"/>
    </td>
</tr>
</table>
</form>
</body>
</html>