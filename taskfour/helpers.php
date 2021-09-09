<?php
function validate($input,$flag){
    $status=true;
    switch ($flag) {
        case '1':
            # code...
            if (empty($input)) {
                # code...
                $status=false;
            }
            break;
        case '2':
            # code...
            if (!preg_match('/^[a-zA-Z\s]*$/',$input)) {
                # code...
                $status=false;
            }
            break;
        case '3':
            # code...
            if (!filter_var($input,FILTER_VALIDATE_EMAIL)) {
                # code...
                $status=false;
            }
            break;
        case '4':
             # code...
             $allowedExt=['pdf'];
             $textArray=explode('/',$input);
             if(!in_array($textArray[1],$allowedExt)){
                    $status=false;
                }
            break;
        case '5':
            if(strlen($password)<6){
                $errorMessages['Password']="Length Must be > 6 char";
            }

    }
    return $status;
}
function cleanInputs($input){
    $input=trim($input);
    $input=stripcslashes($input);
    $input=htmlspecialchars($input);
    return $input;
}
?>