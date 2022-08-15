<?php

namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView {

        private TodoListService $todolistService;

        public function __construct(TodoListService $todolistService) {
            $this -> todolistService = $todolistService;
        }

        function showTodoList() : void {
            $this -> todolistService -> showTodoList();

            echo "Menu" . PHP_EOL;
            echo "1. Tambahkan Todolist" . PHP_EOL;
            echo "2. Hapus Todolist" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = InputHelper::input("Pilih");

            while (true) {
                 if ($pilihan == "1") {
                     $this -> AddTodoList();
                } else if ($pilihan == "2") {
                    $this -> removeTodoList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }

                echo "Sampai Jumpa" . PHP_EOL;
        }

        function addTodoList() : void {
            echo "TAMBAHKAN TODOLIST" . PHP_EOL;

            $todo = InputHelper::input("Tambahkan (x = batalkan)");
        
            if ($todo == "x") {
                echo "Batal menambahkan todolist" . PHP_EOL;
            } else {
                $this -> todolistService -> addTodoList($todo);
            }
        }

        function removeTodoList() : void {
            echo "HAPUS TODOLIST" . PHP_EOL;

            $pilihan = InputHelper::input("Pilih Nomor : (x batalkan)");
        
            if ($pilihan == "x") {
                echo "Batal hapus todolist" . PHP_EOL;
            } else {
                $this -> todolistService -> removeTodoList($pilihan);
            }

        }

    }
}