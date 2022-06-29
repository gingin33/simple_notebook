CREATE DATABASE IF NOT EXISTS simple_notebooks CHARACTER SET utf8 collate utf8_general_ci;
CREATE USER IF NOT EXISTS 'gingin'@'localhost' IDENTIFIED BY 'Pass2438';
GRANT ALL ON simple_notebooks.* TO 'gingin'@'localhost';
