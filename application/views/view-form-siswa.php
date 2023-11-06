<html>
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="3">
                    Form Input Data Siswa
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td>
                        <input type="nim" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="alamat" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="agama" id="agama">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki"> Laki-laki
                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
