CREATE TABLE users (
    ID char(55) PRIMARY KEY not NULL,
    Nama char(55) not NULL,
    Alamat char(55) not NULL,
    Jabatan char(55) not NULL
);

INSERT INTO `users` VALUES
('AS0001', 'Anto Susanto', 'Jalan Panjang Raya No.23', 'CEO'),
('BR0002', 'Bowo Rahmat', 'Jalan Maju Jaya No.1', 'Manager'),
('DW0003', 'Doni Wibawa', 'Komplek Cerah Blok F No.3A', 'Manager'),
('EY0004', 'Eko Yudono', 'Jalan Supernova No.31', 'Staff'),
('FR0005', 'Fahmi Raihan', 'Jalan Bunga Raya No.6', 'Staff'),
('JT0006', 'Joni Tegar', 'Jalan Daun Hijau No.7', 'Staff');