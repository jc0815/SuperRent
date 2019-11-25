/* LOAD CUSTOMER */
INSERT INTO CUSTOMER VALUES ('andy', 'davie', '1', 6014344444);
INSERT INTO CUSTOMER VALUES ('bob', 'robson', '2', 6027298834);
INSERT INTO CUSTOMER VALUES ('chrom', 'burrard', '3', 6032276654);
INSERT INTO CUSTOMER VALUES ('deonne', 'comox', '4', 669098722);
INSERT INTO CUSTOMER VALUES ('james', 'main', '500', 66612323);
INSERT INTO CUSTOMER VALUES ('yelp', 'jump street', '62', 72731231);
INSERT INTO CUSTOMER VALUES ('lucina', 'nelson', '170', 266123134);
/* LOAD VEHICLETYPE */
INSERT INTO VEHICLETYPE VALUES ('Economy', 'ac', 500, 500, 100, 20, 5, 1, 1);
INSERT INTO VEHICLETYPE VALUES ('Compact', 'seatbelt', 500, 500, 100, 20, 5, 1, 1);
INSERT INTO VEHICLETYPE VALUES ('Mid-size', 'removable roof', 1000, 250, 50, 10, 2, 2, 2);
INSERT INTO VEHICLETYPE VALUES ('Standard', 'child seat', 700, 150, 30, 7, 1, 1, 2);
INSERT INTO VEHICLETYPE VALUES ('Full-size', 'toilet', 800, 200, 35, 10, 2, 3, 3);
INSERT INTO VEHICLETYPE VALUES ('SUV', 'seatbelt', 150, 200, 100, 10, 2, 3, 3);
INSERT INTO VEHICLETYPE VALUES ('Truck', 'ski', 700, 200, 35, 10, 2, 3, 3);
/* LOAD VEHICLE */
INSERT INTO VEHICLE VALUES ('ABC1', 'no', 1, 'Toyota', '4Runner', 'Green', 20, 'SUV', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC2', 'yes', 2, 'Ferrari', 'sports', 'Green', 20, 'Compact', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC3', 'yes', 3, 'Mercedes', 'speedy', 'Green', 20, 'Standard', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC4', 'yes', 4, 'Nissan','family', 'Green', 20, 'Full-size', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC5', 'yes', 5, 'Toyota', 'offroad', 'Green', 20, 'Economy', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC6', 'yes', 6, 'Ford', '4Runner', 'Green', 20, 'Compact', 'Downtown', 'Toronto');
INSERT INTO VEHICLE VALUES ('ABC7', 'yes', 7, 'Toyota', 'lexus', 'Green', 20,  'Truck', 'Downtown', 'Toronto');
INSERT INTO VEHICLE VALUES ('ABC8', 'no', 8, 'Toyota', '4Runner', 'Green', 20, 'SUV', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC9', 'yes', 9, 'Toyota', '4Runner', 'Green', 20, 'SUV', 'Airport', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC10', 'yes',10, 'Ferrari', 'sports', 'Green', 20, 'Compact', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC11', 'no', 11, 'Mercedes', 'speedy', 'Green', 20, 'Standard', 'Airport', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC12', 'no', 12, 'Nissan','family', 'Green', 20, 'Full-size', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC13', 'yes', 13, 'Toyota', 'offroad', 'Green', 20, 'Economy', 'Downtown', 'Vancouver');
INSERT INTO VEHICLE VALUES ('ABC14', 'yes', 14, 'Ford', '4Runner', 'Green', 20, 'Compact', 'Airport', 'Toronto');
INSERT INTO VEHICLE VALUES ('ABC15', 'yes', 15, 'Toyota', 'lexus', 'Green', 20, 'Truck', 'Downtown', 'Toronto');
INSERT INTO VEHICLE VALUES ('ABC16', 'yes', 16, 'Toyota', '4Runner', 'Green', 20, 'SUV', 'Downtown', 'Vancouver');
/* LOAD RESERVATION */
INSERT INTO RESERVATION VALUES (1, 'SUV', '1', '4-JUN-19', 0, '7-JUN-19', 0);
INSERT INTO RESERVATION VALUES (2, 'SUV', '3', '17-JUN-19', 0, '23-JUN-19', 0);
INSERT INTO RESERVATION VALUES (3, 'SUV', '1', '4-AUG-19', 0, '7-JAN-20', 0);
INSERT INTO RESERVATION VALUES (4, 'SUV', '1', '4-AUG-19', 0, '7-JAN-20', 0);
INSERT INTO RESERVATION VALUES (5, 'Full-size', '500', '19-AUG-19', 0, '7-OCT-20', 0);
INSERT INTO RESERVATION VALUES (6, 'Full-size', '62', '19-AUG-19', 0, '7-OCT-20', 0);
/* LOAD RENTAL */
INSERT INTO RENTAL VALUES (1, 'SUV', 8, '1', '4-JUN-19', 0, '7-JUN-19', 0, 20, 'andy', '84973924', '17-FEB-22', 4);
INSERT INTO RENTAL VALUES (2, 'SUV', 1, '1', '4-JUN-19', 0, '7-JUN-19', 0, 20, 'brad', '1234567', '17-FEB-22', 1);
INSERT INTO RENTAL VALUES (3, 'Truck', 15, '500', '4-JUN-19', 0, '7-JUN-19', 0, 20, 'james', '12367', '17-FEB-22', 6);
INSERT INTO RENTAL VALUES (4, 'Full-size', 12, '62', '4-JUN-19', 0, '7-JUN-19', 0, 20, 'chad', '4567', '17-FEB-22', 5);
INSERT INTO RENTAL VALUES (5, 'Full-size', 11, '62', '23-NOV-19', 0, '28-NOV-19', 0, 20, 'chad', '4567', '17-FEB-22', 5);
/* LOAD RETURNCAR */
INSERT INTO RETURNCAR VALUES(1, '7-JUN-19', 0, 30, 'yes', 25);
INSERT INTO RETURNCAR VALUES(4, '7-JUN-20', 0, 30, 'yes', 50);
INSERT INTO RETURNCAR VALUES(3, '23-NOV-19', 0 , 30, 'yes', 50);