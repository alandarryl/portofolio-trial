-- creation  of the database

create database portofolio;

use portofolio;

-- creation of the table projects

create table projects(
    id int auto_increment primary key,
    title varchar(100) not null,
    description text not null,
    project_image varchar(100) not null,
    link varchar(100) not null,
    created_at timestamp default current_timestamp
);

-- creation of table project images 

create table project_images(
    id int auto_increment primary key,
    project_id int not null,
    image_one varchar(100) not null,
    image_two varchar(100) ,
    image_three varchar(100) ,
    created_at timestamp default current_timestamp,
    foreign key (project_id) references projects(id) on delete cascade
);

-- creation of the table skills

create table skills(
    id int auto_increment primary key,
    name varchar(100) not null,
    skill_image varchar(100) not null,
    created_at timestamp default current_timestamp
);

-- creation of the table testimonials

create table testimonials(
    id int auto_increment primary key,
    name varchar(100) not null,
    position varchar(100) not null,
    testimonial text not null,
    testimonial_image varchar(100) not null,
    created_at timestamp default current_timestamp
);

-- creation of the table contact

create table contact(
    id int auto_increment primary key,
    name varchar(100) not null,
    email varchar(100) not null,
    message text not null,
    created_at timestamp default current_timestamp
);


-- creation of table services 

create table services(
    id int auto_increment primary key,
    name varchar(100) not null,
    description text not null,
    service_image varchar(100) not null,
    created_at timestamp default current_timestamp
);









