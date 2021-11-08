<?php

class CModel {
    public function GetData(){
        $host = '127.0.0.1';
        $db = 'blog';
        $user = 'root';
        $pass = '';
        $charset = 'utf8'; // Присвоение параметров

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   =>false,
        ];  // Объявление нового PDO. Передача параметров подключения
        $pdo = new PDO($dsn, $user, $pass, $opt);
        
        $result = $pdo->query('SELECT * FROM news');// Выполняется запрос 
        $arrayResult = $result->fetchAll(); // Получение всего массива
        







        // $mysqli = new mysqli('localhost', 'root', '', 'blog'); // Создаём класс, помещаем его в переменную, создаём поля


        // if(mysqli_connect_errno()) {
        //     print_f('Соединение не установлено');
        //     exit();
        // } // Обработка ошибки соединения

        // $mysqli->set_charset('utf8'); // Указывает на установку кодировки
        
        // $query = "Select * From News"; // Делаем запрос из таблицы

        // $result = $mysqli->query($query); // Выполняется запрос 
        // $arrayResult = $result->fetch_all(MYSQLI_ASSOC); // Загружаем весь массив и получаем результат




        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://mirpozitiva.ru/wp-content/uploads/2019/11/1472042585_08.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'
            
        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://mirpozitiva.ru/wp-content/uploads/2019/11/1472042908_28.jpg',
        //     'TEXT' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel cumque culpa.'
            
        // );
        return $arrayResult;
    }
}
    