DROP DATABASE IF EXISTS medichelper;
CREATE DATABASE IF NOT EXISTS medichelper;
CREATE TABLE Doctor (Name varchar(30) NOT NULL, d_id int(10) NOT NULL AUTO_INCREMENT, Category varchar(30) NOT NULL, Shedule date NOT NULL, Fee int(5) NOT NULL, location varchar(100) NOT NULL, Categoryc_id int(10), password int(11) NOT NULL, username int(10) NOT NULL, PRIMARY KEY (d_id));
CREATE TABLE Patient (Name varchar(30) NOT NULL, p_id int(10) NOT NULL AUTO_INCREMENT, Age int(10) NOT NULL,Contact int(14) NOT NULL, Weight  int(10) NOT NULL,  Blood_Group varchar(5) NOT NULL, username varchar(15) NOT NULL UNIQUE, password varchar(16) NOT NULL, bookingb_id int(10) NOT NULL, PRIMARY KEY (p_id));
CREATE TABLE Category (c_id int(10) NOT NULL AUTO_INCREMENT, c_name varchar(15) NOT NULL, PRIMARY KEY (c_id));
CREATE TABLE booking (b_id int(10) NOT NULL AUTO_INCREMENT, b_date datetime NOT NULL, Patientp_id int(10) NOT NULL, Doctord_id int(10) NOT NULL, s_no int(11) NOT NULL, Doctord_id2 int(10) NOT NULL, PRIMARY KEY (b_id));
CREATE TABLE payment (p_id int(11) NOT NULL AUTO_INCREMENT, `date` datetime NOT NULL, ammount int(10) DEFAULT 500 NOT NULL, Patientp_id int(10) NOT NULL, bookingb_id int(10) NOT NULL, PRIMARY KEY (p_id));
CREATE TABLE medicine (m_id int(11) NOT NULL AUTO_INCREMENT, m_name varchar(25) NOT NULL, napaid int(10) NOT NULL, PRIMARY KEY (m_id));
CREATE TABLE prescription (pr_id int(11) NOT NULL AUTO_INCREMENT, `date` datetime NOT NULL, age int(11) NOT NULL, medicinem_id int(11) NOT NULL, Doctord_id int(10) NOT NULL, Patientp_id int(10) NOT NULL, PRIMARY KEY (pr_id));


ALTER TABLE Doctor ADD INDEX FKDoctor419668 (Categoryc_id), ADD CONSTRAINT FKDoctor419668 FOREIGN KEY (Categoryc_id) REFERENCES Category (c_id);
ALTER TABLE booking ADD INDEX FKbooking281232 (Patientp_id), ADD CONSTRAINT FKbooking281232 FOREIGN KEY (Patientp_id) REFERENCES Patient (p_id);
ALTER TABLE payment ADD INDEX FKpayment649590 (Patientp_id), ADD CONSTRAINT FKpayment649590 FOREIGN KEY (Patientp_id) REFERENCES Patient (p_id);

ALTER TABLE payment ADD INDEX FKpayment606228 (bookingb_id), ADD CONSTRAINT FKpayment606228 FOREIGN KEY (bookingb_id) REFERENCES booking (b_id);
ALTER TABLE booking ADD INDEX FKbooking220597 (Doctord_id2), ADD CONSTRAINT FKbooking220597 FOREIGN KEY (Doctord_id2) REFERENCES Doctor (d_id);
