-- Authors table
INSERT INTO Исполнитель (название) VALUES ("Disclosure");
INSERT INTO Исполнитель (название) VALUES ("David Bowie");
INSERT INTO Исполнитель (название) VALUES ("David Guetta");
INSERT INTO Исполнитель (название) VALUES ("Duke Dumont");
INSERT INTO Исполнитель (название) VALUES ("Ed Sheeran");
INSERT INTO Исполнитель (название) VALUES ("edIT");
INSERT INTO Исполнитель (название) VALUES ("Ellie Goulding");
INSERT INTO Исполнитель (название) VALUES ("Empire of the Sun");
INSERT INTO Исполнитель (название) VALUES ("Example");

-- Album table
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Caracal", 1);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Settle", 1);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("The Face EP", 1);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Heroes", 2);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Hunky Dory", 2);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Low", 2);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Listen", 3);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("One Love", 3);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Pop Life", 3);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Fabric Live", 4);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("EP1", 4);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("I got You", 4);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Want Some?", 5);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("One Take", 5);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("X", 5);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Edit", 6);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Silence of the night", 6);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Dance Management", 6);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Delirium", 7);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Halcyon Days", 7);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Lights", 7);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Ice on the Dune", 8);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Walking on a dream", 8);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("DNA", 8);

INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Playing in the shadows", 9);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("What We Made", 9);
INSERT INTO Альбом (наименование, номер_исполнителя) VALUES ("Live Life Living", 9);

-- Genre table
INSERT INTO Жанр (название, описание) VALUES ("Electronic", "Electronic music genre");
INSERT INTO Жанр (название, описание) VALUES ("Classic Rock", "Classic Rock genre");
INSERT INTO Жанр (название, описание) VALUES ("Dance", "Dance music genre");
INSERT INTO Жанр (название, описание) VALUES ("Acoustic", "Acostic music genre");
INSERT INTO Жанр (название, описание) VALUES ("IDM", "IDM music genre");
INSERT INTO Жанр (название, описание) VALUES ("Dubstep", "Dubstep music genre");
INSERT INTO Жанр (название, описание) VALUES ("Disco House", "Disco House music genre");

-- Track table
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Omen", "2015-10-05", 4, 1);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Jaded", "2015-10-05", 4, 1);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Nocturnal", "2015-10-05", 5, 1);

INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Heroes", "1990-10-05", 5, 4);

INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Lovers On The Sun", "2014-10-05", 4, 8);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Shot Me Down", "2014-08-03", 4, 8);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Just One Last Time", "2011-10-05", 5, 9);

INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Need You", "2010-10-12", 4, 10);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("I Got You", "2012-01-07", 3, 12);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Some song", "2011-06-06", 3, 11);

INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Give Me Love", "2010-11-05", 5, 15);

INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("LTLP", "2011-10-05", 4, 16);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Ants", "2011-10-05", 5, 16);
INSERT INTO Композиция (название, дата_публикации, рейтинг, номер_альбома) VALUES ("Twenty Minutes", "2011-10-05", 3, 16);

-- Track_has_Genre table
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (1, 1);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (1, 7);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (2, 1);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (2, 7);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (3, 7);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (4, 2);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (5, 3);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (6, 3);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (7, 3);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (7, 1);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (8, 3);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (9, 3);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (10, 3);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (11, 4);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (12, 5);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (13, 5);
INSERT INTO Жанр_к_Композиции (номер_композиции, номер_жанра) VALUES (14, 5);