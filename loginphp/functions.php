<?php
$conn = mysqli_connect("localhost", "root", "", "db_restaurant");

function register($data)
{
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
		return false;
	}

	//cek username sudah ada apa belum
	$result = mysqli_query($conn, "SELECT username FROM user_restaurant WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
            alert('user sudah terdaftar');
            </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//menambahkan ke database
	mysqli_query($conn, "INSERT INTO user_restaurant VALUES('','','$username','$password')");

	return mysqli_affected_rows($conn);
}
