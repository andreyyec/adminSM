CREATE TABLE adminsm_policies(
id SERIAL PRIMARY KEY,
namePolicy VARCHAR(40) NOT NULL,
numberPolicy INTEGER NOT NULL UNIQUE,
employerIDType CHAR(1),
employerID VARCHAR(25) NOT NULL UNIQUE,
employerName VARCHAR(150),
employerPhone INTEGER NOT NULL,
employerFax INTEGER,
employerMail VARCHAR(80) NOT NULL,
employerAddress VARCHAR(300) NOT NULL,
active CHAR(1) NOT NULL
);

CREATE TABLE adminsm_employees(
id SERIAL PRIMARY KEY,
name VARCHAR(40) NOT NULL,
lastname1 VARCHAR(40) NOT NULL,
lastname2 VARCHAR(40) NOT NULL,
phonenumber INTEGER NOT NULL,
address VARCHAR(200),
idtype VARCHAR(60) NOT NULL,
idnumber VARCHAR(15) UNIQUE NOT NULL,
insurancenumber VARCHAR (25) NOT NULL,
ocupnumber INTEGER NOT NULL,
revenue INTEGER NOT NULL,
daysamonth INTEGER NOT NULL,
hoursamonth INTEGER NOT NULL,
ocupation VARCHAR(80) NOT NULL,
policy INT NOT NULL REFERENCES adminsm_policies(id), 
workday VARCHAR(80) NOT NULL,
active CHAR(1) NOT NULL
);