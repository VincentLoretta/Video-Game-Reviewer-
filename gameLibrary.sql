create database gameLibrary; 
USE gameLibrary;
CREATE table USER(
Username varchar(18),
pword varchar(18),
email varchar(18),
userid int(6),
usertype varchar(18),
primary key(userid)
);

create table Games(
Title varchar(255),
genre varchar(255),
publisher varchar(255),
developer varchar(255),
release_date date
);

create table Reviews(
Title varchar(255),
Body varchar(255),
Likes int,
ReviewID int,
userid int
);
insert into Games (title, genre, publisher, developer, release_date) Values  ('Mortal Kombat', 'Fighting', 'NetherRelm Studios', 'Ed Boon', '1992-08-10');  	


select title, body from Reviews; 







