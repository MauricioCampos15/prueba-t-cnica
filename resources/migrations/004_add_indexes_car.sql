-- 
-- ADD INDEXES OF CAR TABLE
--
alter table car add index idx_plate (plate);
alter table car add index idx_brand (brand);
alter table car add index idx_plate_brand (plate, brand);