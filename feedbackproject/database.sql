create table feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) not null,
    email varchar(100) not null,
    body text default '',
    date DATETiME
);
insert into feedback(name, email, body, date) values
('john', 'john@gmail.com','i like it',current_timestamp()),
('john1', 'joh1n@gmail.com','i like it1',current_timestamp()),
('john2', 'john2@gmail.com','i like it2',current_timestamp()),