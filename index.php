<html>
    <head>
        <title>Home</title>
</head>
<body>
    <form action="index.php" method="post" name="search">
    <h3>Enter your phone number</h3>
    <input type="text" name="searchPhone">
    <input type="submit" name="submit" value="Search">
</form>

<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit']))
{
    $search= $_POST['searchPhone'];
    //search phone number in visitor collector
    // $result= $db->visitor->find(["phone"=>$search],[error_message:1]);
    // print(db.jobs.find({"state":"failed"}, {error_message:1}));

    //This is working 
    // $result=$db.visitor.find({'phone'=>$search},{"_id":1});
    $result = $db->visitor->findOne(
        [
            'phone'=>$search,
        ],
        [
            'projection'=> [
                'name'=>1,
                'phone'=>1,
                'email'=>1,
            ],
        ]
    );
    if ($result== NULL){
        echo"not found";
    }else{
            echo "Hello ".$result['name']."";
        }
    
    
    // var_dump($result);
    // print_r($result);
    // foreach($result as $res){
        // print_r($result);
        // var_dump($res);
        // echo"data:".$res['name']."";
        // print_r($res);
        //validate if array is null
    


    //     // if(!$res){
    //     //     echo"<h2> Not found</h2>";
    //     // }
    //     // else{
    //     //     echo("result found");
    //     // }
        
        
    // }
    
}


?>
</body>
</html>