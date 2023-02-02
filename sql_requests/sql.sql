--мои зпросы
SELECT * FROM `students`;
INSERT INTO students (name,surname,email,course) VALUES ("Андрей","Чужмаков","andrey@gmail.com","3");
UPDATE students SET `name`="Кирилл1" , `surname`="Dolbnya" WHERE id=1;
DELETE FROM `students` WHERE `students`.`id` = 3;


--шаблоны
SELECT * FROM `students` WHERE 1
SELECT `id`, `name`, `surname`, `email`, `course` FROM `students` WHERE 1
INSERT INTO `students`(`id`, `name`, `surname`, `email`, `course`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`surname`='[value-3]',`email`='[value-4]',`course`='[value-5]' WHERE 1
DELETE FROM `students` WHERE 0