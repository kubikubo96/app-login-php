<?php

/**
 * Khai báo hằng số dùng để kết nối đến CSDL
 */
define("DB_SERVER", "us-cdbr-iron-east-05.cleardb.net");
define("DB_SERVER_USERNAME", "bd910bb52ff3e1");
define("DB_SERVER_PASSWORD", "9a702567");
define("DB_SERVER_NAME", "heroku_0cbe89d374a6f92");

/**
 * mysqli_connect() kết nối đến CSDL
 */
$connection = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_SERVER_NAME);

/**
 * Kiểm tra xem kết nối đến CSDL có thành công không
 * nếu không thành công thì ngắt chương trình bằng câu lệnh die()
 */
if ($connection == false) {
    die("ERROR Không thể kết nối đến CSDL " . mysqli_connect_error());
}