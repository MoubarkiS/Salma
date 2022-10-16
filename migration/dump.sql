CREATE TABLE IF NOT EXISTS POST
(
    id_post INT PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(250),
    date_post date,
    user_id int 
);

CREATE TABLE IF NOT EXISTS USER 
(
user_id INT PRIMARY KEY AUTO_INCREMENT,
user_name varchar (50),
user_password varchar (50),
type_user int 


);


