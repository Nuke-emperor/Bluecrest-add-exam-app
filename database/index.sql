-- bluecrest_student_deep

CREATE TABLE admin (
    id int not null PRIMARY KEY AUTO_INCREMENT,
    admin_name varchar(200) not null,
    admin_password varchar (200) not null,
    admin_code varchar(200)  not null,
    admin_email varchar(200) not null,
    admin varchar(200) not null

);

CREATE TABLE teacher(
    id int not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(200) not null,
    email varchar(200) not null,
    password varchar(200) not null,
    batch_number varchar(200) not null,
    approve_teacher varchar(200) not null,
    user varchar(200) not null
);