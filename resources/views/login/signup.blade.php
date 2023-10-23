<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarGarage | signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>

  <style>
  body
  {
    background-color: #1d2224;
    color: #ffffff;
  }
</style>
  
<body>

<section class="background-radial-gradient overflow-hidden">
  <style>


  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-1">
    <div class="row gx-lg-5 align-items-center mb-2">
      <div class="col-lg-6 mb-1 mb-lg-0" style="z-index: 10">
        <h1 class="my-2 display-5 fw-bold ls-tight" style="color: #ffcc00"> <!-- Golden Text -->
          Car Rental Made Easy With Great Offers<br />
          <span style="color: #e68a00">Around The World</span> <!-- Catchy Phrase -->
        </h1>
        <p class="mb-5 opacity-70" style="color: #ffffff"> <!-- White Text -->
        "Streamline Your Adventures with Our Car Rental Magic!"
        "Effortless Car Rentals,
        "Your Journey, Your Way!"
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="">
          <div class=" px-4 py-5 px-md-5">
            <form method="post" action="{{url('signup/Account')}}">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              @csrf
              @method('GET')
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label text-white" for="form3Example1">First name</label>
                    <input type="text" id="form3Example1" class="form-control bg-white" required name="fname" />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label text-white" for="form3Example2">Last name</label>
                    <input type="text" id="form3Example2" class="form-control bg-white" required name="lname"/>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
              <label class="form-label text-white" for="form3Example3">Email address</label>
                <input type="email" id="form3Example3" class="form-control bg-white" required name="email" />
              </div>
              <!---username input --->
              <div class="form-outline mb-4">
              <label class="form-label text-white" for="form3Example3">username</label>
                <input type="text" id="form3Example3" class="form-control bg-white" required name="username" />
        
              </div>

              <!---telephone input --->
              <div class="form-outline mb-4">
              <label class="form-label text-white"  for="form3Example3">Telephone</label>
                <input type="tel" id="form3Example3" class="form-control bg-white" required name="tel" />
          
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
              <label class="form-label text-white" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control bg-white" required name="password"/>
       
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="text-center">
              <a href="{{ url('login/login') }}">Already have an account? Sign in here</a>
              </div>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
</body>
</html>