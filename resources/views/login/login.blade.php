<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carGarage | Signin</title>
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
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
</head>
  
<body>

<section class="background-radial-gradient overflow-hidden">
  <style>
   .background-radial-gradient {
  background-color: #000000; /* Black Background */
  background-image: radial-gradient(650px circle at 0% 0%,
      #000000 15%, /* Black Gradient */
      transparent 100%),
    radial-gradient(1250px circle at 100% 100%,
      #000000 15%, /* Black Gradient */
      transparent 100%);
}



    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

   
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #ffcc00"> <!-- Golden Text -->
          Car Rental Made Easy With Great Offers<br />
          <span style="color: #e68a00">Around The World</span> <!-- Catchy Phrase -->
        </h1>
        <p class="mb-4 opacity-70" style="color: #ffffff"> <!-- White Text -->
        "Streamline Your Adventures with Our Car Rental Magic!"
        "Effortless Car Rentals,
        "Your Journey, Your Way!"
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="{{url('login/check_login')}}" method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
               <!-- Email input -->
               @csrf
               @method('GET')
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" required name="email"/>
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" required name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>
                  @if (Session::has('error_msg'))
                  <div class="text-center">
                  <p class="text-danger">{{session('error_msg')}}</p>
                  </div>
                  @endif

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Remember me
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign in    
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign in with:</p>
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
            </form>
            <div class="text-center">
                 <a href="{{ url('login/signup') }}">Don't have an account? Sign up here</a>            
                </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
</body>
</html>