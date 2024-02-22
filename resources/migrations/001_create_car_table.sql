-- 
-- CREATE CAR TABLE
--
create table car (
    id int auto_increment primary key,
    plate varchar(6) not null,
    color varchar(255) not null,
    brand varchar(255) not null,
    kind varchar(255) not null
);