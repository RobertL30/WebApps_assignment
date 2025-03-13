CREATE DATABASE webapp_db;

USE webapp_db;

    Create TABLE  users (
        id INT AUTOINCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        EMAIL VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

USE webapp_db;
ALTER TABLE users
    ADD first_name VARCHAR(50) AFTER password,
ADD last_name VARCHAR(50) AFTER first_name,
ADD address TEXT AFTER last_name,
ADD contact_number VARCHAR(20) AFTER address;