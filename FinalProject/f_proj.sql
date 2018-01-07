DROP TABLE IF EXISTS f_proj.log;
DROP TABLE IF EXISTS f_proj.authentication;
DROP TABLE IF EXISTS f_proj.user_info;

DROP SCHEMA IF EXISTS f_proj;

CREATE SCHEMA f_proj;

-- Table: f_proj.user_info
-- Columns:
--    username          - The username for the account, supplied during registration.
--    registration_date - The date the user registered. Set automatically.
--    description       - A user-supplied description.
CREATE TABLE f_proj.user_info (
	username 		VARCHAR(30) PRIMARY KEY,
	registration_date 	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Table: f_proj.authentication
-- Columns:
--    username      - The username tied to the authentication info.
--    password_hash - The hash of the user's password + salt. Expected to be SHA1.
--    salt          - The salt to use. Expected to be a SHA1 hash of a random input.
CREATE TABLE f_proj.authentication (
	username 	VARCHAR(30) PRIMARY KEY,
	password_hash 	CHAR(40) NOT NULL,
	salt 		CHAR(40) NOT NULL,
	FOREIGN KEY (username) REFERENCES f_proj.user_info(username)
);

-- Table: f_proj.log
-- Columns:
--    log_id     - A unique ID for the log entry. Set by a sequence.
--    username   - The user whose action generated this log entry.
--    ip_address - The IP address of the user at the time the log was entered.
--    log_date   - The date of the log entry. Set automatically by a default value.
--    action     - What the user did to generate a log entry (i.e., "logged in").
CREATE TABLE f_proj.log (
	log_id  	SERIAL PRIMARY KEY,
	username 	VARCHAR(30) NOT NULL REFERENCES f_proj.user_info,
	log_date 	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	action 		VARCHAR(50) NOT NULL
);

CREATE INDEX log_log_id_index ON f_proj.log (username);