<?php


class Cases extends PDO
{
    private $setting;

    public function __construct($type=false, $adm = false)
    {
        $this->setting = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/redaktor/setting.json"), true);
        parent::__construct("mysql:host={$this->setting["connect"]["host"]};dbname={$this->setting["connect"]["dbname"]}", $this->setting["connect"]["user"], $this->setting["connect"]["password"]);

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');
        header('Access-Control-Allow-Credentials: true');
        header('Content-Type: text/html; charset=utf-8');

        if (!$adm) {
            self::getCases($type);
        }
    }


    public function getCases($type, $adm = false)
    {
        if ($type === "notfull") {
            $query = "select * from cases where status = '1' order by order_by asc limit 3";
        } else if ($adm) {
            $query = "select * from cases order by order_by asc";
        } else {
            $query = "select * from cases where status = '1' order by order_by asc";
        }

        $prepare = parent::prepare($query);
        $prepare->execute();
        $result = $prepare->fetchAll(self::FETCH_ASSOC);

        if ($adm) {
            return $result;
        } else {
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }
    }

    public function updateCases($query)
    {
        $prepare = parent::prepare($query);
        $prepare->execute();
    }
}