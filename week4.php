<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container d-flex">
        <div class="d-flex justify-content-evenly col-md-3">
            <div class="d-flex justify-content-center">
                
                  
            <?php
    function getUsers(){
        $url="https://jsonplaceholder.typicode.com/users";
        $data=file_get_contents($url);
        return json_decode($data,true);

    }
    
    $users=getUsers();
    
    echo '<pre>';
    // echo print_r($users);
    for($i=0;$i<count($users);$i++){
       echo '
       <div class="card bg-dark text-white justify-content-center">
       <img src="profile.jpg" class="rounded img-thumbnail d-block"/>
       <h2>'.$users[$i]['id'].'</h2>
       <h2>'.$users[$i]['name'].'</h2>
       <h3>'.$users[$i]['username'].'</h3>
       <h3>'.$users[$i]['email'].'</h3>
       <h3>'.$users[$i]['address']['street'].'</h3>
       </div>
       
       '; 
        
    }
    echo '</pre>'



?>

        </div>
        </div>
        </div>
          
    
   
    
</body>
</html>