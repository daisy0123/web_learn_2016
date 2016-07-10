    drop database if exists evote1;
    create database evote1;
    use evote1;

    create table votes(
       vid int(4) NOT NULL auto_increment,
       star0 int(4),
       star1 int(4),
       star2 int(4),
       star3 int(4),
       PRIMARY KEY (vid));

    insert into votes (star0,star1,star2,star3) 
                values ('11','21','31','10');
