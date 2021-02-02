-- tHIS IS A SQL COMMENT
-- CREATE OUR LESSON 03 DB
CREATE DATABASE IF NOT EXISTS comp_1006_lesson_03;
use comp_1006_lesson_03;


-- create the countries table 
create table if not exists countries (
	id int(11) NOT NULL auto_increment,
    NAME varchar(100) NOT NULL,
	description VARCHAR(2000) NULL,
    POPULATION INT(15) NOT NULL,
    create_at timestamp not null default current_timestamp,
    update_at timestamp not null default current_timestamp on update current_timestamp,
    PRIMARY KEY(id)#索引 id never be same
);