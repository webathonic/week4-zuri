<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    $user= array[
        'fullname' => $username,
        'email'=> $email,
        'password' => $password
        
        };
    //save data into the file
    $folder= "../storage/users.csv";
    $detail = fopen($folder, "ra+"); 
    while (!feof($detail)){
        $line = fgetcsv($detail);
        if ($line1==$email){
            return true;
    }
    fwrite($detail, "$username, $email, $password \n");
    
    fclose($detail);
    
    // echo "OKAY";
    echo "User Successfully registered";
}
?>



