CREATE TABLE Admin (
    admin_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    admin_right INT,
    user_id INT
);

CREATE TABLE User (
    user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(30),
    last_name VARCHAR(30),
    registration_date DATE,
    user_mail VARCHAR(255),
    user_phone VARCHAR(12),
    user_password VARCHAR(255),
    address VARCHAR(255),
    postal_code VARCHAR(10),
    city VARCHAR(20),
    picture_path_user VARCHAR(255)
);

CREATE TABLE Exemplaire (
    exemplaire_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    exemplaire_quantity INT,
    exemplaire_picture_path VARCHAR(255),
    artwork_id INT
);

CREATE TABLE Artwork (
    artwork_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    artwork_title VARCHAR(255),
    artwork_date DATE,
    resume TEXT,
    collection VARCHAR(255),
    author_id INT,
    type_id INT,
    authority_id INT
);

CREATE TABLE Author (
    author_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    birth_date DATE,
    nationality VARCHAR(255)
);

CREATE TABLE Type (
    type_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type_name VARCHAR(255),
    type_theme VARCHAR(255)
);

CREATE TABLE Authority (
    authority_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    authority_name VARCHAR(255),
    authority_email VARCHAR(255),
    authority_phone VARCHAR(12),
    family_id INT
);

CREATE TABLE Family_authority (
    family_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    family_name VARCHAR(255)
);

CREATE TABLE Borrow (
    borrow_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT,
    exemplaire_id INT,
    borrow_date DATE,
    borrow_return_date DATE,
    rate INT
);

ALTER TABLE Admin ADD FOREIGN KEY (user_id) REFERENCES User(user_id);
ALTER TABLE Exemplaire ADD FOREIGN KEY (artwork_id) REFERENCES Artwork(artwork_id);
ALTER TABLE Artwork ADD FOREIGN KEY (author_id) REFERENCES Author(author_id);
ALTER TABLE Artwork ADD FOREIGN KEY (type_id) REFERENCES Type(type_id);
ALTER TABLE Artwork ADD FOREIGN KEY (authority_id) REFERENCES Authority(authority_id);
ALTER TABLE Authority ADD FOREIGN KEY (family_id) REFERENCES Family_authority(family_id);
ALTER TABLE Borrow ADD FOREIGN KEY (user_id) REFERENCES User(user_id);
ALTER TABLE Borrow ADD FOREIGN KEY (exemplaire_id) REFERENCES Exemplaire(exemplaire_id);