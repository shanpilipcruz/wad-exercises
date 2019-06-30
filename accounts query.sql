SELECT * FROM school_projects.accounts;
UPDATE school_projects.accounts SET password = MD5(asdqwe123) WHERE id = 1;
ALTER TABLE `school_projects`.`accounts` ADD COLUMN `student_num` VARCHAR(50) NOT NULL AFTER `section`;
DELETE FROM accounts WHERE id = 1;
SELECT * FROM school_projects.uploads;