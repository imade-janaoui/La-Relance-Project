<!DOCTYPE html>  
 <html lang="en">  
  <head>  
   <meta charset="UTF-8" />  
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
   <title>La Relance</title>  
   <link rel="icon" type="image/jpg"  href="img/logo_small.jpg">
   <link rel="stylesheet" href="css/index.css" />  
   <!-- Compiled and minified CSS -->  
   <link  
    rel="stylesheet"  
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  
   />  
   <!-- Compiled and minified JavaScript -->  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
  </head>  
  <body>  
      <form action="inc/service.php" method="post">
   <div class="login-div">  
    <div >  
     <div class="logo">
         <img src="img/logo.png" alt="" srcset="">
     </div>  
    </div>  
    <div class="row center">  
     <h5>Sign in</h5>  
     <h6>Use your codewith_random account</h6>  
    </div>  
    <div >  
     <div class="input-field col s12">  
      <input id="email_input" type="email" class="validate" name="email_user" required />  
      <label for="email_input" >Email</label>  
     </div>  
    </div>  
    <div >  
     <div class="input-field col s12">  
      <input id="password_input" type="password" class="validate" name="pwd_user" required />  
      <label for="password_input">Password</label>  
       
     </div>  
      
      
     <div >  
       
      <div class="col s6 right-align">  
       <!-- <a class="waves-effect waves-light btn" href="#">Login</a>  -->
       <button class="waves-effect waves-light btn" name="login"  type="submit">Login</button> 
      </div>  
     </div>  
    </div>  
   </div> 
   </form> 
  </body>  
 </html>  


