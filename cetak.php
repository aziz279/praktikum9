< html  lang =" en " >
< kepala >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    < title > CETAK PENGGUNA </ title >
</ kepala >
< tubuh >
    < center > < h1  > CETAK PENGGUNA KONTAK </ h1 > </ center >
<?php
sertakan  "koneksi.inc.php" ;
$ cetak = mysqli_query ( $ conn , "SELECT * from kontak ORDER BY nama" ) or die ( "Proses cetak gagal" );

    echo  "<table width='100%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>Tidak</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>" ;
    $ tidak = 1 ;
    foreach ( $ cetak  sebagai  $ hasil ){
    gema  "<tr>
    <td>$tidak</td>
    <td>" . $ hasil [ 'nama' ]. "</td>
    <td>" . $ hasil [ 'jkel' ]. "</td>
    <td>" . $ hasil [ 'email' ]. "</td>
    <td>" . $ hasil [ 'alamat' ]. "</td>
    <td>" . $ hasil [ 'kota' ]. "</td>
    <td>" . $ hasil [ 'pesan' ]. "</td>
    </tr>" ;
    $ tidak ++;
}
echo  "</tabel>" ;
?>
< a  text-align =" justify " href =" index.php " > Kembali </ a >
</ tubuh >
</ html >
