<?php



  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
  header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
  header("Content-Type: application/json; charset=utf-8");



  require "config.php";

  //  $data = file_get_contents("php://input");

    $data = file_get_contents("php://input");

    if (isset($data)) {

        $request = json_decode($data);

        

         
          

          
                                }


        $response = array();


           

          
                                
  $result = mysqli_query($con,"SELECT * from productreviews where productId = '$request'");

  


  while($row = mysqli_fetch_array($result))
        {
           
           
            $obj = new stdClass;
         
              $obj->review = $row['review'];
               $obj->quality = $row['quality'];
                $obj->name = $row['name'];
                
                
              
                   




            
           array_push($response, $obj);
           

           
          
           
            
        }
        


  

 


 echo json_encode($response);
 

 //echo json_encode( $response);

?>