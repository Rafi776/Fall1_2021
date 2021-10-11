<?php

    $fname="";
    $lname="";
    $age="";
    $designation="";
    $language="";
    $v1=$v2=$v3="";
    $email="";
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $validfname=$_REQUEST["firstname"];
    $validlname=$_REQUEST["lasttname"];
    $validateage=$_REQUEST["age"];
    $validateemail=$_REQUEST["email"];

    if(empty($validfname))
    {
        echo"Please enter First Name";
    }
    else{$fname=$_REQUEST["firstname"];}


    if(empty($validlname))
    {
        echo"Please enter Last Name";
    }
    else{$lname=$_REQUEST["lasttname"];}


    if(empty($validateage))
    {
        echo"Please enter Your Age";
    }
    else{$age=$_REQUEST["age"];}



    if(isset($_REQUEST["designation"]))
    {
    $designation= $_REQUEST["designation"];
    }
    else{
    $designation= "please select at least one radio";
    
    }



    if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["CPP"]))
    {
    $language = "please select at least one checkbox";
     
    }
   else{
   if(isset($_REQUEST["JAVA"]))
     {
       $v1= $_REQUEST["JAVA"];
     }
   if(isset($_REQUEST["PHP"]))
     { 
       $v2= $_REQUEST["PHP"];
     }
   if(isset($_REQUEST["CPP"]))
     {
    $v3= $_REQUEST["CPP"];
    }
    }




    if(empty($validateemail) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $email="you must enter email";
    }
    else{
        $email=$_REQUEST["email"];
    }


//File upload code here.........
  $target_dir="files/";
  $target_file="files/".$_FILES["filetoupload"]["name"];

if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file))
{
  echo"you have uploaded".$_FILES["filetoupload"]["name"];
  echo"<img src='".$target_file."'>";

}

else {

  echo "sorry...there was an error";
}


}
?>
