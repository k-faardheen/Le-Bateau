CREATE TABLE disactivated_account(
    first_name varchar(30),
    last_name varchar(30),
    role varchar(15),
    email varchar(50),
    FOREIGN KEY registration_id VARCHAR(5)
)