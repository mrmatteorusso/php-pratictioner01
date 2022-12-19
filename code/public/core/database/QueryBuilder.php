<?php


class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $params)
    {
        $query = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            $table,
            implode(',', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );

        try {
            $stmt = $this->pdo->prepare($query);
            // $stmt->bindParam(':item', $_POST['item']);
            //$stmt->bindParam(':item', $task);
            $stmt->execute($params);
        } catch (Exception $e) {
            $e->getMessage("OH THERE IS A PROBLEM with connection");
        }
    }
}
