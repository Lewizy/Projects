
<?php

  print_r($_POST);

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Contact Form</title>
  </head>
  <body>
      <div class="container">
      
        <h1>Get in touch!</h1>
        <div id="error"></div>
        
        <form method= "post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject">
  </div>
   
    <div class="form-group">
    <label for="content">What would you like to talk about?</label>
    <textarea class="form-control" id="content" name="content"rows="3"></textarea>
  </div>
          
  <button type="submit" id="submitBtn"class="btn btn-primary">Submit</button>
</form>
 
      
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    
      <script>
      
            //Stop form from submitting
    $("form").submit(function(e){
        e.preventDefault();
        var error = ""; 
      
      if($("#email").val() == ""){
          error = error + "The email field is required <br>";
        }
        
      if($("#subject").val() == ""){
          error = error + "The subject field is required <br>";
        }
      
      if($("#content").val() == ""){
          error = error + "The content field is required";
        }
      
      if(error != ""){
 
        $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form: </strong></p> ' +error+ '</div>');
      
      }else{
        $("form").unbind("submit").submit();
      }
      
      
    });
      
      
      </script>
    
    
  </body>
</html>
