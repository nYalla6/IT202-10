ALTER TABLE Products
MODIFY column avg_rating DECIMAL(10,1) default 0.0;

ALTER TABLE Products
ADD column num_rating int default 0;