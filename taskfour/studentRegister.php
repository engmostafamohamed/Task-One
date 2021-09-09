<?php
require 'helpers.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=cleanInputs($_POST['name']);
    $email=cleanInputs($_POST['email']);
    $password=$_POST['password'];

    #FILE INFO
    $cvtmp_path=$_FILES['cv']['tmp_name'];
    $cvname=$_FILES['cv']['name'];
    $cvsize=$_FILES['cv']['tmp_name'];
    $cvtype=$_FILES['cv']['tmp_name'];
    $errors=[];
    if(!validate($name,1)){
        $errors["name"]="Filed Required";
    }elseif (!validate($name,2)) {
        $errors["name"]="Invalid String";
    }
    if(!validate($email,1)){
        $errors["Email"]="Filed Required";
    }elseif (!validate($email,3)) {
        $errors["Email"]="Invalid Email";
    }
    if(!validate($password,1)){
        $errors["password"]="Filed Required";
    }elseif (!validate($password,4)) {
        # code...
        $errors["password"]="Invalid Extention";
    }

    if(!validate($cvname,1)){
        $errors["cv"]="Filed Required";
    }elseif (!validate($cvtype,4)) {
        $errors["cv"]="Invalid Extention";
    }

    if (count($errors)>0) {
        # code...
        foreach($errors as $key =>$value)
        {
            echo '*'.$key.':'.$value.'<br>';
        }
    }
    else{
        echo 'Valid data';
    }

}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"  enctype ="multipart/form-data">

    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
    </div>


    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">New password</label>
    <input type="password" name="password"   class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div> 
    <div class="form-group">
    <label for="exampleInputcv"> Upload CV</label>
    <input type="file" name="cv"  >
    </div>

    <!-- <div class="form-group">
    <label for="exampleInputcv"> Upload CV</label>
    <input type="text name="gender"  >
    </div> -->

    <button type="submit" class="btn btn-primary">Submit</button>
</form>