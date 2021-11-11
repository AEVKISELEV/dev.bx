#5.Вывести количество фильмов, в которых снимался каждый актёр.
#Формат: Имя актёра, Количество фильмов актёра.
SELECT a.NAME, COUNT(ma.MOVIE_ID)
FROM actor a
	INNER JOIN movie_actor  ma on ma.ACTOR_ID = a.ID
GROUP BY a.NAME