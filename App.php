<?php

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

$todolistRepositoryImpl = new TodoListRepositoryImpl();
$todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
$todolistView = new TodoListView($todolistServiceImpl);

$todolistView -> showTodoList();




