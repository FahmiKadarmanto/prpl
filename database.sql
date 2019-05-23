/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     21/05/2019 09:55:22                          */
/* Created by:     Muhammad Alwan Andika                        */
/*==============================================================*/


drop table if exists MAHASISWA;

/*==============================================================*/
/* Table: MAHASISWA                                             */
/*==============================================================*/
create table MAHASISWA
(
   MAHASISWA_ID         int not null,
   MAHASISWA_NAMA       varchar(100),
   MAHASISWA_NIM        int,
   MAHASISWA_JURUSAN    varchar(100),
   MAHASISWA_JK         bool,
   MAHASISWA_LAHIRTANGGAL date,
   MAHASISWA_LAHIRTEMPAT varchar(100),
   MAHASISWA_LULUSSTATUS bool,
   MAHASISWA_LULUSTANGGAL date,
   MAHASISWA_NOMORIJAZAH varchar(100)
);

