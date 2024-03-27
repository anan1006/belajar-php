<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>JKT48 | Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
      <link rel="icon" type="image/x-icon" href="assets/img/JKT48.png" />
      <!-- Style -->
      <style>
         body {
            background-color: rgb(218, 218, 218);
         }

         .row {
            background: #fff;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
            margin: auto;
            margin-top: 10%;
         }
      </style>
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <section class="form my-4 mx-5">
         <div class="container">
            <div class="row g-0">
               <div class="col-lg-5 login-img">
                  <img src="assets/img/login.jpeg" class="img-fluid" alt="" />
               </div>
               <div class="col-lg-7 p-5 my-md-5">
                  <div class="logo mb-4">
                     <a href="/"><img src="assets/img/JKT48.png" alt="" /></a>
                  </div>
                  <h4>Login to your account</h4>
                  <form action="/login" method="POST">
                     <div class="form-row">
                        <div class="col-lg-7">
                           <input type="text" placeholder="Type your username here..." class="form-control my-3 p-3" name="username" required />
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-lg-7">
                           <input type="password" placeholder="Type your password here..." class="form-control my-3 p-3" name="password" required />
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-lg-7">
                           <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                        </div>
                     </div>
                  </form>
                  
                  <a href="assets/pages/produk.php" class="back2Home">Lihat Produk</a>
               </div>
            </div>
         </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   </body>
</html>
