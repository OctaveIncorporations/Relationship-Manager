<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Mulish&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arial&display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/edit-profile-css/main.css')}}" rel="stylesheet" />
    <title>Edit Profile</title>
</head>

<body>
    <div class="v527_143">
        <div class="v527_144"></div><span class="v527_145">Edit Profile</span>
        <div class="v527_149">
            <div class="v527_150"></div><span class="v527_151">Home</span>
            <div class="v527_152"><span class="v527_153">Edit Profile</span></div><span class="v527_154">Managers</span><span class="v527_155">Messages</span><span class="v527_156">Settings</span><form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form><a href="javascript:void(0)" onclick="$('#logout').submit()"><span
                class="v527_157">Log Out</span></a>
            <div class="v527_158"><span class="v527_159">Logo</span></div>
        </div>
        <div class="v527_160">
            <div class="v527_161"></div>
            <form action="{{route('client.update.profile', Auth::User()->id) }}" method="post">
                @csrf
            <input class="v527_249" name="phone_number" value="{{ old('phone', Auth::User()->phone_number)}}" placeholder="Enter Phone Number"><span class="v527_248">Phone</span>
            <input class="v527_215" name="first_name" value="{{ old('phone', Auth::User()->first_name)}}" placeholder=""><span class="v527_214">First Name</span>
            <input class="v527_245" name="last_name" value="{{ old('phone', Auth::User()->last_name)}}" ><span class="v527_244">Last Name</span>
            <input class="v527_247" name="username"value="{{ old('phone', Auth::User()->username)}}" placeholder="Enter Username"><span class="v527_246">Username</span>
            <button type="submit" class="btn btn-secondary v527_256">Update Profile</button></div>
        </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</html>