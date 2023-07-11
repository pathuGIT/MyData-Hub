CREATE TABLE data(
    indexNo int,
    name varchar(255),
    email varchar(255),
    account int
);

insert into data values (1234,"saman","sama@gm",5555);
insert into data (indexNo,name,Account,email) values (1214,"ssman","scma@gm",5555);
select * from data where indexNO = 1234;
update data set indexNO = 1236 where account = 0;
update data set email="kamal@ka.com",account = 12458 where indexNO = 1236;
delete from data where indexNO = 1214;
select * from data where account > 5000;