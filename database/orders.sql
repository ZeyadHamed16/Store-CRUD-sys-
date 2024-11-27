CREATE TABLE orders (
    order_id INT NOT NULL AUTO_INCREMENT,
    customer_id INT,
    product_id INT,
    amount INT,
    date DATE,
    PRIMARY KEY (order_id),
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(product_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (1, 5, 9, 2, '2024-06-22');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (2, 16, 17, 5, '2024-09-03');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (3, 14, 5, 4, '2023-10-15');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (4, 19, 1, 6, '2024-02-10');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (5, 20, 4, 3, '2024-04-07');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (6, 20, 7, 2, '2023-11-15');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (7, 17, 10, 4, '2024-01-20');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (8, 4, 3, 5, '2023-11-28');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (9, 8, 2, 2, '2024-08-21');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (10, 19, 18, 7, '2024-04-21');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (11, 13, 12, 7, '2023-10-31');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (12, 8, 20, 7, '2024-04-14');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (13, 3, 2, 6, '2024-08-24');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (14, 11, 15, 2, '2024-02-10');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (15, 12, 19, 7, '2023-11-10');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (16, 16, 17, 4, '2024-08-09');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (17, 11, 18, 7, '2024-05-14');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (18, 19, 14, 3, '2024-02-08');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (19, 13, 16, 5, '2024-02-09');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (20, 8, 10, 1, '2024-01-10');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (21, 1, 17, 5, '2024-08-20');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (22, 13, 2, 5, '2023-10-21');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (23, 20, 4, 5, '2024-01-19');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (24, 10, 1, 3, '2023-10-25');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (25, 2, 3, 2, '2024-05-05');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (26, 9, 14, 3, '2023-11-20');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (27, 15, 8, 5, '2024-01-15');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (28, 7, 10, 6, '2024-04-02');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (29, 2, 2, 3, '2024-07-14');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (30, 2, 16, 1, '2023-11-01');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (31, 18, 6, 1, '2024-09-21');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (32, 19, 20, 4, '2024-02-10');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (33, 16, 7, 2, '2024-08-26');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (34, 3, 1, 6, '2024-09-26');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (35, 4, 12, 6, '2024-09-24');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (36, 20, 20, 7, '2024-01-28');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (37, 16, 3, 7, '2024-06-08');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (38, 15, 19, 3, '2024-02-15');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (39, 18, 3, 6, '2024-03-15');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (40, 3, 6, 6, '2024-01-08');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (41, 14, 11, 7, '2024-05-31');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (42, 5, 20, 3, '2024-05-08');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (43, 16, 4, 7, '2024-04-09');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (44, 11, 6, 2, '2024-08-18');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (45, 1, 7, 3, '2024-02-10');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (46, 12, 14, 2, '2024-07-03');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (47, 8, 11, 2, '2024-01-23');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (48, 13, 3, 1, '2023-11-24');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (49, 6, 14, 4, '2024-04-01');
INSERT INTO orders (order_id, customer_id, product_id, amount, date) VALUES (50, 1, 17, 1, '2024-01-09');
