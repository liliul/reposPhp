## instalando mysql
1. docker pull mysql
2. docker run --name myshopSql -e MYSQL_ROOT_PASSWORD=root -d mysql
3. docker run --name phpmyadmin -d -p 3000:80 -e PMA_HOST="172.17.0.2 phpmyadmin

mais infos: user:root e senha:root

## ip do container docker
```bash
docker inspect myshopSql | grep IPAddress
```
## mysql no docker
```bash
docker exec -it myshopSql mysql -u root -p
```

sql
```bash
create database myshop;

CREATE TABLE clientsMyshop (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (100) NOT NULL,
    email VARCHAR (200) NOT NULL UNIQUE,
    phone VARCHAR (20) NULL,
    address VARCHAR (200) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO clientsMyshop (name, email, phone, address)
VALUES
('Naruto Uzumaki', 'uzumaki#email', '+99441332430', 'Konoha, JP'),
('Som Goku', 'goku#email', '+88001239978', 'Terra, TR')
```

## servidor embutido do php
```bash
php -S localhost:8081
```
