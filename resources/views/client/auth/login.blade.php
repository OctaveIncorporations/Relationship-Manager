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
    <title>Client Login</title>
  </head>

  <body>
    <div class="v91_127">
      <div class="v91_128"></div>
      <div class="v91_129">
        <div class="v91_130"></div>
        <div class="v91_131">
          <div class="v91_132">
            <div class="v91_133"></div>
            <div class="v91_134"></div>
            <div class="v91_135"></div>
          </div>
          <div class="v91_136">
            <span class="v91_137">
              Trusted Digital Investment Ideas Platform
            </span>
          </div>
        </div>
      </div>
      <div class="v91_139">
        <div class="v91_140"></div>
        <div class="v210_7"></div>

        <div class="v91_143">
          <span class="v91_144">Client Login</span>
          
          <span class="v91_145">
            Sign in to your account and manage your investments
          </span>
          <span class="v91_146">
          {{-- @error('email')
                       {{ $message }}
                        @enderror --}}
          <span class="v91_145">
          </span>
        </div>

        <div class="v91_149">
          <div class="v91_150"></div>
          <span class="v91_151">Logo</span>
        </div>
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="v91_158">
            <label for="email">
              <span class="v91_159">Email Address</span>

              <div>
                <input
                  type="text"
                  class="v91_160"
                  name="email"
                  id="email"
                  placeholder="example@gmail.com"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>
          <div class="v91_161">
            <label for="">
              <span class="v91_162">Password</span>
              <div>
                <input
                  type="password"
                  class="v91_163"
                  name="password"
                  id="password"
                  style="font-size: 24px;"
                  required
                />
              </div>
            </label>
          </div>
          <div>
            <input type="checkbox" id="show-password" />
            <div>
              <label for="show-password" class="v210_8">Show password</label>
            </div>
          </div>
          <a href="">
            <button class="v91_141" id="log-in">
              <span class="v91_142">NEXT</span>
            </button>
          </a>
        </form>
        <div>
          <a href="" class="forgetPassword">
            <span class="v210_11">Forgot Password?</span>
          </a>
        </div>
        <div class="v91_146">
          <div class="v91_147"></div>

          <span class="v91_148">
            Don’t Have an account?
            <a href="{{ route('register') }}">Create an Account</a>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
