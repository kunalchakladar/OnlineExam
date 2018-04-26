create table admin(
	username varchar(255),
	password varchar(255)
);
create table student(
	username varchar(255) primary key not null,
	fullname varchar(255),
	email varchar(255),
	ph varchar(255),
	address text,
	password varchar(255)
);

insert into student(username, fullname, email, ph, address, password) 
	values('student01', 'John Doe', 'student01@gmail.com', '1234567890', 'Kolkata', '1234');

select * from admin where username='admin';
select * from student where username='student01';