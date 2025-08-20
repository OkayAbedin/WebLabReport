create table data (
    id integer primary key autoincrement,
    name varchar(100) not null,
    roll varchar(20) not null,
    course varchar(100) not null,
    amount float not null,
    paid float not null,
    due float not null
);