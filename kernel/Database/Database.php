<?php

namespace App\Kernel\Database;

use App\Kernel\Config\ConfigInterface;

//класс для работы с бд
class Database implements DatabaseInterface
{
    //создаем экземпляр класса pdo
    private \PDO $pdo;

    //инициализируем класс конфиг
    public function __construct(
        private ConfigInterface $config
    )
    {
        //подключаем бд
        $this->connect();
    }

    //функция для вписывания данных в бд
    //принимаем название таблицы и массив данных
    public function insert(string $table, array $data): int|false
    {
        //возвращаем ключи принятых колонок 
        $fields = array_keys($data);

        //проходимся по всем колонкам бд и перечисляем их через запятую
        $columns = implode(',',$fields);
        //проходимся по вписываемым данным перечисляем их через запятую и добавляем двоеточие
        $binds = implode(',',array_map(fn ($field)=>":$field", $fields));

        //создаем sql запрос
        //вписываем принятое название таблицы и преобразованные строки
        $sql = "INSERT INTO $table ($columns) VALUES ($binds)";

        //готовим sql запрос к выполнению
        $stmt = $this->pdo->prepare($sql);



        //выполняем проверку на исключения
        try {
            //выполяняем запрос
            //в качестве аргумента передаем массив с данными
            $stmt->execute($data);
        }catch (\PDOException $exception) { 
            //если получаем исключения то возврашаем false
            return false;
        }

        //возвращаем id только что вписаной записи
        return (int) $this->pdo->lastInsertId();
    }

    //функция для поиска данных из бд и вывода первого значения
    //передаем в нее название таблицы и опционально наименование поля
    public function first(string $table, array $conditions = []): ?array
    {
        //создаем пустую переменную where
        $where = '';

        //если есть наименование поля 
        if (count($conditions) > 0) {
            //создаем в переменной where форму sql запроса на поиск
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($conditions)));
        }

        //создаем в переменной sql запрос на вывод из бд
        $sql = "SELECT * FROM $table $where LIMIT 1";

        //подготавлеваем sql запрос к выполнению
        $stmt = $this->pdo->prepare($sql);

        //выполняем sql запрос 
        $stmt->execute($conditions);

        //вписывем результат в переменную в виде ассоциативного массива
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        //возвращаем результат
        return $result ?: null;
    }

    public function get(string $table,array $conditions = []): array
    {
        $where = '';

        if (count($conditions) > 0) {
            //создаем в переменной where форму sql запроса на поиск
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($conditions)));
        }

        //создаем в переменной sql запрос на вывод из бд
        $sql = "SELECT * FROM $table $where";

        //подготавлеваем sql запрос к выполнению
        $stmt = $this->pdo->prepare($sql);

        //выполняем sql запрос 
        $stmt->execute($conditions);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete(string $table, array $conditions = []): void
    {
        $where = '';

        if (count($conditions) > 0) {
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($conditions)));
        }

        $sql = "DELETE FROM $table $where";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($conditions);
    }

    public function update(string $table, array $data, array $conditions = []): void
    {
        $fields = array_keys($data);

        $set = implode(', ', array_map(fn ($field) => "$field = :$field", $fields));

        $where = '';

        if (count($conditions) > 0) {
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($conditions)));
        }

        $sql = "UPDATE $table SET $set $where";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute(array_merge($data, $conditions));
    }

    //функция для подключения к бд
    private function connect(): void
    {
        //принимаем данные из конфига
        $driver = $this->config->get("database.driver");
        $host = $this->config->get("database.host");
        $database = $this->config->get("database.database");
        $username = $this->config->get("database.username");
        $password = $this->config->get("database.password");
        $charset = $this->config->get("database.charset");

        try{
            //подключаемся к бд по принятым данным
            $this->pdo = new \PDO(
            "$driver:host=$host;dbname=$database;charset=$charset", 
            $username, 
            $password
            );
            //если получаем исключение то выводим сообщение об ошибке
        }catch(\PDOException $exception){
            exit("Database connect failed: {$exception->getMessage()}");
        }
    }
}