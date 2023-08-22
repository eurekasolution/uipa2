create table first (
   id char(20) unique,
   name char(20),
   pass char(30)
);

id : uipa, db : uipa, pass: 1111

insert into first (id, name, pass) values ('lee', '이순신', '1111');
insert into first (id, name, pass) values ('test', '테스트', '1111');
insert into first (id, name, pass) values ('kim', '김씨', '1111');
insert into first (id, name, pass) values ('hong', '이순신', '1111');

SELECT * FROM `first` WHERE id='test' and pass='1111';


$id = "test"
$pass = "1111"

select * from first where id='$id' and pass='$pass';
select * from first where  id='' or 2>1  -- ' and pass='';
