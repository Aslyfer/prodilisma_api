CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(20)
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT,
    first_name VARCHAR(50),
    middle_name VARCHAR(50),
    last_name VARCHAR(50),
    second_last_name VARCHAR(50),
    phone INT,
    identification INT,
    email VARCHAR(50),
    password VARCHAR(255),
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE workers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    middle_name VARCHAR(50),
    last_name VARCHAR(50),
    second_last_name VARCHAR(50),
    phone INT,
    identification INT,
    email VARCHAR(50)
);

CREATE TABLE history (
    id INT PRIMARY KEY AUTO_INCREMENT,
    worker_id INT,
    time TIMESTAMP NOT NULL,
    daily_production INT,
    novelty TEXT,
    FOREIGN KEY (worker_id) REFERENCES workers(id)
);