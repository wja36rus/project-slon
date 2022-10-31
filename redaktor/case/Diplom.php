<?php


class Diplom extends PDO
{
    private $setting;

    public function __construct()
    {
        $this->setting = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/redaktor/setting.json"), true);
        parent::__construct("mysql:host={$this->setting["connect"]["host"]};dbname={$this->setting["connect"]["dbname"]}", $this->setting["connect"]["user"], $this->setting["connect"]["password"]);

        self::getCases();
    }


    public function getCases($notall=false)
    {
        if (!$notall) {
            $query = "select * from diplom where status = '1' order by order_by asc";
        } else {
            $query = "select * from diplom order by order_by asc";
        }


        $prepare = parent::prepare($query);
        $prepare->execute();
        $result = $prepare->fetchAll(self::FETCH_ASSOC);

        return $result;
    }

    public function updateCases($query)
    {
        $prepare = parent::prepare($query);
        $prepare->execute();
    }
}