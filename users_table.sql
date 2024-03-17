CREATE TABLE users_table (
  login varchar(32) NOT NULL,
  pswd varchar(255) NOT NULL,
  name varchar(64) DEFAULT NULL,
  email varchar(64) DEFAULT NULL
);

INSERT INTO a_sec_users (login, pswd, name, email)
VALUES 
  ('ademir', 'abc123', 'Ademir Costa', 'ademir@gmail.com'),
  ('marcos', 'marcos123', 'Marcos de Utah', 'sabo@gmail.com'),
  ('rafa', 'rafa123', 'Rafael Mercer', 'rafael@gmail.com');
/* Just generic names. */ 