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
create table java(
	question varchar(255),
	a varchar(255),	
	b varchar(255),	
	c varchar(255),	
	d varchar(255),
	answer varchar(255)	
);
create table php(
	question varchar(255),
	a varchar(255),	
	b varchar(255),	
	c varchar(255),	
	d varchar(255),
	answer varchar(255)	
);
create table android(
	question varchar(255),
	a varchar(255),	
	b varchar(255),	
	c varchar(255),	
	d varchar(255),
	answer varchar(255)	
);
create table sql_q(
	question varchar(255),
	a varchar(255),	
	b varchar(255),	
	c varchar(255),	
	d varchar(255),
	answer varchar(255)	
);

select * from java where question='question 1?';

insert into java(question, a, b, c, d, answer) values('question 1?', 'A', 'B', 'C', 'D', 'answer');
insert into android(question, a, b, c, d, answer) values('question 1?', 'A', 'B', 'C', 'D', 'answer');
insert into php(question, a, b, c, d, answer) values('question 1?', 'A', 'B', 'C', 'D', 'answer');
insert into sql_q(question, a, b, c, d, answer) values('question 1?', 'A', 'B', 'C', 'D', 'answer');

insert into student(username, fullname, email, ph, address, password) 
	values('student01', 'John Doe', 'student01@gmail.com', '1234567890', 'Kolkata', '1234');

select * from admin where username='admin';
select * from student where username='student01';
select * from student where username='student01' OR email='student01@gmail.com'
	OR ph='1234567890';