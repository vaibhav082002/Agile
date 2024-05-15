DROP DATABASE IF EXISTS price_prediction;
CREATE DATABASE price_prediction;
USE price_prediction;

CREATE TABLE price_prediction(
    area int(10) NOT NULL DEFAULT 0,
    bhk varchar(50) DEFAULT NULL,
    bath varchar(20) DEFAULT NULL,
    location varchar(100) DEFAULT NULL,
    PRIMARY KEY (empid)
) 