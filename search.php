<html>
    <head>
        <title>Home</title>
</head>
<body>
    <form action="index.php" method="post" name="search">
    <h3>Enter your phone number</h3>
    <input type="text" name="searchPhone">
    <input type="submit" name="submit1" value="Search">
</form>

<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit1']))
{
    $search= $_POST['searchPhone'];
    
    $result = $db->visitor->find(
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
    // var_dump($result);
     print_r($result);
    
    
}


?>
</body>
</html>