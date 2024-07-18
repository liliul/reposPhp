## conexão com mysql
```bash
$dbHost = "172.17.0.2";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "crud_db";
```

## inspesionar ip do container docker
```bash
docker inspect myshopSql | grep IPAddress
```

sql
```bash
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  description TEXT
);

INSERT INTO products(name, price, description)
VALUES
('rtx 2080', 2350, 'Placa de video Nvidia'),
('radeon 6500xt', 2100, 'Placa de video Amd'),
```
