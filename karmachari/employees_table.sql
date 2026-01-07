CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    emp_code VARCHAR(10) NOT NULL,
    emp_number VARCHAR(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    level VARCHAR(20) NOT NULL,
    service VARCHAR(50) NOT NULL,
    group_name VARCHAR(50) NOT NULL,
    branch VARCHAR(50) NOT NULL,
    sub_branch VARCHAR(50) NOT NULL,
    ward_office VARCHAR(50) NOT NULL,
    health_center VARCHAR(50) NOT NULL,
    status VARCHAR(20) NOT NULL
);
