<?php
    require_once __DIR__.'/vendor/autoload.php';
try{
    // $client = new MongoDB\Client("mongodb://localhost:27017");
    // $client = new MongoDB\Client("mongodb+srv://sanjayhackthon:JFsz80741colenGoLP0CbkGlPWtqRLPpoCJdjRWoKPA4jbLjT4vfHVg4kw3RbsZou6ShrtmyLYaNACDbfumKiQ==@sanjayhackthon.mongo.cosmos.azure.com:10255");
    $client = new MongoDB\Client("mongodb+srv://dbuser:MongoDbuser123@cluster0.qrfplpf.mongodb.net/?w=majority");
        // MongoDB atlas connection 'mongodb+srv://dbuser:MongoDbuser123@cluster0.qrfplpf.mongodb.net/?w=majority'
        // echo"Connection was successful";
        $db = $client->VMS_DB;
              
        // $v=$client->selectCollection('VMS_DB', 'user');
        // $documeny = $v->find(['name'=>'Super admin']);
        // foreach($documeny as $doc){
        //     echo "hi".$doc['email']." welcome";
        // }
        // var_dump($documeny);
    
    }
catch(Trowable $e){
    echo " Error in connection:".$e->getMessage(). PHP_EOL;
} 
   // PHP version 7.4 used here
    // try {
    //     // connect to OVHcloud Public Cloud Databases for MongoDB (cluster in version 4.4, MongoDB PHP Extension in 1.8.1)
    //     $m = new MongoDB\Driver\Manager('mongodb+srv://dbuser:MongoDbuser123@cluster0.qrfplpf.mongodb.net/?retryWrites=true&w=majority');
    //     echo "Connection to database successfully";
        
    //     // display the content of the driver, for diagnosis purpose
    //     var_dump($m);
        
    // }
    // catch (Throwable $e) {
    //     // catch throwables when the connection is not a success
    //     echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
    // }


?>
