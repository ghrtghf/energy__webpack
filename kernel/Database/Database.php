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

    public function first(string $table, array $conditions = []): ?array
    {
        $where = '';

        if (count($conditions) > 0) {
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($conditions)));
        }

        $sql = "SELECT * FROM $table $where LIMIT 1";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($conditions);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result ?: null;
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