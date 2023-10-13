create table modules (
                         id int auto_increment not null primary key,
                         name varchar(32) not null,
                         description varchar(256),
                         created_at timestamp default current_timestamp,
                         updated_at timestamp default current_timestamp on update current_timestamp
);

select * from modules;

insert into modules (name, description) value ('SL01', 'PHP en MySQL');
insert into modules (name, description) value ('FD', 'HTML, CSS en JS');
insert into modules (name, description) value ('PV', 'SCRUM, Agile');
