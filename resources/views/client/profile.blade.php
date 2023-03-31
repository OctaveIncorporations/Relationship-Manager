<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Client Profile</title>
  <meta name="description" content="Figma htmlGenerator" />
  <meta name="author" content="htmlGenerator" />
  <link href="https://fonts.googleapis.com/css?family=Mulish&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
</head>

<body>
  <div class="e2_163">
    <div class="e2_164"></div>

    <!-- Side Navbar -->
    <div class="e5_255">
      <div class="e2_165"></div>
      <span class="e2_169">Home</span>
      <a href="{{route('relationship-managers')}}" style="text-decoration: none;" class="e2_172">Managers</a>
      <div class="e2_170">
        <span class="e2_171">Profile</span>
      </div>

      <span class="e2_173">Messages</span>
      <span class="e2_174">Settings</span>
      <form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form>
      <a href="javascript:void(0)" onclick="$('#logout').submit()"><span class="e121_122">Log Out</span></a>
      <div class="e2_175">
        <span class="e2_176">Logo</span>
      </div>
    </div>

    <!-- Profile div -->
    <span class="e2_167">Profile</span>
    <div class="e5_256">
      <div class="e2_178"></div>
      <div class="e3_242"></div>
      <span class="e2_179">Name</span>
      <span class="e3_199">{{$client->full_name}}</span>
      <span class="e3_200">{{ $client->username ?? 'Not Set' }}</span>
      <span class="e3_201">{{ $client->phone_number ?? 'Not Set'}}</span>
      <span class="e3_190">Username</span>
      <span class="e3_191">Phone</span>
      <button class="e5_267 btn btn-secondary"><a style="color:black; text-decoration:none" href="{{ route('client.edit.profile', Auth::User()->id) }}">Edit Profile</a></button>
    </div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</html>