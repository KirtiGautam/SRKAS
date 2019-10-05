# Faculty Report Generator
(PROJECT FROM SCRATCH)

## Brief and Potential Users- 
- This project can be used by the colleges/universities to generate the faculty report..
- Technologies used: HTML, CSS, PHP, Bootstrap.



## There are currently two pages to login and add faculty to database.

##  Admin can log in and add faculty info.

### Scope : We can view and generate reports.


## PRE-REQUISITE: 

## How to run:

- make sure you already have xampp or wamp installed if you are on windows machine, mamp for mac , and lamp for linux.

- clone this repository to your local machine or just download the zip.

- Extract the zip file on your server.

-  Run the queries of Sql dump(mentioned below) queries.

- Now, we can run the project on server. 

### ID - admin@admin.com
### Password - password


### Sql dump:


- -------Creating faculty database---------
    Create DATABASE Faculty;


- -------Creating Admin Table--------------

    CREATE TABLE admin ( username varchar(20) not null, password varchar(20) not null );

    INSERT INTO admin ( username, password ) VALUES ( 'admin@admin.com', 'password' );

- -------Creating Faculty table----------

    CREATE TABLE `users` (

  `id` int(11) NOT NULL,

  `username` varchar(20) DEFAULT NULL,

  `course` varchar(25) DEFAULT NULL,

  `branch_code` int(11) NOT NULL,

  `designation` varchar(100) NOT NULL,

  `Qualification` varchar(100) NOT NULL,

  'gender'  enum('Male','Female','Prefer not Say') NOT NULL,

  `email` varchar(50) DEFAULT NULL,

  `prefix` enum('Er.','Dr.','Mr.','Ms.','Ar.') NOT NULL,

  `name` varchar(50) NOT NULL,


  `mobile` bigint(20) DEFAULT NULL,

        `appointment_type` enum('','Regular','Contract') NOT NULL,

        `employee_id` int(11) NOT NULL,


   'image'  blob

 

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#### #hackGNE
#### Developed by team #SRKAS

