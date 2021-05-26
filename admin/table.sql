CREATE TABLE `sms`.`students` ( 
`id` INT(100) NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(255) NOT NULL , 
`Adm_num` VARCHAR(255) NOT NULL , 
`id_num` INT(100) NOT NULL , 
`adm_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;


CREATE TABLE `sms`.`courses` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `short_name` VARCHAR(100) NOT NULL , 
    `full_name` VARCHAR(100) NOT NULL , 
    `date_created` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

CREATE TABLE `sms`.`units` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `course_id` INT(10) NOT NULL , 
    `unit_title` VARCHAR(100) NOT NULL , 
    `unit_name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;

CREATE TABLE `sms`.`schools` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `school_name` INT(255) NOT NULL , 
    `date_created` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;