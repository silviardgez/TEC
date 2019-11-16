INSERT INTO `ACTION` (`id`, `name`, `description`) VALUES
('1', 'ADD', 'ADD'),
('2', 'DELETE', 'DELETE'),
('3', 'EDIT', 'EDIT'),
('4', 'SHOWCURRENT', 'SHOWCURRENT'),
('5', 'SHOWALL', 'SHOWALL');

INSERT INTO `FUNCTIONALITY` (`id`, `name`, `description`) VALUES
('1', 'UserManagement', 'UserManagement'),
('2', 'RoleManagement', 'RoleManagement'),
('3', 'FunctionalityManagement', 'FunctionalityManagement'),
('4', 'ActionManagement', 'ActionManagement'),
('5', 'PermissionManagement', 'PermissionManagement'),
('6', 'AcademicCourseManagement', 'AcademicCourseManagement'),
('7', 'FuncActionManagement', 'FuncActionManagement'),
('8', 'UserRoleManagement', 'UserRoleManagement'),
('9', 'UniversityManagement', 'UniversityManagement'),
('10', 'CenterManagement', 'CenterManagement'),
('11', 'BuildingManagement', 'BuildingManagement'),
('12', 'SpaceManagement', 'SpaceManagement'),
('13', 'DegreeManagement', 'DegreeManagement');


INSERT INTO `FUNC_ACTION` (`id`,`functionality_id`, `action_id`) VALUES
('1','1','1'),
('2','1','2'),
('3','1','3'),
('4','1','4'),
('5','1','5'),
('6','2','1'),
('7','2','2'),
('8','2','3'),
('9','2','4'),
('10','2','5'),
('11','3','1'),
('12','3','2'),
('13','3','3'),
('14','3','4'),
('15','3','5'),
('16','4','1'),
('17','4','2'),
('18','4','3'),
('19','4','4'),
('20','4','5'),
('21','5','1'),
('22','5','2'),
('23','5','3'),
('24','5','4'),
('25','5','5'),
('26','6','1'),
('27','6','2'),
('28','6','3'),
('29','6','4'),
('30','6','5'),
('31','7','1'),
('32','7','2'),
('33','7','3'),
('34','7','4'),
('35','7','5'),
('36','8','1'),
('37','8','2'),
('38','8','3'),
('39','8','4'),
('40','8','5'),
('41','9','1'),
('42','9','2'),
('43','9','3'),
('44','9','4'),
('45','9','5'),
('46','10','1'),
('47','10','2'),
('48','10','3'),
('49','10','4'),
('50','10','5'),
('51','11','1'),
('52','11','2'),
('53','11','3'),
('54','11','4'),
('55','11','5'),
('56','12','1'),
('57','12','2'),
('58','12','3'),
('59','12','4'),
('60','12','5'),
('61','13','1'),
('62','13','2'),
('63','13','3'),
('64','13','4'),
('65','13','5');

INSERT INTO `USER` (`login`,`password`,`dni`, `name`,`surname`,`email`,`address`,`telephone`) VALUES
('admin','21232f297a57a5a743894a0e4a801fc3' , '11122233P','Administrador','Administrador', 'admin@admin.com', 'address', '666555444'),
('gestuniv','21232f297a57a5a743894a0e4a801fc3' , '11122233P','GestUniv','GestUniv', 'GestUniv@GestUniv.com', 'address', '666555444'),
('gestcent','21232f297a57a5a743894a0e4a801fc3' , '11122233P','GestCent','GestCent', 'GestCent@GestCent.com', 'address', '666555444'),
('gestbuil','21232f297a57a5a743894a0e4a801fc3' , '11122233P','GestBuil','GestBuil', 'GestBuil@GestBuil.com', 'address', '666555444'),
('gestdeg','21232f297a57a5a743894a0e4a801fc3' , '11122233P','GestDegree','GestDegree', 'GestDegree@GestDegree.com', 'address', '666555444');

INSERT INTO `ROLE` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Role with all permissions'),
(2, 'GestUniv', 'Role with University Owner permissions'),
(3, 'GestCent', 'Role with Center Owner permissions'),
(4, 'GestBuil', 'Role with Building Owner permissions'),
(5, 'GestDegree', 'Role with Degree Owner permissions'),
(6, 'BasicUser', 'Role with the basic permissions'),
(7, 'Test', 'Role to test');

INSERT INTO `USER_ROLE` (`user_id`,`role_id`) VALUES
('admin', 1),
('gestuniv', 2),
('gestcent', 3),
('gestbuil', 4),
('gestdeg', 5);

INSERT INTO `PERMISSION` (`role_id`,`func_action_id`) VALUES
(1,'1'),
(1,'2'),
(1,'3'),
(1,'4'),
(1,'5'),
(1,'6'),
(1,'7'),
(1,'8'),
(1,'9'),
(1,'10'),
(1,'11'),
(1,'12'),
(1,'13'),
(1,'14'),
(1,'15'),
(1,'16'),
(1,'17'),
(1,'18'),
(1,'19'),
(1,'20'),
(1,'21'),
(1,'22'),
(1,'23'),
(1,'24'),
(1,'25'),
(1,'26'),
(1,'27'),
(1,'28'),
(1,'29'),
(1,'30'),
(1,'31'),
(1,'32'),
(1,'33'),
(1,'34'),
(1,'35'),
(1,'36'),
(1,'37'),
(1,'38'),
(1,'39'),
(1,'40'),
(1,'41'),
(1,'42'),
(1,'43'),
(1,'44'),
(1,'45'),
(1,'46'),
(1,'47'),
(1,'48'),
(1,'49'),
(1,'50'),
(1,'51'),
(1,'52'),
(1,'53'),
(1,'54'),
(1,'55'),
(1,'56'),
(1,'57'),
(1,'58'),
(1,'59'),
(1,'60'),
(1,'61'),
(1,'62'),
(1,'63'),
(1,'64'),
(1,'65'),
(2,'46'),
(2,'47'),
(2,'48'),
(2,'49'),
(2,'50'),
(2,'43'),
(2,'44'),
(2,'45'),
(2,'51'),
(2,'54'),
(2,'55'),
(3,'49'),
(3,'50'),
(3,'61'),
(3,'62'),
(3,'63'),
(3,'64'),
(3,'65'),
(4,'52'),
(4,'53'),
(4,'54'),
(4,'55'),
(5,'64'),
(5,'65');

INSERT INTO `ACADEMIC_COURSE` (`id`, `academic_course_abbr`, `start_year`, `end_year`) VALUES
(1, '18/19', '2018', '2019'),
(2, '19/20', '2019', '2020'),
(3, '20/21', '2020', '2021');