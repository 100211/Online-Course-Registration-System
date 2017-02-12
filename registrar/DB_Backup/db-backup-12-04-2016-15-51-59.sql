DROP TABLE IF EXISTS add_drop;

CREATE TABLE `add_drop` (
  `student_no` varchar(111) NOT NULL,
  `code` varchar(111) NOT NULL,
  `title` varchar(111) NOT NULL,
  `unit` varchar(111) NOT NULL,
  `year` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `session` varchar(111) NOT NULL,
  `a_d` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS course;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("7","CSE","Computer Science And Engineering");


DROP TABLE IF EXISTS date;

CREATE TABLE `date` (
  `to` varchar(111) NOT NULL,
  `from` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO date VALUES("2016-12-06","2016-11-28");


DROP TABLE IF EXISTS date_ad;

CREATE TABLE `date_ad` (
  `to` varchar(111) NOT NULL,
  `from` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO date_ad VALUES("2016-10-16","2016-10-10");


DROP TABLE IF EXISTS fees;

CREATE TABLE `fees` (
  `admission_fee` varchar(111) NOT NULL,
  `fee_book` varchar(111) NOT NULL,
  `security_general` varchar(111) NOT NULL,
  `transport` varchar(111) NOT NULL,
  `per_course_registration_fee` varchar(111) NOT NULL,
  `retake_course_fee` varchar(111) NOT NULL,
  `re_retake` varchar(111) NOT NULL,
  `bncc` varchar(111) NOT NULL,
  `library` varchar(111) NOT NULL,
  `health_checkup` varchar(111) NOT NULL,
  `health_card` varchar(111) NOT NULL,
  `cultural_fee` varchar(111) NOT NULL,
  `religious_fee` varchar(111) NOT NULL,
  `per_exam_fee` varchar(111) NOT NULL,
  `grade_sheet` varchar(111) NOT NULL,
  `provissional_certificate` varchar(111) NOT NULL,
  `main_certificate` varchar(111) NOT NULL,
  `transcript` varchar(111) NOT NULL,
  `security_library` varchar(111) NOT NULL,
  `id_card` varchar(111) NOT NULL,
  `fines_library` varchar(111) NOT NULL,
  `fine_exam_control` varchar(111) NOT NULL,
  `mc_mi_certificate` varchar(111) NOT NULL,
  `f_phil_phd_fee` varchar(111) NOT NULL,
  `correction_fee` varchar(111) NOT NULL,
  `student_welfare` varchar(111) NOT NULL,
  `sports` varchar(111) NOT NULL,
  `publishing` varchar(111) NOT NULL,
  `others` varchar(111) NOT NULL,
  `total` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO fees VALUES("500","9","20","50","9","","","100","50","250","120","120",""," ","5","","50","10","25","50","","","","","25","","100","","","");


DROP TABLE IF EXISTS pre_registration;

CREATE TABLE `pre_registration` (
  `student_no` varchar(111) NOT NULL,
  `year` varchar(111) NOT NULL,
  `term` varchar(111) NOT NULL,
  `session` varchar(111) NOT NULL,
  `subject_id` varchar(111) NOT NULL,
  `course_title` varchar(111) NOT NULL,
  `credit_hours` varchar(111) NOT NULL,
  `remarks` varchar(111) NOT NULL,
  `reg_id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

INSERT INTO pre_registration VALUES("130209","3","1","2014-15","ME 1151","Mechanics and Heat Engineering","3","Re-Retake","41");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","PHY 1153","Physics I","3","Re-Retake","42");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","ECON 2151","Economics","2","Retake","43");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","CSE 3100","Technical Writing and Presentation","0.75","","44");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","CSE 3101","Database Systems","3","","45");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","CSE 3102","Database Systems Project/Fieldwork","1.5","","46");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","CSE 3105","Numerical Methods","3","","47");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","CSE 3106","Numerical Methods Laboratory","0.75","","48");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","CSE 3112","Microprocessors and Microcontrollers Laboratory/Project","0.75","","49");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","ECE 3151","Digital Electronics","2","","50");
INSERT INTO pre_registration VALUES("130209","3","1","2014-15","BA 3151","Accounting","3","","51");


DROP TABLE IF EXISTS pre_req;

CREATE TABLE `pre_req` (
  `select_sub` varchar(255) NOT NULL,
  `req_sub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pre_req VALUES("12","2");
INSERT INTO pre_req VALUES("12","3");
INSERT INTO pre_req VALUES("23","2");
INSERT INTO pre_req VALUES("23","3");
INSERT INTO pre_req VALUES("23","12");
INSERT INTO pre_req VALUES("23","14");
INSERT INTO pre_req VALUES("27","2");
INSERT INTO pre_req VALUES("27","3");
INSERT INTO pre_req VALUES("27","12");
INSERT INTO pre_req VALUES("27","14");
INSERT INTO pre_req VALUES("33","2");
INSERT INTO pre_req VALUES("33","3");
INSERT INTO pre_req VALUES("33","12");
INSERT INTO pre_req VALUES("33","14");
INSERT INTO pre_req VALUES("32","14");
INSERT INTO pre_req VALUES("32","27");
INSERT INTO pre_req VALUES("51","14");
INSERT INTO pre_req VALUES("51","27");
INSERT INTO pre_req VALUES("51","32");
INSERT INTO pre_req VALUES("52","2");
INSERT INTO pre_req VALUES("52","3");
INSERT INTO pre_req VALUES("52","12");
INSERT INTO pre_req VALUES("52","14");
INSERT INTO pre_req VALUES("54","2");
INSERT INTO pre_req VALUES("54","3");
INSERT INTO pre_req VALUES("54","12");
INSERT INTO pre_req VALUES("54","14");
INSERT INTO pre_req VALUES("58","2");
INSERT INTO pre_req VALUES("58","3");
INSERT INTO pre_req VALUES("58","12");
INSERT INTO pre_req VALUES("58","14");
INSERT INTO pre_req VALUES("72","2");
INSERT INTO pre_req VALUES("72","3");
INSERT INTO pre_req VALUES("72","12");
INSERT INTO pre_req VALUES("72","14");
INSERT INTO pre_req VALUES("74","30");
INSERT INTO pre_req VALUES("74","39");
INSERT INTO pre_req VALUES("76","25");
INSERT INTO pre_req VALUES("76","26");
INSERT INTO pre_req VALUES("72","33");
INSERT INTO pre_req VALUES("72","34");
INSERT INTO pre_req VALUES("33","23");
INSERT INTO pre_req VALUES("33","24");
INSERT INTO pre_req VALUES("76","15");
INSERT INTO pre_req VALUES("71","62");
INSERT INTO pre_req VALUES("42","2");
INSERT INTO pre_req VALUES("42","3");
INSERT INTO pre_req VALUES("42","12");
INSERT INTO pre_req VALUES("42","14");
INSERT INTO pre_req VALUES("44","2");
INSERT INTO pre_req VALUES("44","3");
INSERT INTO pre_req VALUES("44","12");
INSERT INTO pre_req VALUES("44","14");
INSERT INTO pre_req VALUES("46","35");
INSERT INTO pre_req VALUES("46","36");
INSERT INTO pre_req VALUES("63","2");
INSERT INTO pre_req VALUES("63","3");
INSERT INTO pre_req VALUES("63","12");
INSERT INTO pre_req VALUES("63","14");
INSERT INTO pre_req VALUES("67","2");
INSERT INTO pre_req VALUES("67","3");
INSERT INTO pre_req VALUES("67","12");
INSERT INTO pre_req VALUES("67","14");
INSERT INTO pre_req VALUES("62","14");
INSERT INTO pre_req VALUES("62","27");
INSERT INTO pre_req VALUES("62","32");
INSERT INTO pre_req VALUES("62","43");


DROP TABLE IF EXISTS registration;

CREATE TABLE `registration` (
  `student_no` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `subject_id` varchar(11) NOT NULL,
  `course_title` varchar(111) NOT NULL,
  `credit_hours` varchar(111) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `reg_id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reg_id`),
  FULLTEXT KEY `course_title` (`course_title`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

INSERT INTO registration VALUES("100211","1","1","2015-16","PHY 1154","Physics Laboratory I","0.75","","1");
INSERT INTO registration VALUES("100211","1","1","2015-16","CSE 1101","Computer Fundamentals","2","","2");
INSERT INTO registration VALUES("100211","1","1","2015-16","CSE 1103","Structured Programming","3","","3");
INSERT INTO registration VALUES("100211","1","1","2015-16","CSE 1104","Structured Programming Laboratory","1.5","","4");
INSERT INTO registration VALUES("100211","1","1","2015-16","ME 1151","Mechanics and Heat Engineering","3","","5");
INSERT INTO registration VALUES("100211","1","1","2015-16","MATH 1153","Calculus","3","","6");
INSERT INTO registration VALUES("100211","1","1","2015-16","PHY 1153","Physics I","3","","7");
INSERT INTO registration VALUES("100211","1","1","2015-16","CHEM 1151","Chemistry","3","","8");
INSERT INTO registration VALUES("100211","1","1","2015-16","CHEM 1152","Chemistry Laboratory","0.75","","9");
INSERT INTO registration VALUES("100211","1","1","2015-16","ENG 1151","English","2","","10");
INSERT INTO registration VALUES("130209","1","1","2012-13","CSE 1101","Computer Fundamentals","2","","11");
INSERT INTO registration VALUES("130209","1","1","2012-13","CSE 1103","Structured Programming","3","","12");
INSERT INTO registration VALUES("130209","1","1","2012-13","CSE 1104","Structured Programming Laboratory","1.5","","13");
INSERT INTO registration VALUES("130209","1","1","2012-13","ME 1151","Mechanics and Heat Engineering","3","","14");
INSERT INTO registration VALUES("130209","1","1","2012-13","MATH 1153","Calculus","3","","15");
INSERT INTO registration VALUES("130209","1","1","2012-13","PHY 1153","Physics I","3","","16");
INSERT INTO registration VALUES("130209","1","1","2012-13","PHY 1154","Physics Laboratory I","0.75","","17");
INSERT INTO registration VALUES("130209","1","1","2012-13","CHEM 1151","Chemistry","3","","18");
INSERT INTO registration VALUES("130209","1","1","2012-13","CHEM 1152","Chemistry Laboratory","0.75","","19");
INSERT INTO registration VALUES("130209","1","1","2012-13","ENG 1151","English","2","","20");
INSERT INTO registration VALUES("130209","1","2","2012-13","CSE 1201","Object Oriented Programming","3","","26");
INSERT INTO registration VALUES("130209","1","2","2012-13","CSE 1202","Object Oriented Programming Laboratory","1.5","","27");
INSERT INTO registration VALUES("130209","1","2","2012-13","CSE 1203","Discrete Mathematics","3","","28");
INSERT INTO registration VALUES("130209","1","2","2012-13","ECE 1251","Electrical Circuits","3","","29");
INSERT INTO registration VALUES("130209","1","2","2012-13","ECE 1252","Electrical Circuits Laboratory","0.75","","30");
INSERT INTO registration VALUES("130209","1","2","2012-13","ME 1252","Engineering Drawing and CAD Project","0.75","","31");
INSERT INTO registration VALUES("130209","1","2","2012-13","MATH 1253","Geometry and Differential Equations","3","","32");
INSERT INTO registration VALUES("130209","1","2","2012-13","PHY 1253","Physics II","3","","33");
INSERT INTO registration VALUES("130209","1","2","2012-13","PHY 1254","Physics Laboratory II","0.75","","34");
INSERT INTO registration VALUES("130209","1","2","2012-13","HSS 1253","Government and Sociology","2","","35");
INSERT INTO registration VALUES("130209","2","1","2013-14","ME 1151","Mechanics and Heat Engineering","3","Retake","41");
INSERT INTO registration VALUES("130209","2","1","2013-14","PHY 1153","Physics I","3","Retake","42");
INSERT INTO registration VALUES("130209","2","1","2013-14","CSE 2101","Data Structure","3","","43");
INSERT INTO registration VALUES("130209","2","1","2013-14","CSE 2102","Data Structure Laboratory","1.5","","44");
INSERT INTO registration VALUES("130209","2","1","2013-14","CSE 2111","Digital Logic Design","3","","45");
INSERT INTO registration VALUES("130209","2","1","2013-14","CSE 2112","Digital Logic Design Laboratory","1.5","","46");
INSERT INTO registration VALUES("130209","2","1","2013-14","CSE 2114","Advanced Programming Laboratory","1.5","","47");
INSERT INTO registration VALUES("130209","2","1","2013-14","ECE 2151","Electronic Devices and Circuits","3","","48");
INSERT INTO registration VALUES("130209","2","1","2013-14","ECE 2152","Electronic Devices and Circuits Laboratory","1.5","","49");
INSERT INTO registration VALUES("130209","2","1","2013-14","ECON 2151","Economics","2","","50");
INSERT INTO registration VALUES("130209","2","2","2013-14","CSE 1203","Discrete Mathematics","3","Retake","56");
INSERT INTO registration VALUES("130209","2","2","2013-14","ECE 1251","Electrical Circuits","3","Retake","57");
INSERT INTO registration VALUES("130209","2","2","2013-14","CSE 2200","Software Development Project","1.5","","58");
INSERT INTO registration VALUES("130209","2","2","2013-14","CSE 2201","Algorithms","3","","59");
INSERT INTO registration VALUES("130209","2","2","2013-14","CSE 2202","Algorithms Laboratory","1.5","","60");
INSERT INTO registration VALUES("130209","2","2","2013-14","CSE 2203","Computer Architecture","3","","61");
INSERT INTO registration VALUES("130209","2","2","2013-14","CSE 2208","Assembly Language Laboratory","1.5","","62");
INSERT INTO registration VALUES("130209","2","2","2013-14","ECE 2251","Electrical Drives and Instrumentation","3","","63");
INSERT INTO registration VALUES("130209","2","2","2013-14","ECE 2252","Electrical Drives and Instrumentation Laboratory","0.75","","64");
INSERT INTO registration VALUES("130209","2","2","2013-14","MATH 2253","Statistics and Complex Variable","3","","65");
INSERT INTO registration VALUES("140203","1","1","2013-14","CSE 1101","Computer Fundamentals","2","","66");
INSERT INTO registration VALUES("140203","1","1","2013-14","CSE 1103","Structured Programming","3","","67");
INSERT INTO registration VALUES("140203","1","1","2013-14","CSE 1104","Structured Programming Laboratory","1.5","","68");
INSERT INTO registration VALUES("140203","1","1","2013-14","CHEM 1151","Chemistry","3","","69");
INSERT INTO registration VALUES("140203","1","1","2013-14","CHEM 1152","Chemistry Laboratory","0.75","","70");
INSERT INTO registration VALUES("140203","1","1","2013-14","PHY 1153","Physics I","3","","71");
INSERT INTO registration VALUES("140203","1","1","2013-14","PHY 1154","Physics Laboratory I","0.75","","72");
INSERT INTO registration VALUES("140203","1","1","2013-14","ME 1151","Mechanics and Heat Engineering","3","","73");
INSERT INTO registration VALUES("140203","1","1","2013-14","MATH 1153","Calculus","3","","74");
INSERT INTO registration VALUES("140203","1","1","2013-14","ENG 1151","English","2","","75");
INSERT INTO registration VALUES("140212","1","1","2013-14","CSE 1101","Computer Fundamentals","2","","81");
INSERT INTO registration VALUES("140212","1","1","2013-14","CSE 1103","Structured Programming","3","","82");
INSERT INTO registration VALUES("140212","1","1","2013-14","CSE 1104","Structured Programming Laboratory","1.5","","83");
INSERT INTO registration VALUES("140212","1","1","2013-14","ME 1151","Mechanics and Heat Engineering","3","","84");
INSERT INTO registration VALUES("140212","1","1","2013-14","MATH 1153","Calculus","3","","85");
INSERT INTO registration VALUES("140212","1","1","2013-14","PHY 1153","Physics I","3","","86");
INSERT INTO registration VALUES("140212","1","1","2013-14","PHY 1154","Physics Laboratory I","0.75","","87");
INSERT INTO registration VALUES("140212","1","1","2013-14","CHEM 1151","Chemistry","3","","88");
INSERT INTO registration VALUES("140212","1","1","2013-14","CHEM 1152","Chemistry Laboratory","0.75","","89");
INSERT INTO registration VALUES("140212","1","1","2013-14","ENG 1151","English","2","","90");


DROP TABLE IF EXISTS result;

CREATE TABLE `result` (
  `student_id` int(111) NOT NULL,
  `sub_code` varchar(111) NOT NULL,
  `unit` varchar(111) NOT NULL,
  `Letter_Grade` varchar(100) NOT NULL,
  `Grade_Point` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `session` varchar(30) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `grade_id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO result VALUES("130209","CSE 1101"," 2"," A","3.75","1","1","2012-13","","11");
INSERT INTO result VALUES("130209","CSE 1103"," 3"," C","2.25","1","1","2012-13","","12");
INSERT INTO result VALUES("130209","CSE 1104"," 1.5"," D","2.00","1","1","2012-13","","13");
INSERT INTO result VALUES("130209","ME 1151"," 3"," F","0","1","1","2012-13","","14");
INSERT INTO result VALUES("130209","MATH 1153"," 3"," A","3.75","1","1","2012-13","","15");
INSERT INTO result VALUES("130209","PHY 1153"," 3"," F","0","1","1","2012-13","","16");
INSERT INTO result VALUES("130209","PHY 1154"," 0.75"," B-","2.75","1","1","2012-13","","17");
INSERT INTO result VALUES("130209","CHEM 1151"," 3"," B","3.00","1","1","2012-13","","18");
INSERT INTO result VALUES("130209","CHEM 1152"," 0.75"," A-","3.50","1","1","2012-13","","19");
INSERT INTO result VALUES("130209","ENG 1151"," 2"," A+","4","1","1","2012-13","","20");
INSERT INTO result VALUES("130209","CSE 1201"," 3"," A+","4","1","2","2012-13","","21");
INSERT INTO result VALUES("130209","CSE 1202"," 1.5"," B-","2.75","1","2","2012-13","","22");
INSERT INTO result VALUES("130209","CSE 1203"," 3"," F","0","1","2","2012-13","","23");
INSERT INTO result VALUES("130209","ECE 1251"," 3"," F","0","1","2","2012-13","","24");
INSERT INTO result VALUES("130209","ECE 1252"," 0.75"," A","3.75","1","2","2012-13","","25");
INSERT INTO result VALUES("130209","ME 1252"," 0.75"," A+","4","1","2","2012-13","","26");
INSERT INTO result VALUES("130209","MATH 1253"," 3"," B","3.00","1","2","2012-13","","27");
INSERT INTO result VALUES("130209","PHY 1253"," 3"," B","3.00","1","2","2012-13","","28");
INSERT INTO result VALUES("130209","PHY 1254"," 0.75"," A-","3.50","1","2","2012-13","","29");
INSERT INTO result VALUES("130209","HSS 1253"," 2"," A+","4","1","2","2012-13","","30");
INSERT INTO result VALUES("130209","ME 1151"," 3"," F","0","2","1","2013-14","","31");
INSERT INTO result VALUES("130209","PHY 1153"," 3"," F","0","2","1","2013-14","","32");
INSERT INTO result VALUES("130209","CSE 2101"," 3"," B","3.00","2","1","2013-14","","33");
INSERT INTO result VALUES("130209","CSE 2102"," 1.5"," A-","3.50","2","1","2013-14","","34");
INSERT INTO result VALUES("130209","CSE 2111"," 3"," A-","3.50","2","1","2013-14","","35");
INSERT INTO result VALUES("130209","CSE 2112"," 1.5"," A","3.75","2","1","2013-14","","36");
INSERT INTO result VALUES("130209","CSE 2114"," 1.5"," A","3.75","2","1","2013-14","","37");
INSERT INTO result VALUES("130209","ECE 2151"," 3"," A","3.75","2","1","2013-14","","38");
INSERT INTO result VALUES("130209","ECE 2152"," 1.5"," A+","4","2","1","2013-14","","39");
INSERT INTO result VALUES("130209","ECON 2151"," 2"," F","0","2","1","2013-14","","40");
INSERT INTO result VALUES("130209","CSE 1203"," 3"," C+","2.50","2","2","2013-14","","41");
INSERT INTO result VALUES("130209","ECE 1251"," 3"," F","0","2","2","2013-14","","42");
INSERT INTO result VALUES("130209","CSE 2200"," 1.5"," F","0","2","2","2013-14","","43");
INSERT INTO result VALUES("130209","CSE 2201"," 3"," F","0","2","2","2013-14","","44");
INSERT INTO result VALUES("130209","CSE 2202"," 1.5"," F","0","2","2","2013-14","","45");
INSERT INTO result VALUES("130209","CSE 2203"," 3"," F","0","2","2","2013-14","","46");
INSERT INTO result VALUES("130209","CSE 2208"," 1.5"," A","3.75","2","2","2013-14","","47");
INSERT INTO result VALUES("130209","ECE 2251"," 3"," B-","2.75","2","2","2013-14","","48");
INSERT INTO result VALUES("130209","ECE 2252"," 0.75"," A-","3.50","2","2","2013-14","","49");
INSERT INTO result VALUES("130209","MATH 2253"," 3"," B-","2.75","2","2","2013-14","","50");
INSERT INTO result VALUES("140203","CSE 1101"," 2"," A","3.75","1","1","2013-14","","51");
INSERT INTO result VALUES("140203","CSE 1103"," 3"," C","2.25","1","1","2013-14","","52");
INSERT INTO result VALUES("140203","CSE 1104"," 1.5"," F","0","1","1","2013-14","","53");
INSERT INTO result VALUES("140203","CHEM 1151"," 3"," F","0","1","1","2013-14","","54");
INSERT INTO result VALUES("140203","CHEM 1152"," 0.75"," A-","3.50","1","1","2013-14","","55");
INSERT INTO result VALUES("140203","PHY 1153"," 3"," F","0","1","1","2013-14","","56");
INSERT INTO result VALUES("140203","PHY 1154"," 0.75"," B-","2.75","1","1","2013-14","","57");
INSERT INTO result VALUES("140203","ME 1151"," 3"," F","0","1","1","2013-14","","58");
INSERT INTO result VALUES("140203","MATH 1153"," 3"," F","0","1","1","2013-14","","59");
INSERT INTO result VALUES("140203","ENG 1151"," 2"," A+","4","1","1","2013-14","","60");


DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `mail_id` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  `reg_status` varchar(111) NOT NULL,
  `reg_stat` varchar(111) NOT NULL,
  `a_a` varchar(111) NOT NULL,
  `a_d` varchar(111) NOT NULL,
  `fees` varchar(111) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1","Fatema Tuz ","Zahra Tasmia","123","Female","CSE","Daulatpur,Khulna","01955802039","touhid190066@yahoo.com","upload/14725721_1326762300696659_2517263450717352423_n.jpg","120201","active","1","1","","start","start","","","");
INSERT INTO students VALUES("4","Towfiq","Rial","123","Male","CSE","Norail,Khulna","01957802039","tohidononto@gmail.com","upload/10696396_838487366210373_878331784047898669_n.jpg","120202","active","1","1","","start","start","","","");
INSERT INTO students VALUES("5","Sk","Arafat","123","Male","CSE","Paigacha,Khulna","01672997446","arafat123@gmail.com","upload/13094376_1276509672376817_5858236354542976988_n.jpg","100211","active","1","1","Regular","start","start","","","");
INSERT INTO students VALUES("6","Mehedi","Hasan","123","Male","CSE","Jhinaida,Khulna","01711190066","Hasanmehedi@gmail.com","upload/13177736_557214421128202_5990629412996363762_n.jpg","120204","active","1","1","Regular","start","","","","");
INSERT INTO students VALUES("7","Md Habibur ","Rahman","123","Male","CSE","Khulna","01922386832","habiburcse@gmail.com","upload/14355666_1110757162350093_4583521068178471515_n.jpg","120205","active","1","1","","start","start","","","");
INSERT INTO students VALUES("8","Himadri","Mondal","123","Male","CSE","Khulna","01746489195","himadrikucse@gmail.com","upload/14211996_1738128399773098_8673920648887469625_n.jpg","120207","active","1","1","","start","start","","","");
INSERT INTO students VALUES("9","Asim","Das","123","Male","CSE","khulna","01955232339","asimcse12@gmail.com","upload/14079951_130344510755981_3692237177855005148_n.jpg","120210","active","1","1","","start","start","","","");
INSERT INTO students VALUES("10","Md.Tanjil","Ahmed","123","Male","CSE","Khuna","01672997446","Tanjil123@yahoo.com","upload/14.png","120208","active","1","1","","start","start","","","");
INSERT INTO students VALUES("11","Md.Masum","Ahmed","123","Male","CSE","Khulna","01922386832","ahmed.me@yahoo.com","upload/15.png","130209","active","3","1","8","start","start","","","1688.75");
INSERT INTO students VALUES("12","Md.Harun","Ali","123","Male","CSE","Jessore","01955580203","real.oy@gmail.com","upload/17.png","140203","active","1","1","10","end","start","","","1682");
INSERT INTO students VALUES("13","Asok","Pal","123","Male","CSE","Jessore","01558458476","asok.glp@yahoo.com","upload/31.png","140212","active","1","1","10","end","start","","","1682");
INSERT INTO students VALUES("14","Tammana","Rahman","123","Female","CSE","Dhaka","01995746858","taman1234y@gmail.com","upload/13.png","120213","active","1","1","","start","start","","","");
INSERT INTO students VALUES("15","Amina","Shekh","123","Female","CSE","Norail,khulna","01823625276","aminawwe@gmail.com","upload/16.png","120214","active","1","1","","start","start","","","");
INSERT INTO students VALUES("16","Jamil","Hawlader","123","Male","CSE","Khulna","01993654542","Jamiltrtr123@gmail.com","upload/45.png","120215","active","1","1","","start","start","","","");
INSERT INTO students VALUES("17","Jesica","Afrin","123","Female","CSE","Khulna","01711127362","jesicca.ko@yahoo.com","upload/13.png","120216","","1","1","","","","","","");
INSERT INTO students VALUES("18","Joy","Mollik","123","Male","CSE","Khulna","01955580203","joy2636y@yahoo.com","upload/23.png","120217","","1","1","","","","","","");
INSERT INTO students VALUES("19","Ajoy","Paul","123","Male","CSE","Barisal","01734534623","ajoyt1235tr@gmail.com","upload/19.png","120218","","1","1","","","","","","");
INSERT INTO students VALUES("20","Rafia","Khanom","123","Female","CSE","Satkhira","01973465432","rafia2736@gmail.com","upload/30.png","120219","","1","1","","","","","","");
INSERT INTO students VALUES("21","Sumi","Akter","123","Female","CSE","Jessore","01856456465","sumi.new@gmail.com","upload/46.png","120220","","1","1","","","","","","");
INSERT INTO students VALUES("22","Misu","Rahman","123","Male","CSE","Dhaka","01632632849","misuraman123@yahoo.com","upload/31.png","120206","active","1","1","","start","start","","","");
INSERT INTO students VALUES("23","Asif","Molla","123","Male","CSE","Jessore","01712233497","asif_uk@gmail.com","upload/38.png","120221","","1","1","","","","","","");
INSERT INTO students VALUES("24","Jannati","jahan","123","Female","CSE","Kumilla","01934763556","jannatii_tour@yahoo.com","upload/16.png","120222","","1","1","","","","","","");
INSERT INTO students VALUES("25","Sumaia","Shekh","123","Female","CSE","Khulna","01734534623","re_summaia@yahoo.com","upload/32.png","120223","","1","1","","","","","","");
INSERT INTO students VALUES("26","Sujit","Mondol","123","Male","CSE","Satkhira","01711190066","ripon12300@yahoo.com","upload/15.png","120224","","1","1","","","","","","");
INSERT INTO students VALUES("27","Julfikar","Jaman","123","Male","CSE","Norail","01854678989","Julfikar_mydone@gmail.com","upload/45.png","120225","","1","1","","","","","","");
INSERT INTO students VALUES("28","Munna","Khan","123","Male","CSE","Dhaka","01748736463","munnaa123567@yahoo.com","upload/35.png","120226","","1","1","","","","","","");
INSERT INTO students VALUES("29","Tonmoy","Devnath","123","Male","CSE","Khuna","01936463543","tomoy_1992@gmail.com","upload/38.png","120227","","1","1","","","","","","");
INSERT INTO students VALUES("30","Asma","Khatun","123","Female","CSE","Bagerhat","01732343243","horor1234324@gmail.com","upload/13.png","120228","","1","1","","","","","","");
INSERT INTO students VALUES("31","Anwar","Hossain","123","Male","CSE","Khulan","01823654345","anwar0038@yahoo.com","upload/45.png","120229","","1","1","","","","","","");
INSERT INTO students VALUES("32","Labony","Rahman","123","Female","CSE","Jessore","01963534555","laoni098847@gmail.com","upload/33.png","120230","","1","1","","","","","","");


DROP TABLE IF EXISTS subject;

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `unit` varchar(111) NOT NULL,
  `year` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `pre_requisites` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

INSERT INTO subject VALUES("1","CSE 1101","Computer Fundamentals","2","1","1","","7");
INSERT INTO subject VALUES("2","CSE 1103","Structured Programming","3","1","1","","7");
INSERT INTO subject VALUES("3","CSE 1104","Structured Programming Laboratory","1.5","1","1","","7");
INSERT INTO subject VALUES("5","ME 1151","Mechanics and Heat Engineering","3","1","1","","7");
INSERT INTO subject VALUES("6","MATH 1153","Calculus","3","1","1","","7");
INSERT INTO subject VALUES("7","PHY 1153","Physics I","3","1","1","","7");
INSERT INTO subject VALUES("8","PHY 1154","Physics Laboratory I","0.75","1","1","","7");
INSERT INTO subject VALUES("9","CHEM 1151","Chemistry","3","1","1","","7");
INSERT INTO subject VALUES("10","CHEM 1152","Chemistry Laboratory","0.75","1","1","","7");
INSERT INTO subject VALUES("11","ENG 1151","English","2","1","1","","7");
INSERT INTO subject VALUES("12","CSE 1201","Object Oriented Programming","3","1","2","","7");
INSERT INTO subject VALUES("14","CSE 1202","Object Oriented Programming Laboratory","1.5","1","2","","7");
INSERT INTO subject VALUES("15","CSE 1203","Discrete Mathematics","3","1","2","","7");
INSERT INTO subject VALUES("16","ECE 1251","Electrical Circuits","3","1","2","","7");
INSERT INTO subject VALUES("17","ECE 1252","Electrical Circuits Laboratory","0.75","1","2","","7");
INSERT INTO subject VALUES("18","ME 1252","Engineering Drawing and CAD Project","0.75","1","2","","7");
INSERT INTO subject VALUES("19","MATH 1253","Geometry and Differential Equations","3","1","2","","7");
INSERT INTO subject VALUES("20","PHY 1253","Physics II","3","1","2","","7");
INSERT INTO subject VALUES("21","PHY 1254","Physics Laboratory II","0.75","1","2","","7");
INSERT INTO subject VALUES("22","HSS 1253","Government and Sociology","2","1","2","","7");
INSERT INTO subject VALUES("23","CSE 2101","Data Structure","3","2","1","","7");
INSERT INTO subject VALUES("24","CSE 2102","Data Structure Laboratory","1.5","2","1","","7");
INSERT INTO subject VALUES("25","CSE 2111","Digital Logic Design","3","2","1","","7");
INSERT INTO subject VALUES("26","CSE 2112","Digital Logic Design Laboratory","1.5","2","1","","7");
INSERT INTO subject VALUES("27","CSE 2114","Advanced Programming Laboratory","1.5","2","1","","7");
INSERT INTO subject VALUES("28","ECE 2151","Electronic Devices and Circuits","3","2","1","","7");
INSERT INTO subject VALUES("29","ECE 2152","Electronic Devices and Circuits Laboratory","1.5","2","1","","7");
INSERT INTO subject VALUES("30","MATH 2153","Vector Analysis and Matrix","3","2","1","","7");
INSERT INTO subject VALUES("31","ECON 2151","Economics","2","2","1","","7");
INSERT INTO subject VALUES("32","CSE 2200","Software Development Project","1.5","2","2","","7");
INSERT INTO subject VALUES("33","CSE 2201","Algorithms","3","2","2","","7");
INSERT INTO subject VALUES("34","CSE 2202","Algorithms Laboratory","1.5","2","2","","7");
INSERT INTO subject VALUES("35","CSE 2203","Computer Architecture","3","2","2","","7");
INSERT INTO subject VALUES("36","CSE 2208","Assembly Language Laboratory","1.5","2","2","","7");
INSERT INTO subject VALUES("37","ECE 2251","Electrical Drives and Instrumentation","3","2","2","","7");
INSERT INTO subject VALUES("38","ECE 2252","Electrical Drives and Instrumentation Laboratory","0.75","2","2","","7");
INSERT INTO subject VALUES("39","MATH 2253","Statistics and Complex Variable","3","2","2","","7");
INSERT INTO subject VALUES("40","HSS 2251","Psychology","2","2","2","","7");
INSERT INTO subject VALUES("41","CSE 3100","Technical Writing and Presentation","0.75","3","1","","7");
INSERT INTO subject VALUES("42","CSE 3101","Database Systems","3","3","1","","7");
INSERT INTO subject VALUES("43","CSE 3102","Database Systems Project/Fieldwork","1.5","3","1","","7");
INSERT INTO subject VALUES("44","CSE 3105","Numerical Methods","3","3","1","","7");
INSERT INTO subject VALUES("45","CSE 3106","Numerical Methods Laboratory","0.75","3","1","","7");
INSERT INTO subject VALUES("46","CSE 3111","Microprocessors and Microcontrollers","3","3","1","","7");
INSERT INTO subject VALUES("47","CSE 3112","Microprocessors and Microcontrollers Laboratory/Project","0.75","3","1","","7");
INSERT INTO subject VALUES("48","ECE 3151","Digital Electronics","2","3","1","","7");
INSERT INTO subject VALUES("49","MATH 3153","Mathematical Methods","3","3","1","","7");
INSERT INTO subject VALUES("50","BA 3151","Accounting","3","3","1","","7");
INSERT INTO subject VALUES("51","CSE 3200","Web Programming Project/Fieldwork","1.5","3","2","","7");
INSERT INTO subject VALUES("52","CSE 3201","Operating System and Systems Programming","3","3","2","","7");
INSERT INTO subject VALUES("53","CSE 3202","Operating System and Systems Programming Laboratory/Project","1.5","3","2","","7");
INSERT INTO subject VALUES("54","CSE 3203","Software Engineering and Information System","4","3","2","","7");
INSERT INTO subject VALUES("55","CSE 3204","Software Engineering and Information System Project","1.5","3","2","","7");
INSERT INTO subject VALUES("56","ECE 3251","Data Communication","3","3","2","","7");
INSERT INTO subject VALUES("57","BA 3251","Industrial Management and Law","3","3","2","","7");
INSERT INTO subject VALUES("58","CSE 3221","Simulation and Modeling","3","3","2","","7");
INSERT INTO subject VALUES("59","CSE 3222","Simulation and Modeling Laboratory/Fieldwork","1.5","3","2","","7");
INSERT INTO subject VALUES("62","CSE 4100","Project and Thesis I","3","4","1","","7");
INSERT INTO subject VALUES("63","CSE 4103","Computer Graphics","3","4","1","","7");
INSERT INTO subject VALUES("64","CSE 4104","Computer Graphics Laboratory/Project","0.75","4","1","","7");
INSERT INTO subject VALUES("65","CSE 4105","Compiler Design","3","4","1","","7");
INSERT INTO subject VALUES("66","CSE 4106","Compiler Design Laboratory/Project","0.75","4","1","","7");
INSERT INTO subject VALUES("67","CSE 4111","Computer Networks","3","4","1","","7");
INSERT INTO subject VALUES("68","CSE 4112","Computer Networks Laboratory/Fieldwork","1.5","4","1","","7");
INSERT INTO subject VALUES("69","CSE 4127","Multimedia","2","4","1","","7");
INSERT INTO subject VALUES("70","CSE 4129","Human Computer Interaction","2","4","1","","7");
INSERT INTO subject VALUES("71","CSE 4200","Project and Thesis II","3","4","2","","7");
INSERT INTO subject VALUES("72","CSE 4205","Artificial Intelligence","3","4","2","","7");
INSERT INTO subject VALUES("73","CSE 4206","Artificial Intelligence Laboratory/Project","1.5","4","2","","7");
INSERT INTO subject VALUES("74","CSE 4221","Pattern Recognition","3","4","2","","7");
INSERT INTO subject VALUES("75","CSE 4222","Pattern Recognition Laboratory/Project","0.75","4","2","","7");
INSERT INTO subject VALUES("76","CSE 4231","Digital System Design","3","4","2","","7");
INSERT INTO subject VALUES("77","CSE 4232","Digital System Design Laboratory/Project","0.75","4","2","","7");


DROP TABLE IF EXISTS tbl_uploads;

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tbl_uploads VALUES("1","88547-bscenggcseku-syllabus.pdf","binary/octet-stream","222");
INSERT INTO tbl_uploads VALUES("2","bscenggcseku-syllabus.pdf","binary/octet-stream","222");


DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("2","Registrar1","reg","Registrar1","Registrar","Encoder1");
INSERT INTO users VALUES("5","admin","admin","admin","admin","Registrar");
INSERT INTO users VALUES("8","Registrar2","reg","Registrar2","Registrar","Encoder2");
INSERT INTO users VALUES("9","Registrar3","reg","Registrar3","Registrar","Encoder3");
INSERT INTO users VALUES("10","Registrar4","reg","Registrar4","Registrar","Encoder4");


