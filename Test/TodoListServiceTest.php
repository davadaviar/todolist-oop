<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList() : void {

    $todolistRepositoryImpl = new TodoListRepositoryImpl();
    $todolistRepositoryImpl -> todolist[1] = new Todolist("Belajar Dasar PHP");
    $todolistRepositoryImpl -> todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepositoryImpl -> todolist[3] = new Todolist("Belajar PHP Database");
    
    $todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
    $todolistServiceImpl -> showTodoList();
}

function testAddTodoList() : void {

    $todolistRepositoryImpl = new TodoListRepositoryImpl();

    $todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
    $todolistServiceImpl -> addTodoList("Belajar PHP Dasar");
    $todolistServiceImpl -> addTodoList("Belajar PHP OOP");
    $todolistServiceImpl -> addTodoList("Belajar PHP Database");
    $todolistServiceImpl -> showTodoList();
}

function testRemoveTodoList() : void {

    $todolistRepositoryImpl = new TodoListRepositoryImpl();

    $todolistServiceImpl = new TodoListServiceImpl($todolistRepositoryImpl);
    $todolistServiceImpl -> addTodoList("Belajar PHP Dasar");
    $todolistServiceImpl -> addTodoList("Belajar PHP OOP");
    $todolistServiceImpl -> addTodoList("Belajar PHP Database");
    $todolistServiceImpl -> showTodoList();

    $todolistServiceImpl -> removeTodoList(3);
    $todolistServiceImpl -> showTodoList();

    $todolistServiceImpl -> removeTodoList(2);
    $todolistServiceImpl -> showTodoList();
}

testRemoveTodoList();

testAddTodoList();
