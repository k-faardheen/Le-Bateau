CREATE DOMAIN Registration_Domain AS VARCHAR(5)
CHECK (
    VALUE LIKE 'R%'
)

CREATE TABLE REGISTRATION (
        Registration_ID Registration_Domain,
        first_name varchar(30),
        last_name varchar(30),
        role varchar(15),
        email varchar(50),
        gender char CHECK (gender IN('M', 'F')),
        DOB date,
        streetName varchar(50) ,
        city varchar(30),
        postalCode varchar(20),
        country varchar(30),
        PRIMARY KEY (Registration_ID) 
)


--populate to REGISTRATION TABLE
INSERT INTO REGISTRATION (Registration_ID, first_name, last_name, role, email, gender, DOB, streetName, city, postalCode, country)
VALUES ('R001', 'Faardheen', 'Khodabuccus', 'administrator', 'Faardheen@gmail.com', 'M', '2002-01-10', 'Ally lane', 'vallee des pretes', '11220', 'Mauritius'),
       ('R002', 'muntaswir', 'waliyullah', 'administrator', 'Muntaswir@gmail.com', 'M', '2001-06-26', 'cardinal 4', 'pailles', '11221', 'Mauritius');

INSERT INTO REGISTRATION (Registration_ID, first_name, last_name, role, email, gender, DOB, streetName, city, postalCode, country)
VALUES  ('R003', 'Genia', 'Angel', 'contributor', 'gangel1@so-net.ne.jp', 'F', '1996-01-10', 'Carey', 'Kowale Oleckie', '19-420', 'Poland'),
        ('R004', 'Opalina', 'Garfoot', 'contributor', 'ogarfoot2@last.fm', 'F', '1972-12-22', 'Maryland', 'Ash Shaḩānīyah', null, 'Qatar'),
        ('R005', 'Reagen', 'Ridger', 'contributor', 'rridger3@icq.com', 'M', '1917-11-07', 'Commercial', 'Ibirité', '32400-000', 'Brazil'),
        ('R006', 'Puff', 'Tatam', 'contributor', 'ptatam4@apache.org', 'M', '1905-06-20', 'Hoepker', 'Shawnee Mission', '66276', 'United States'),
        ('R007', 'Hugh', 'Marriott', 'contributor', 'hmarriott5@jalbum.net', 'M', '1925-11-13', 'Dexter', 'Hayes', null, 'Jamaica'),
        ('R008', 'Moira', 'Brittoner', 'contributor', 'mbrittoner6@ovh.net', 'F', '1938-02-05', 'Wayridge', 'Longjin', null, 'China'),
        ('R009', 'Cacilia', 'Sibary', 'contributor', 'csibary7@github.com', 'F', '1905-06-11', 'Hovde', 'La Vega', '253618', 'Colombia'),
        ('R010', 'Malena', 'Zannetti', 'contributor', 'mzannetti8@nationalgeographic.com', 'F', '1977-06-06', 'Mccormick', 'Silao', null, 'China'),
        ('R011', 'Minni', 'Chomley', 'contributor', 'mchomley9@wix.com', 'F', '1968-09-01', 'Mayfield', 'Zel’va', null, 'Belarus'),
        ('R012', 'Shawna', 'Smithen', 'contributor', 'ssmithena@jigsy.com', 'F', '2003-09-27', 'Meadow Ridge', 'Qiling', null, 'China'),
        ('R013', 'Suzy', 'Bragginton', 'contributor', 'sbraggintonb@europa.eu', 'F', '1919-01-25', 'Linden', 'Sanjia', null, 'China'),
        ('R014', 'Sarene', 'Craigg', 'contributor', 'scraiggc@cdbaby.com', 'F', '1959-09-09', 'Summerview', 'Dulangan', '5203', 'Philippines'),
        ('R015', 'Josias', 'Aggus', 'contributor', 'jaggusd@yellowbook.com', 'M', '1918-06-11', '2nd', 'Fayzabad', null, 'Afghanistan'),
        ('R016', 'Stevy', 'Dullingham', 'contributor', 'sdullinghame@whitehouse.gov', 'M', '1907-08-17', 'Schurz', 'Būsh', null, 'Egypt'),
        ('R017', 'Ula', 'Andrewartha', 'contributor', 'uandrewarthaf@jigsy.com', 'F', '1903-07-06', 'Autumn Leaf', 'Troitsk', '142191', 'Russia'),
        ('R018', 'Welbie', 'Durrett', 'contributor', 'wdurrettg@ucoz.ru', 'M', '1999-07-22', 'Pawling', 'Huangjiakou', null, 'China');

INSERT INTO REGISTRATION (Registration_ID, first_name, last_name, role, email, gender, DOB, streetName, city, postalCode, country) 
VALUES  ('R201', 'Natalee', 'Alyokhin', 'student', 'nalyokhin5j@globo.com', 'F', '2007-06-01', 'Miller', 'Gashua', null, 'Nigeria'),
        ('R202', 'Hashim', 'Cheine', 'student', 'hcheine5k@cyberchimps.com', 'M', '1977-02-12', 'Carberry', 'Tiantai Chengguanzhen', null, 'China'),
        ('R203', 'Harmon', 'Fahy', 'student', 'hfahy5l@cpanel.net', 'M', '1946-06-24', 'Summit', 'Amalfi', '052848', 'Colombia'),
        ('R204', 'Chantal', 'McCrachen', 'student', 'cmccrachen5m@dell.com', 'F', '1967-01-09', 'Moose', 'Zhongxi', null, 'China'),
        ('R205', 'Orelie', 'Burgoyne', 'student', 'oburgoyne5n@google.nl', 'F', '1993-05-24', 'Morning', 'Ordzhonikidzevskiy', '369228', 'Russia'),
        ('R206', 'Mellisent', 'Fice', 'student', 'mfice5o@123-reg.co.uk', 'F', '1908-07-13', 'Onsgard', 'Albufeira', '8200-005', 'Portugal'),
        ('R207', 'Inesita', 'Matyukon', 'student', 'imatyukon5p@google.ca', 'F', '1945-08-22', 'Ramsey', 'Khagrachhari', '7407', 'Bangladesh'),
        ('R208', 'Shay', 'Poag', 'student', 'spoag5q@geocities.jp', 'M', '1943-02-12', 'Waywood', 'Blerim', null, 'Albania'),
        ('R209', 'Alisander', 'Manhood', 'student', 'amanhood5r@aboutads.info', 'M', '1901-01-25', 'Mitchell', 'Jaen', '23005', 'Spain'),
        ('R210', 'Alberto', 'Shillan', 'student', 'ashillan5s@abc.net.au', 'M', '1902-11-28', 'Old Gate', 'Xieyang', null, 'China'),
        ('R211', 'Kinny', 'Edmands', 'student', 'kedmands5t@biglobe.ne.jp', 'M', '1935-12-20', 'Manitowish', 'Koungheul', null, 'Senegal'),
        ('R212', 'Janenna', 'Townley', 'student', 'jtownley5u@photobucket.com', 'F', '1947-01-19', 'Merrick', 'Uppsala', '751 71', 'Sweden'),
        ('R213', 'Dorice', 'Crellim', 'student', 'dcrellim5v@cam.ac.uk', 'F', '1938-05-27', 'Trailsway', 'Siva', '617248', 'Russia'),
        ('R214', 'Drucie', 'Cherrett', 'student', 'dcherrett5w@usa.gov', 'F', '1940-07-26', 'Novick', 'Glad', '3814', 'Philippines'),
        ('R215', 'Jefferson', 'Glas', 'student', 'jglas5x@dailymail.co.uk', 'M', '1986-01-23', 'Mccormick', 'Znamenka', '393400', 'Russia'),
        ('R216', 'Andree', 'Hollidge', 'student', 'ahollidge5y@histats.com', 'F', '1904-07-07', 'Larry', 'São Félix do Xingu', '68380-000', 'Brazil');