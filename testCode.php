<?php
// $todos = ["Clean the house", "Do the dishes", "Go shopping", "Read a book"];
$todos =
[
	[
		"id" => 1,
		"title"=> "Clean the house",
		"completed"=> false
	],
	[
		"id" => 2,
		"title"=> "Do the dishes",
		"completed"=> true
	],
	[
		"id" => 3,
		"title"=> "Go shopping",
		"completed"=> false
	],
	[
		"id" => 4,
		"title"=> "Read a book",
		"completed"=> true
	]

];
$title = "Today I want to do:";
// $firstActivity = "1. Clean the house";
// $secondActivity = "2. Do the dishes";
// $thirdActivity = "3. Go shopping";
// $fourthActivity = "4. Read a book";

echo $title."\n";
// echo $firstActivity."\n";
// echo $secondActivity."\n";
// echo $thirdActivity."\n";
// echo $fourthActivity."\n";
// $index = 0;
// foreach($todos as $todo)
// {
// 	$index++;
// 	echo "{$index}.{$todo}"."\n";
// }
// foreach($todosAssoc as $todolist)
// {
// 	$status = $todolist['completed'] ? "[X]" : "[ ]";
// 	echo "{$status} {$todolist['id']}.{$todolist['title']}"."\n";
// }

function getTodoByName(array $todos, string $name)
{
	$key = array_search($name, array_column($todos, "title"), true);
	if($key === false)
	{
		return false;
	}
	return $todos[$key];
}

function getTodoByStatus(array $todos, bool $status):array
{
	return array_filter($todos, function($todo) use ($status){
		return $todo['completed'] === $status;
	});
}

function completedTodos(array $todos):array
{
	return array_map(function($todo){
		return array_merge($todo, ['completed' => true]);
	}, $todos);
}


$result = completedTodos($todos);
var_dump($result);







