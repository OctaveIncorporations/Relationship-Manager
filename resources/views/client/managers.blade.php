<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Mulish&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arial&display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/rmcss/main.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="v527_143">
        <div class="v529_55"><span class="v527_145">View Relationship managers</span></div>
        <div class="v527_149">
            <div class="v527_150"></div><span class="v527_151">Home</span>
            <div class="v527_152"><a href="{{route('client.profile')}}" style="text-decoration:none;" class="v527_153">Profile</a></div><a href="{{route('relationship-managers')}}" style="text-decoration: none;" class="v527_154">Managers</a><span class="v527_155">Managers</span><span class="v527_156">Settings</span><form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form><a href="javascript:void(0)" onclick="$('#logout').submit()"><span class="v527_157">Log Out</span></a>
            <div class="v527_158"><span class="v527_159">Logo</span></div>
        </div>

        <table class="v529_30 table" style="width:60%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($managers as $key => $manager)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{ $manager->manager_name }}</td>
                    <td>{{ $manager->email}}</td>
                    <td><a class="btn btn-secondary" href="{{route('view.relationship-manager.profile', $manager->id)}}">View Profile</a></td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="4">No Relationship Manager Available</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</html>