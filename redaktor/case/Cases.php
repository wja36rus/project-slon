<?php


class Cases extends PDO
{
    private $setting;

    public function __construct($type)
    {
        $this->setting = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/redaktor/setting.json"), true);
        parent::__construct("mysql:host={$this->setting["connect"]["host"]};dbname={$this->setting["connect"]["dbname"]}", $this->setting["connect"]["user"], $this->setting["connect"]["password"]);

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');
        header('Access-Control-Allow-Credentials: true');

        self::getCases($type);
    }


    public function getCases($type)
    {
        if ($type === "notfull") {
            $query = "select * from cases where status = '1' order by order_by asc limit 3";
        } else {
            $query = "select * from cases where status = '1' order by order_by asc";
        }

        $prepare = parent::prepare($query);
        $prepare->execute();
        $result = $prepare->fetchAll(self::FETCH_ASSOC);

        echo json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}

$type = $_GET["type"];
$case = new Cases($type);