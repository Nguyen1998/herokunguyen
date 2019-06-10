create table SanPham(
  ID int not null primary key auto_increment,
  Ten varchar(30) not null,
  Gia float,
  TonKho int,
  NCC varchar(30),
  NgayTao date ,
)