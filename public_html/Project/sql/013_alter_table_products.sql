ALTER TABLE Products
ADD column avg_rating DECIMAL(1,1) default 0.0;

ALTER TABLE Products
ADD column num_rating int default 0;