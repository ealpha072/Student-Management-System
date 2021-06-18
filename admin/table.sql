
CREATE TABLE `sms`.`students` ( 
`id` INT(100) NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(255) NOT NULL , 
`Adm_num` VARCHAR(255) NOT NULL , 
`id_num` INT(100) NOT NULL , 
`adm_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;

ALTER TABLE `students` 
ADD `school` VARCHAR(255) NOT NULL AFTER `id`, 
ADD `course` VARCHAR(100) NOT NULL AFTER `school`, 
ADD `reg_num` VARCHAR(20) NOT NULL AFTER `course`, 
ADD `first_name` VARCHAR(50) NOT NULL AFTER `reg_num`, 
ADD `mid_name` VARCHAR(50) NOT NULL AFTER `first_name`, 
ADD `last_name` VARCHAR(50) NOT NULL AFTER `mid_name`, 
ADD `gender` VARCHAR(10) NOT NULL AFTER `last_name`, 
ADD `parent_name` VARCHAR(255) NOT NULL AFTER `gender`, 
ADD `parent_work` VARCHAR(255) NOT NULL AFTER `parent_name`, 
ADD `disabled` VARCHAR(5) NOT NULL AFTER `parent_work`, 
ADD `nationality` VARCHAR(50) NOT NULL AFTER `disabled`, 
ADD `phone_num` INT(10) NOT NULL AFTER `nationality`, 
ADD `email` VARCHAR(100) NOT NULL AFTER `phone_num`, 
ADD `id_num` INT(8) NOT NULL AFTER `email`

ALTER TABLE `students` ADD `adm_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `id`;

CREATE TABLE `sms`.`courses` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `short_name` VARCHAR(100) NOT NULL , 
    `full_name` VARCHAR(100) NOT NULL , 
    `date_created` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)
)
ENGINE = InnoDB;
ALTER TABLE `courses` ADD `school` VARCHAR(255) NOT NULL AFTER `id`;

CREATE TABLE `sms`.`units` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `course_id` INT(10) NOT NULL , 
    `unit_title` VARCHAR(100) NOT NULL , 
    `unit_name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;
ALTER TABLE `units` ADD `school` VARCHAR(255) NOT NULL AFTER `id`, ADD `department` VARCHAR(255) NOT NULL AFTER `school`;
ALTER TABLE `units` DROP `course_id`;
ALTER TABLE `units` ADD `course` VARCHAR(255) NOT NULL AFTER `department`;

CREATE TABLE `sms`.`schools` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `school_name` INT(255) NOT NULL , 
    `date_created` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;

CREATE TABLE `sms`. `departments`( 
    `id` INT(100) NOT NULL AUTO_INCREMENT , 
    `school` VARCHAR(255) NOT NULL , 
    `dpt_abbr` VARCHAR(255) NOT NULL , 
    `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;