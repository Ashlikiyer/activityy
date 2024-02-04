<?php
class Post{

    public function add_employees($employee){        
        $employee->salary = 1000;
        return $employee;
    }

    public function get_jobs($param){
        return "My job is $param";
    }

}

?>