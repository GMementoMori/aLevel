(3DUMP)Команда которая выведет всю информацию о выбраном курсе:

SELECT `courses`.`info`, 
group_concat(`teachers`.`info` separator ';') AS `quotes`, 
group_concat(`name` separator ';') AS `teachers`, 
group_concat(`index_photo` separator ';') AS `photo` 
FROM `courses` 
INNER JOIN `teachers` 

INNER JOIN `course_teachers` 
on (`course_teachers`.`id_course` = `courses`.`id` 
and 
`course_teachers`.`id_teacher` = `teachers`.`id`) 
WHERE `courses`.`title` = '$y';

$y - Название курса.
