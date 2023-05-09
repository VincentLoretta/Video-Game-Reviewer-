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
title varchar(255),
genre varchar(255),
publisher varchar(255),
developer varchar(255),
release_date date,
rating int
);

create table Reviews(
title varchar(255),
Body varchar(255),
Likes int,
ReviewID int,
userid int
);
insert into Games (title, genre, publisher, developer, release_date, rating) Values  ('Mortal Kombat', 'Fighting', 'NetherRelm Studios', 'Ed Boon', '1992-08-10', '10/10');  	

select release_date from Games; 
select title from games; 
select publisher from games;




