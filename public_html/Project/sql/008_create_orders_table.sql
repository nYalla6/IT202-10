CREATE TABLE IF NOT EXISTS Orders(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_price int, 
    `address` TEXT,
    payment_method VARCHAR(60),
    money_received int,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    UNIQUE KEY (id)
);
