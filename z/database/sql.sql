CREATE DATABASE shop_h;
USE shop_h;
CREATE TABLE akun (
    id_akun INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(225) NOT NULL
);
CREATE TABLE barang(
    id_barang INT PRIMARY KEY AUTO_INCREMENT,
    nama_barang VARCHAR(255) NOT NULL,
    deskripsi_barang TEXT NOT NULL,
    harga_barang DECIMAL(10,2) NOT NULL,
    foto_barang VARCHAR(255) UNIQUE
);
DESC akun;
DESC barang;