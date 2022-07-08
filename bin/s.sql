CREATE TABLE resume(
	id int,
	email varchar(255),
    name varchar(255),
    phone varchar(20),
    dob date,
    address varchar(255),
    linkedin varchar(255),
    github varchar(255),
    bio varchar(255),
    class10_school_name varchar(255),
    class10_end_date date,
    class12_school_name varchar(255),
    class12_end_date date,    
    college_1_start_date date,
    college_1_name varchar(255),

    work_start_date date,
    work_end_date date,
    work_company varchar(255),
    work_role varchar(255),

    project_date date,
    project_name varchar(255),
    project_outcome varchar(255),
    project_tools_used varchar(255),

    skill varchar(255),
    lang varchar(255),

    certificate_date date,
    certificate_name varchar(255),
    photo varchar(255);
);