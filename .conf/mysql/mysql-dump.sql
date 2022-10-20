CREATE TABLE ratedb.users (
	user_id BIGINT auto_increment NOT NULL,
	name varchar(255) NULL,
	surname varchar(255) NULL,
	email varchar(255) NULL,
	password varchar(255) NULL,
	rate FLOAT NULL,
	signup_date TIMESTAMP NULL,
	birthday TIMESTAMP NULL,
	status int(11) NULL,
    PRIMARY KEY (user_id)
);

INSERT INTO ratedb.users (name, surname, email, password, rate, signup_date, birthday, status)
VALUES ('Shael', 'Knight', 'shael.knight@gmail.com', 123456, 0, '2022-10-18 00:00:00', '1984-09-03 00:00:00', 1),
       ('Joel', 'Knight', 'joel.knight@gmail.com', 123456, 0, '2022-10-18 00:00:00', '1984-09-03 00:00:00', 1);

CREATE TABLE ratedb.river (
	r_id BIGINT auto_increment NOT NULL,
    user_id int(11) NULL,
    content varchar(255) NULL,
    PRIMARY KEY (r_id)
);

INSERT INTO ratedb.river (user_id, content)
VALUES (1, 'post 1'),
       (2, 'post 2'),
       (3, 'post 3')