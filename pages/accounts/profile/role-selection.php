<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="imahe/x-icon" href="../../../res/images/logo.ico">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./../../../styles/global.css">
  <title>EPAY | Role Select</title>
  <style>
    .currentProgress {
      font-family: 'San Francisco Rounded Heavy';
    }
  </style>
</head>
<body>

  <div id="navBar" class="z-50 navbar border-b-[1px] border-black glass top-0 sticky">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="./pages/accounts/sign-up.php">Get Started</a></li>
          <li><a>Testimony</a></li>
          <li><a>SVFC</a></li>
          <li><a>Contact Us</a></li>
          <li><a>About Us</a></li>
        </ul>
      </div>
    </div>
    <div class="navbar-center">
      <a class="btn btn-ghost text-xl">EPAY</a>
    </div>
    <div class="navbar-end">
      <a href="./login.php" class="link hover:cursor link-secondary">Log In Instead?</a>
    </div>
  </div>

  <main>
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content flex-col w-11/12 gap-20 lg:justify-between lg:flex-row">
        <div class="text-center flex flex-col-reverse">
          <ul class="steps">
            <li class="currentProgress step step-secondary">Registration</li>
            <li class="currentProgress step step-secondary">Role Selection</li>
            <li class="step">Personal Info</li>
            <li class="step">Review Info</li>
          </ul>
          <div>
            <h1 class="text-3xl text-center font-bold">Select Appropriate Role</h1>
            <p class="py-6 text-center">Select a Role to continue.</p>
          </div>
        </div>
        <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
          <form id="roleForm" method="post" class="card-body">
            <div class="form-control">
              <label class="label">
                <span class="label-text">Email</span>
              </label>
              <select id="roleSelect" name="role" required aria-required="true" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Your Role</option>
                <option>Admin</option>
                <option>Student</option>
              </select>
            </div>
            <div class="form-control mt-6">
              <button type="submit" class="btn btn-secondary bg-[#ff00d3] hover:scale-105">
                CONTINUE
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script>
    $(document).ready(function() {
      $("#roleForm").submit(function(event) {
      // Prevent default form submission
      event.preventDefault();
      
      // Check if a role is selected
      if ($("#roleSelect").val() === null) {
        // If no role is selected, show an alert
        alert("Please select your role.");
      } else {
        // If a role is selected, submit the form
        this.submit();
      }
    });
    });
  </script>
</body>
</html>