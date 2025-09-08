-- addresses.sql
-- Schema for U.S. & Canada Address Database
-- Optimized for MySQL

CREATE TABLE `addresses` (
    `zipcode`    VARCHAR(10)  NOT NULL,
    `number`     VARCHAR(30)  NOT NULL,
    `street`     VARCHAR(200) NOT NULL,
    `street2`    VARCHAR(50)  DEFAULT NULL,
    `city`       VARCHAR(100) NOT NULL,
    `state`      CHAR(2)      NOT NULL,
    `plus4`      CHAR(4)      DEFAULT NULL,
    `country`    CHAR(2)      NOT NULL DEFAULT 'US',
    `latitude`   DECIMAL(9,6) NOT NULL,
    `longitude`  DECIMAL(9,6) NOT NULL,
    `source`     VARCHAR(50)  DEFAULT NULL,
    UNIQUE KEY `uniq_address` (`zipcode`, `number`, `street`, `street2`, `country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Helpful indexes for queries
CREATE INDEX `idx_lat_lng`       ON `addresses` (`latitude`, `longitude`);
CREATE INDEX `idx_number_street` ON `addresses` (`number`, `street`);
CREATE INDEX `idx_state_city`    ON `addresses` (`state`, `city`);
CREATE INDEX `idx_zip_number`    ON `addresses` (`zipcode`, `number`);
CREATE INDEX `idx_country`       ON `addresses` (`country`);
