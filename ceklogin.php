<?php 

// menghubungkan dengan koneksi
sertakan  'koneksi.inc.php' ;

// menangkap data yang dikirim dari formulir
$ nama pengguna = $ _POST [ 'nama pengguna' ];
$ kata sandi = $ _POST [ 'kata sandi' ];

// menyeleksi data admin dengan username dan password yang sesuai
$ data = mysqli_query ( $ conn , "SELECT * FROM login_kontak WHERE username='$username' AND password='$password'" );

// menghitung jumlah data yang ditemukan
$ cek = mysqli_num_rows ( $ data );

jika ( $ cek > 0 ){
	$ _SESSION [ 'nama pengguna' ] = $ nama pengguna ;
	$ _SESSION [ 'status' ] = "masuk" ;
	header ( "lokasi:cetak.php" );
} lain {
	header ( "lokasi:index.php?pesan=gagal" );
}
?>
