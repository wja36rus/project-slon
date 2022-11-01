<?php


class Partners extends PDO
{
    private $setting;

    public function __construct()
    {
        $this->setting = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/redaktor/setting.json"), true);
        parent::__construct("mysql:host={$this->setting["connect"]["host"]};dbname={$this->setting["connect"]["dbname"]}", $this->setting["connect"]["user"], $this->setting["connect"]["password"]);

        self::getCases();
    }


    public function getCases($notall = false, $slider = false)
    {
        if (!$notall) {
            $query = "select * from partner where status = '1' order by order_by asc";
        } else {
            $query = "select * from partner order by order_by asc";
        }


        $prepare = parent::prepare($query);
        $prepare->execute();
        if ($slider) {
            $row = $prepare->fetchAll(self::FETCH_ASSOC);
            $result = array_chunk($row, 3);
        } else {
            $result = $prepare->fetchAll(self::FETCH_ASSOC);
        }


        return $result;
    }

    public function updateCases($query)
    {
        $prepare = parent::prepare($query);
        $prepare->execute();
    }
}