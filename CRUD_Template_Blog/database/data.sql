-- Таблица Категория
  
insert into `Категория` (`статус`,`название`,`картинка`,`описание`,`дополнительно`) values ('1','Новости','http://placehold.it/250x250','краткое описание категории','');
insert into `Категория` (`статус`,`название`,`картинка`,`описание`,`дополнительно`) values ('1','Статьи','http://placehold.it/250x250','краткое описание категории','');

-- Таблица Публикация

insert into `Публикация` (`номер_автора`,`название`,`статус`,`теги`,`контент`,`краткое_описание`,`поддержка_комментариев`,`количество_комментариев`,`дата_создания`,`привилегии`,`дополнительно`,`категория`) 
values ('1','Первая публикация','1','','lorem ipsum','краткое описание публикации','1','0',current_timestamp,'0','','1');
insert into `Публикация` (`номер_автора`,`название`,`статус`,`теги`,`контент`,`краткое_описание`,`поддержка_комментариев`,`количество_комментариев`,`дата_создания`,`привилегии`,`дополнительно`,`категория`) 
values ('1','Вторая публикация','1','','lorem ipsum','краткое описание публикации','1','0',current_timestamp,'0','','1');

insert into `Публикация` (`номер_автора`,`название`,`статус`,`теги`,`контент`,`краткое_описание`,`поддержка_комментариев`,`количество_комментариев`,`дата_создания`,`привилегии`,`дополнительно`,`категория`) 
values ('1','Третья публикация','1','','lorem ipsum','краткое описание публикации','1','0',current_timestamp,'0','','2');
insert into `Публикация` (`номер_автора`,`название`,`статус`,`теги`,`контент`,`краткое_описание`,`поддержка_комментариев`,`количество_комментариев`,`дата_создания`,`привилегии`,`дополнительно`,`категория`) 
values ('2','Четвертая публикая','1','','lorem ipsum','краткое описание публикации','1','0',current_timestamp,'0','','2');

-- Таблица Комментарий

insert into `Комментарий` (`номер_родителя`,`номер_публикации`,`номер_автора`,`автор`,`email`,`ip`,`дата_создания`,`статус`,`контент`) 
values ('0','1','0','user','user@test.com','127.0.0.1',current_timestamp,'1','lorem ipsum comment text');

insert into `Комментарий` (`номер_родителя`,`номер_публикации`,`номер_автора`,`автор`,`email`,`ip`,`дата_создания`,`статус`,`контент`) 
values ('0','1','0','user','user@test.com','127.0.0.1',current_timestamp,'1','lorem ipsum comment text');
