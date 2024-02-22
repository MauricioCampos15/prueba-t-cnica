-- 
-- CREATE DRIVER RELATION
--
alter table car add column driver_id int not null;
alter table car add foreign key (driver_id) references contacts(id);

--
-- CREATE OWNER RELATION
--
alter table car add column owner_id int not null;
alter table car add foreign key (owner_id) references contacts(id);