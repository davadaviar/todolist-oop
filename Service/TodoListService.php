<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodoListRepository;

    interface TodolistService {

        function showTodoList() : void;
        function addTodoList(string $todo) : void;
        function removeTodoList(int $number) : void;
    }

    class TodoListServiceImpl implements TodoListService {

        private TodoListRepository $todolistRepository;

        public function __construct(TodoListRepository $todolistRepository) {
            $this -> todolistRepository = $todolistRepository;
        }

        function showTodoList() : void {
        
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this -> todolistRepository -> findAll();
        
            foreach ($todolist as $number => $value) {
                echo "$number. " .  $value -> getTodo() . PHP_EOL;
            }
        }

        function addTodoList(string $todo) : void {

            $todolist = new Todolist($todo);
            $this -> todolistRepository -> save($todolist);
        }

        function removeTodoList(int $number) : void {

            if ($this -> todolistRepository -> remove($number)) {
                echo "BERHASIL MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}