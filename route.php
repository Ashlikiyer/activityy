<?php
require_once './modules/get.php';
require_once './modules/post.php';

$get = new Get();
$post = new Post();

if(isset($_REQUEST['request'])){
    $request = explode('/', $_REQUEST['request']);
}

else{
    http_response_code(404);
    echo "Endpoint does not exist";
}

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        switch($request[0]){
            case 'employee':
                echo json_encode($get->get_employees());
            break;
            case 'job':
                echo $get->get_jobs($request[1]);
            break;                                            
        }
        //echo 'This is my GET method';
    break;
    case 'POST':

    $data = json_decode(file_get_contents("php://input"));

    switch($request[0]){
        case 'addemployee':
            echo json_encode($post->add_employees($data));    
        break;
        case 'addjob':
            echo 'This is my post job route';
        break;                                            
    }
    break;
    default:
        echo 'this is default';
        http_response_code(403);
    break;                                                               
}


?>
