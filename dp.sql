-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-04-04 07:33:26.453

-- tables
-- Table: admin_and_user
CREATE TABLE admin_and_user (
    ID int NOT NULL,
    name varchar(100) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(150) NOT NULL,
    phone int NULL,
    type_of_account binary(50) NOT NULL,
    website varchar(250) NULL,
    extara_information text NULL,
    data timestamp NOT NULL,
    city_ID int NOT NULL,
    CONSTRAINT admin_and_user_pk PRIMARY KEY (ID)
) COMMENT 'Hint:  type_of_account is (1 = admin, 0 = user)';

-- Table: booking_contract
CREATE TABLE booking_contract (
    ID int NOT NULL,
    price int NOT NULL,
    more_details text NOT NULL,
    date_start date NOT NULL,
    date_end date NOT NULL,
    admin_and_user_ID int NOT NULL,
    venue_ID int NOT NULL,
    service_ID int NOT NULL,
    gift_ID int NOT NULL,
    CONSTRAINT booking_contract_pk PRIMARY KEY (ID)
);

-- Table: city
CREATE TABLE city (
    ID int NOT NULL,
    name varchar(250) NOT NULL,
    CONSTRAINT city_pk PRIMARY KEY (ID)
);

-- Table: gift
CREATE TABLE gift (
    ID int NOT NULL,
    details text NOT NULL,
    CONSTRAINT gift_pk PRIMARY KEY (ID)
);

-- Table: picture
CREATE TABLE picture (
    ID int NOT NULL,
    picture_link varchar(255) NOT NULL,
    venue_ID int NOT NULL,
    admin_and_user_ID int NOT NULL,
    service_ID int NOT NULL,
    CONSTRAINT picture_pk PRIMARY KEY (ID)
);

-- Table: provider
CREATE TABLE provider (
    ID int NOT NULL,
    name varchar(100) NOT NULL,
    email varchar(150) NOT NULL,
    phone int NOT NULL,
    website varchar(250) NULL,
    extara_information text NULL,
    address varchar(255) NOT NULL,
    data timestamp NOT NULL,
    service_ID int NOT NULL,
    CONSTRAINT provider_pk PRIMARY KEY (ID)
);

-- Table: rate
CREATE TABLE rate (
    ID int NOT NULL,
    rate_value int NOT NULL,
    venue_ID int NOT NULL,
    admin_and_user_ID int NOT NULL,
    CONSTRAINT rate_pk PRIMARY KEY (ID)
);

-- Table: reveiw
CREATE TABLE reveiw (
    ID int NOT NULL,
    comment text NOT NULL,
    admin_and_user_ID int NOT NULL,
    venue_ID int NOT NULL,
    CONSTRAINT reveiw_pk PRIMARY KEY (ID)
);

-- Table: service
CREATE TABLE service (
    ID int NOT NULL,
    name varchar(100) NOT NULL,
    discription text NOT NULL,
    price int NOT NULL,
    date_start date NOT NULL,
    date_end date NOT NULL,
    service_type_ID int NOT NULL,
    booking_ID int NOT NULL,
    city_ID int NOT NULL,
    venue_ID int NOT NULL,
    extra_detais text NULL,
    CONSTRAINT service_pk PRIMARY KEY (ID)
);

-- Table: service_type
CREATE TABLE service_type (
    ID int NOT NULL,
    type_name varchar(255) NOT NULL,
    CONSTRAINT service_type_pk PRIMARY KEY (ID)
);

-- Table: venue
CREATE TABLE venue (
    ID int NOT NULL,
    name varchar(100) NOT NULL,
    discerption text NOT NULL,
    address varchar(255) NOT NULL,
    number int NOT NULL,
    contact_number int NOT NULL,
    mobile int NULL,
    email varchar(150) NOT NULL,
    website varchar(250) NULL,
    maximum_capacity int NOT NULL,
    price int NULL,
    offers text NULL,
    payment_method int NOT NULL,
    extra_information text NOT NULL,
    latitude_location int NOT NULL,
    longitude_location int NOT NULL,
    city_ID int NOT NULL,
    CONSTRAINT venue_pk PRIMARY KEY (ID)
);

-- foreign keys
-- Reference: admin_and_user_city (table: admin_and_user)
ALTER TABLE admin_and_user ADD CONSTRAINT admin_and_user_city FOREIGN KEY admin_and_user_city (city_ID)
    REFERENCES city (ID);

-- Reference: booking_contract_admin_and_user (table: booking_contract)
ALTER TABLE booking_contract ADD CONSTRAINT booking_contract_admin_and_user FOREIGN KEY booking_contract_admin_and_user (admin_and_user_ID)
    REFERENCES admin_and_user (ID);

-- Reference: booking_contract_gift (table: booking_contract)
ALTER TABLE booking_contract ADD CONSTRAINT booking_contract_gift FOREIGN KEY booking_contract_gift (gift_ID)
    REFERENCES gift (ID);

-- Reference: booking_contract_service (table: booking_contract)
ALTER TABLE booking_contract ADD CONSTRAINT booking_contract_service FOREIGN KEY booking_contract_service (service_ID)
    REFERENCES service (ID);

-- Reference: booking_contract_venue (table: booking_contract)
ALTER TABLE booking_contract ADD CONSTRAINT booking_contract_venue FOREIGN KEY booking_contract_venue (venue_ID)
    REFERENCES venue (ID);

-- Reference: picture_admin_and_user (table: picture)
ALTER TABLE picture ADD CONSTRAINT picture_admin_and_user FOREIGN KEY picture_admin_and_user (admin_and_user_ID)
    REFERENCES admin_and_user (ID);

-- Reference: picture_service (table: picture)
ALTER TABLE picture ADD CONSTRAINT picture_service FOREIGN KEY picture_service (service_ID)
    REFERENCES service (ID);

-- Reference: picture_venue (table: picture)
ALTER TABLE picture ADD CONSTRAINT picture_venue FOREIGN KEY picture_venue (venue_ID)
    REFERENCES venue (ID);

-- Reference: provider_service (table: provider)
ALTER TABLE provider ADD CONSTRAINT provider_service FOREIGN KEY provider_service (service_ID)
    REFERENCES service (ID);

-- Reference: rate_admin_and_user (table: rate)
ALTER TABLE rate ADD CONSTRAINT rate_admin_and_user FOREIGN KEY rate_admin_and_user (admin_and_user_ID)
    REFERENCES admin_and_user (ID);

-- Reference: rate_venue (table: rate)
ALTER TABLE rate ADD CONSTRAINT rate_venue FOREIGN KEY rate_venue (venue_ID)
    REFERENCES venue (ID);

-- Reference: reviw_admin_and_user (table: reveiw)
ALTER TABLE reveiw ADD CONSTRAINT reviw_admin_and_user FOREIGN KEY reviw_admin_and_user (admin_and_user_ID)
    REFERENCES admin_and_user (ID);

-- Reference: reviw_venue (table: reveiw)
ALTER TABLE reveiw ADD CONSTRAINT reviw_venue FOREIGN KEY reviw_venue (venue_ID)
    REFERENCES venue (ID);

-- Reference: service_booking (table: service)
ALTER TABLE service ADD CONSTRAINT service_booking FOREIGN KEY service_booking (booking_ID)
    REFERENCES booking_contract (ID);

-- Reference: service_city (table: service)
ALTER TABLE service ADD CONSTRAINT service_city FOREIGN KEY service_city (city_ID)
    REFERENCES city (ID);

-- Reference: service_service_type (table: service)
ALTER TABLE service ADD CONSTRAINT service_service_type FOREIGN KEY service_service_type (service_type_ID)
    REFERENCES service_type (ID);

-- Reference: service_venue (table: service)
ALTER TABLE service ADD CONSTRAINT service_venue FOREIGN KEY service_venue (venue_ID)
    REFERENCES venue (ID);

-- Reference: venue_city (table: venue)
ALTER TABLE venue ADD CONSTRAINT venue_city FOREIGN KEY venue_city (city_ID)
    REFERENCES city (ID);

-- End of file.

