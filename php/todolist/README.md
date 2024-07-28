Verificar o ip do docker 
```bash
docker inspect nomeDoContainer # IPAddress
```

Mysql
```bash
CREATE DATABASE todolistDB;

USE todolistDB;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    is_completed BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```