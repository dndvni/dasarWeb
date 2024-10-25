use PendaftaranSeminarDB;

CREATE TABLE Peserta (
    PesertaID INT PRIMARY KEY IDENTITY(1,1),
    Nama VARCHAR(100) NOT NULL,
    Email NVARCHAR(150) NOT NULL UNIQUE,
    Telepon NVARCHAR(15),
    Password VARCHAR(25) NULL
);

CREATE TABLE TopikWebinar (
    TopikID INT PRIMARY KEY IDENTITY(1,1),
    NamaTopik NVARCHAR(100) NOT NULL,
    Deskripsi NVARCHAR(MAX)
);

CREATE TABLE Seminar (
    SeminarID INT PRIMARY KEY IDENTITY(1,1),
    Judul NVARCHAR(255) NOT NULL,
    Deskripsi NVARCHAR(MAX),
    Tanggal DATETIME NOT NULL,
    Tempat NVARCHAR(255),
    Kuota INT NOT NULL,
    TopikID INT,
    FOREIGN KEY (TopikID) REFERENCES TopikWebinar(TopikID)
);

CREATE TABLE Pendaftaran (
    PendaftaranID INT PRIMARY KEY IDENTITY(1,1),
    PesertaID INT,
    SeminarID INT,
    TanggalPendaftaran DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (PesertaID) REFERENCES Peserta(PesertaID),
    FOREIGN KEY (SeminarID) REFERENCES Seminar(SeminarID)
);

CREATE TABLE DetailEventSeminar (
    DetailID INT PRIMARY KEY IDENTITY(1,1),
    SeminarID INT,
    Tanggal DATETIME NOT NULL,
    Biaya DECIMAL(10,2),
    Tempat NVARCHAR(255),
    Kuota INT NOT NULL,
    Deskripsi NVARCHAR(MAX),
    FOREIGN KEY (SeminarID) REFERENCES Seminar(SeminarID)
);