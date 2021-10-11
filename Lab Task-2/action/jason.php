<?php
 	   	 
			 
			  if($_SERVER["REQUEST_METHOD"]=="POST")
			  {
				  $abc="";
				  
			  	if(isset($_REQUEST["JAVA"]))
				  {
					$abc= $_REQUEST["JAVA"];
				  }
				if(isset($_REQUEST["PHP"]))
				  { 
					$abc= $_REQUEST["PHP"];
				  }
				if(isset($_REQUEST["CPP"]))
				  {
				 $abc= $_REQUEST["CPP"];
				 }

		
		  $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'lastttname'=> $_POST["lasttname"],
		  'age'=>$_POST["age"],
		  'designation'=>$_POST["designation"],
		  'language'=>$abc,
		  'email'=>$_POST["email"],
		  'password'=>$_POST["password"],
		  'image'=>$_FILES["filetoupload"]["tmp_name"],

	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
      
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

			  }

?>