github.com/eurekasolution/uipa2

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


---- 3일차 오전
1. object.html
2. dom.html

sess폴더 만들기
3. print.php
4. login.php
5. logout.php

---- 3일차 오후
Error(Status) Code in HTML

RFC HTML

1xx : Trying
2xx : OK
3xx : Temporary Error, Redirect Error
4xx : Permanent Error, Client Error
5xx : Server Error
6xx : Global Error


favicon.ico


1. download nodejs

2. npm install -g @vue/cli

D:\xampp\htdocs\vue>node -v
v18.17.1

D:\xampp\htdocs\vue>npm -v
9.6.7

npm init vue@latest

  cd hivue
  npm install
  npm run dev

  port번호를 내가 지정하면서 서버실행
  npm run dev -- --port 3000


   ./test hello 

  int main(int argc, char **argv)
  {
      char buf[100];
      strcpy(buf, argv[1]);
      printf(buf);
      return 0;
  }