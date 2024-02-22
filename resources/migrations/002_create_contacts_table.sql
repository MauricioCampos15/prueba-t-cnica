--
-- CREATE CONTACTS TABLE
--
create table contacts (
    id int auto_increment primary key,
    type varchar(12) not null,
    identification varchar(255) not null,
    firstname varchar(255) not null,
    secondname varchar(255) not null,
    lastname varchar(255) not null,
    residence varchar(255) not null,
    phonenumber varchar(255) not null,
    city varchar(255) not null
);