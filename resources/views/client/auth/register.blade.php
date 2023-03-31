<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Mulish&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Registration Page</title>
  </head>
  <body>
    <div class="v85_5">
      <section>
        <div class="v85_6"></div>
        <div class="v85_7">
          <div class="v85_8"></div>
          <div class="v85_9">
            <div class="v85_10">
              <div class="v85_11"></div>
              <div class="v85_12"></div>
              <div class="v85_13"></div>
            </div>
            <div class="v85_14">
              <span class="v85_15"
                >Trusted Digital Investment Ideas Platform</span
              >
            </div>
          </div>
        </div>
      </section>
      <div class="v85_17">
        <div class="v85_28">
          <div class="v85_29"></div>
          <span class="v85_30">Logo</span>
        </div>

        <div class="v90_43">
          <span class="v85_26">Create an Account</span>
          <span class="v90_39">
            Set up your account and start exploring investment ideas.
          </span>
        </div>

        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="v85_37">
            <label for="firstname">
              <span class="v85_33">First Name</span>

              <div>
                <input
                  type="text"
                  class="v85_34"
                  id="first_name"
                  name="first_name"
                  placeholder="Enter First Name"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>
          <div class="v85_38">
            <label for="lastname">
              <span class="v85_35">Last Name</span>
              <div>
                <input
                  type="text"
                  class="v85_36"
                  placeholder="Enter Last Name"
                  id="last_name"
                  name="last_name"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>
          <div class="v90_40">
            <label for="email">
              <span class="v90_41">Email Address</span>
              <div>
                <input
                  type="text"
                  class="v90_42"
                  placeholder="Enter Email Address"
                  id="email"
                  name="email"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>
          <div class="v90_44">
            <label for="password">
              <span class="v90_45">Password</span>
              <div>
                <input
                  type="password"
                  class="v90_46"
                  name="password"
                  id="password"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>
          <div class="v202_6">
            <label for="confirmpassword">
              <span class="v202_7">Confirm Password</span>
              <div>
                <input
                  type="password"
                  class="v202_8"
                  name="password_confirmation"
                  id="password_confirmation"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>

          <div class="v85_21">
            <a href="verification.html">
              <button
                class="v85_22"
                type="submit"
                onclick="displayVerificationMessage()"
              >
                <span class="v85_21"></span>
                <span>NEXT</span>
              </button>
            </a>
          </div>

          <div class="v85_32">
            <div class="v85_24"></div>
            <span class="v85_27">
              Already Have an account?
              <a href="{{ route('login') }}">Login</a>
            </span>
          </div>
        </form>
      </div>
    </div>

    <!-- <script src="verificationPage.js"></script> -->
  </body>
</html>
