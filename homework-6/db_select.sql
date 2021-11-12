#1. Вывести список фильмов, в которых снимались одновременно Арнольд Шварценеггер* и Линда Хэмилтон*.
#Формат: ID фильма, Название на русском языке, Имя режиссёра.
SELECT
	m.ID,
	mt.TITLE,
	d.NAME
FROM movie m
	     join director d on d.ID = m.DIRECTOR_ID
	     join movie_title mt on m.ID = mt.MOVIE_ID and mt.LANGUAGE_ID='ru'
	     join movie_actor ma on m.ID = ma.MOVIE_ID and ma.ACTOR_ID in (1,3)
GROUP BY mt.TITLE,
         d.NAME
HAVING count(m.ID)>1;

#2. Вывести список названий фильмов на англйском языке с "откатом" на русский, в случае если название на английском не задано.
#Формат: ID фильма, Название.
SELECT
	m.ID,
    mt.TITLE
FROM movie m
JOIN movie_title mt on m.ID = mt.MOVIE_ID
where (mt.MOVIE_ID in(
SELECT
m.ID
FROM movie m
 JOIN movie_title mt on m.ID = mt.MOVIE_ID
GROUP BY m.ID
HAVING COUNT(mt.MOVIE_ID)<2))
or (mt.LANGUAGE_ID='en')
;


#3.Вывести самый длительный фильм Джеймса Кэмерона*.
#Формат: ID фильма, Название на русском языке, Длительность.
#(Бонус – без использования подзапросов)
SELECT m.ID, mt.TITLE, m.LENGTH
FROM movie m
JOIN director d on m.DIRECTOR_ID = d.ID and d.ID = 1
JOIN movie_title mt on m.ID = mt.MOVIE_ID and mt.LANGUAGE_ID = 'ru'
ORDER BY m.LENGTH desc
LIMIT 1;


#4. ** Вывести список фильмов с названием, сокращённым до 10 символов. Если название короче 10 символов – оставляем как есть. Если длиннее – сокращаем до 10 символов и добавляем многоточие.
#Формат: ID фильма, сокращённое название
SELECT
m.ID,
insert(SUBSTRING(mt.Title, 1, 10),10,3,'...')
FROM movie m
JOIN movie_title mt on m.ID = mt.MOVIE_ID
WHERE LENGTH(mt.TITLE)>10
union
SELECT
	m.ID,
	mt.Title
FROM movie m
	     JOIN movie_title mt on m.ID = mt.MOVIE_ID
WHERE LENGTH(mt.TITLE)<=10;


#5.Вывести количество фильмов, в которых снимался каждый актёр.
#Формат: Имя актёра, Количество фильмов актёра.
SELECT a.NAME, COUNT(ma.MOVIE_ID)
FROM actor a
INNER JOIN movie_actor  ma on ma.ACTOR_ID = a.ID
GROUP BY a.NAME

#6. Вывести жанры, в которых никогда не снимался Арнольд Шварценеггер*.
#Формат: ID жанра, название
SELECT
g.ID,
g.NAME
FROM genre g
where g.ID not in (
select g.ID
FROM genre g
join movie_genre mg on g.ID = mg.GENRE_ID
join movie m on m.ID = mg.MOVIE_ID
join movie_actor ma on m.ID = ma.MOVIE_ID and ma.ACTOR_ID=1);

#7. Вывести список фильмов, у которых больше 3-х жанров.
#Формат: ID фильма, название на русском языке
SELECT
m.ID,
mt.TITLE
FROM movie m
join movie_title mt on m.ID = mt.MOVIE_ID and mt.LANGUAGE_ID='ru'
join movie_genre mg on m.ID = mg.MOVIE_ID
group by m.ID, mt.TITLE
having COUNT(mg.MOVIE_ID)>3;