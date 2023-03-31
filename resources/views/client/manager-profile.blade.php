<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Mulish&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arial&display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/rm-profile-email-css/main.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="v520_6">
        <div class="v520_7"></div><span class="v520_8">Relationship manager Profile</span><span class="v520_11">Send An Email</span>
        <div class="v520_12">
            <div class="v520_13"></div><span class="v520_14">Home</span>
            <div class="v520_15"><a href="{{route('client.profile')}}" style="text-decoration:none;" class="v520_16">Profile</a></div><a href="{{route('relationship-managers')}}" style="text-decoration: none;" class="v520_17">Managers</a><span class="v520_18">Messages</span><span href="{{route('relationship-managers')}}" style="text-decoration: none;" class="v520_19">Settings</span><form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form><a href="javascript:void(0)" onclick="$('#logout').submit()" class="v520_20">Log Out</a>
            <div class="v520_21"><span class="v520_22">Logo</span></div>
        </div>
        <div class="v520_23">
            <div class="v520_24"></div>
            <div class="v520_25"></div><span class="v520_28">{{ $manager->email }}</span><span class="v520_31">Email</span><span class="v520_27">{{ $manager->manager_name }}</span><span class="v520_26">Name</span>
            <div class="v520_34">
                <div class="v520_35"></div>
                <div class="v520_36"></div>
            </div>
        </div>
        <div class="v535_3">
            <div class="v535_4"></div>
            <form action="{{route('email.relationship-manager', $manager->id)}}" method="post">
                @csrf
            <input name="subject" class="v535_20 display-4" placeholder="Subject" required>
            <textarea name="body" class="v535_21" style="font-size: 24px;" required></textarea>
            <div class="v535_33"><button type="submit" class="v535_32 btn btn-success btn-lg">Send</button></div>
        </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</html>