CREATE DATABASE db_akademik;
USE db_akademik;

CREATE TABLE mahasiswa (
    id_mahasiswa INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(100)
);

CREATE TABLE dosen (
    id_dosen INT PRIMARY KEY AUTO_INCREMENT,
    nama_dosen VARCHAR(100) NOT NULL,
    nip VARCHAR(20) UNIQUE,
    email VARCHAR(100)
);

CREATE TABLE mata_kuliah (
    id_matkul INT PRIMARY KEY AUTO_INCREMENT,
    nama_matkul VARCHAR(100) NOT NULL,
    kode_matkul VARCHAR(10) NOT NULL UNIQUE,
    id_dosen INT NOT NULL,
    
    FOREIGN KEY (id_dosen) REFERENCES dosen(id_dosen)
);

CREATE TABLE pengambilan_matkul (
    id_pengambilan INT PRIMARY KEY AUTO_INCREMENT,
    id_mahasiswa INT NOT NULL,
    id_matkul INT NOT NULL,
    semester VARCHAR(10),

    FOREIGN KEY (id_mahasiswa) REFERENCES mahasiswa(id_mahasiswa),
    FOREIGN KEY (id_matkul) REFERENCES mata_kuliah(id_matkul)
);

INSERT INTO mahasiswa (nama, email, nim) VALUES
('Elsa', 'elsa@mail.com', '2306026'),
('Bebe', 'bebe@mail.com', '2408028');

INSERT INTO dosen (nama_dosen, email, nip) VALUES
('Mr. Fresh', 'fresh@mail.com', '200802091234500'),
('Ms. Eepy', 'eepy@mail.com', '2004081920093578');

INSERT INTO mata_kuliah (nama_matkul, kode_matkul, id_dosen) VALUES
('Algoritma Permeongan', 'AP201', '1'),
('Sistem Basismeong', 'SB208', '2');

INSERT INTO pengambilan_matkul (id_mahasiswa, id_matkul, semester) VALUES
('1', '2', '2'),
('2', '1', '1');