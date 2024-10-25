use PendaftaranSeminarDB;

INSERT INTO TopikWebinar (NamaTopik, Deskripsi)
VALUES ('Potensi Industri Game dalam Dunia Pendidikan, serta Desain Game Edukasi',
'Menggali lebih dalam mengenai bagaimana game bisa menjadi alat pembelajaran yang efektif.');

SELECT * FROM TopikWebinar;

INSERT INTO Seminar (Judul, Deskripsi, Tanggal, Tempat, Kuota, TopikID)
VALUES ('Play IT', 'Menggali lebih dalam mengenai bagaimana game bisa menjadi alat pembelajaran yang efektif.',
'02-11-2004', 'Gedung Teknik Sipil Polinema', '200', '1');

SELECT * FROM Seminar;

INSERT INTO DetailEventSeminar (SeminarID, Tanggal, Biaya, Tempat, Kuota, Deskripsi)
VALUES (3, '02-11-2004', 75000, 'Gedung Teknik Sipil Polinema', 200, 'Menggali lebih dalam mengenai bagaimana game bisa menjadi alat pembelajaran yang efektif.');

INSERT INTO Pendaftaran (SeminarID)
VALUES (3);

SELECT * FROM Seminar;

SELECT * FROM Peserta;

INSERT INTO TopikWebinar (NamaTopik, Deskripsi)
VALUES ('Smart Cities and IOT',
'Understanding IOT inovations and challenges to prepare smart cities
for an adaptive future.');

INSERT INTO Seminar (Judul, Deskripsi, Tanggal, Tempat, Kuota, TopikID)
VALUES ('SMART CITIES and IOT', 
        'Understanding IOT innovations and challenges to prepare smart cities for an adaptive future.',
        '2024-11-02 07:30:00', 
        'Gedung Teknik Sipil Polinema', 
        200, 
        2);

INSERT INTO DetailEventSeminar (SeminarID, Tanggal, Biaya, Tempat, Kuota, Deskripsi)
VALUES (9, '2024-11-02 07:30:00', 25000, 'Gedung Teknik Sipil Polinema', 200,
        'Understanding IOT innovations and challenges to prepare smart cities for an adaptive future.');

SELECT * FROM Seminar;

INSERT INTO Pendaftaran (SeminarID)
VALUES (9);


SELECT * FROM DetailEventSeminar;

