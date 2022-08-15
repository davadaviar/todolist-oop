<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Entity\Todolist;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpl;
use \View\TodolistView;

function testTodoListView() : void {

    $todolistRepositoryImpl = new TodoListRepositoryImpl();
    $todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
    $todolistView = new TodolistView($todolistServiceImpl);

    $todolistServiceImpl -> addTodoList("Belajar PHP dasar");
    $todolistServiceImpl -> addTodoList("Belajar PHP OOP");
    $todolistServiceImpl -> addTodoList("Belajar PHP database");

    $todolistView -> showTodoList();

}

function testAddTodoListView() : void {

    $todolistRepositoryImpl = new TodoListRepositoryImpl();
    $todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
    $todolistView = new TodolistView($todolistServiceImpl);

    $todolistServiceImpl -> addTodoList("Belajar PHP dasar");
    $todolistServiceImpl -> addTodoList("Belajar PHP OOP");
    $todolistServiceImpl -> addTodoList("Belajar PHP database");

    $todolistServiceImpl -> showTodoList();

    $todolistView -> addTodoList();

    $todolistServiceImpl -> showTodoList();

}

function testRemoveTodoListView() : void {

    $todolistRepositoryImpl = new TodoListRepositoryImpl();
    $todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
    $todolistView = new TodolistView($todolistServiceImpl);

    $todolistServiceImpl -> addTodoList("Belajar PHP dasar");
    $todolistServiceImpl -> addTodoList("Belajar PHP OOP");
    $todolistServiceImpl -> addTodoList("Belajar PHP database");

    $todolistServiceImpl -> showTodoList();

    $todolistView -> removeTodoList();

    $todolistServiceImpl -> showTodoList();

    $todolistView -> removeTodoList();

    $todolistServiceImpl -> showTodoList();

}

testRemoveTodoListView();