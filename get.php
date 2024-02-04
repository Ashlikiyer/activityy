<?php
class Get{

    public function get_employees(){        
        $data = array(
            "id" => 199,
            "First_name" => "Ashley Kier",
            "Last_name" => "Ferreol",
            "Hire_date" => date_create()
        );
        return $data;
    }

    public function get_jobs($param){
        return "My job is $param";
    }

}

?>