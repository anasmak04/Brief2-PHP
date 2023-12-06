CREATE TABLE team(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
)

CREATE TABLE category(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
)

    CREATE TABLE role(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nom VARCHAR(50)
    )


    CREATE TABLE user (
        id INT PRIMARY KEY AUTO_INCREMENT,
        firstName VARCHAR(50),
        lastName VARCHAR(50),
        email VARCHAR(50),
        id_role INT,
        FOREIGN KEY (id_role) REFERENCES role(id),
        password VARCHAR(50),
        confirmPassword VARCHAR(50)
    )



CREATE TABLE product(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    id_categpry INT,
    FOREIGN KEY (id_categpry) REFERENCES category(id),
    id_team INT,
    FOREIGN KEY (id_team) REFERENCES team(id),
    status VARCHAR(50),
    price INT
)


CREATE TABLE blog(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
    status VARCHAR(50),
    description VARCHAR(50),
    id_user INT
    FOREIGN KEY (id_user) REFERENCES user(id),
    Price INT

)