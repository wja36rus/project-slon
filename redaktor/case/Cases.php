<?php


class Cases extends PDO
{
    private $setting;

    public function __construct($type=false, $adm = false, $where = false)
    {
        $this->setting = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/redaktor/setting.json"), true);
        parent::__construct("mysql:host={$this->setting["connect"]["host"]};dbname={$this->setting["connect"]["dbname"]}", $this->setting["connect"]["user"], $this->setting["connect"]["password"]);

        if (!$adm) {
            self::getCases($type, false, $where);
        }
    }


    public function getCases($type, $adm = false, $where = false)
    {
        if ($type === "notfull") {
            $query = "select * from cases where status = '1' order by order_by asc limit 2";
        } else if ($adm && $where) {
            $query = "select * from cases where id = '$where'";
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