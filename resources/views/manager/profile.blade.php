<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Manager Profile</title>
  <meta name="description" content="Figma htmlGenerator" />
  <meta name="author" content="htmlGenerator" />
  <link href="https://fonts.googleapis.com/css?family=Mulish&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
</head>

<body>
  <div class="e2_163">
    <div class="e2_164"></div>

    <!-- Side Navbar -->
    <div class="e5_255">
      <div class="e2_165"></div>
      <span class="e2_169">Home</span>
      <span class="e2_172">Manage Ideas</span>
      <div class="e2_170">
        <span class="e2_171">Profile</span>
      </div>

      <span class="e2_173">Messages</span>
      <span class="e2_174">Settings</span>
      <form id="logout" action="{{ route('relationship-manager.logout') }}" method="POST">@csrf</form>
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
      <span class="e3_199">{{Auth::guard('relationshipManager')->user()->manager_name}}</span>
      <span class="e3_200">32years</span>
      <span class="e3_201">Software Developer</span>
      <span class="e3_202">Introvert</span>
      <span class="e3_190">Age</span>
      <span class="e3_191">Occupation</span>
      <span class="e3_192">Personality</span>
      <div class="e5_267">
        <div class="e5_268"></div>
        <div class="e5_269"></div>
      </div>
    </div>

    <!-- Preferences section -->
    <span class="e3_194">Your preferences</span>

    <span class="e2_187">Product Types</span>
    <div class="e5_257">
      <div class="e2_182"></div>
      <div class="e3_236">
        <span class="e3_193">Bonds</span>
        <div class="e3_216">
          <div class="e3_217"></div>
        </div>
      </div>
      <div class="e3_235">
        <span class="e3_195">Stocks</span>
        <div class="e3_219">
          <div class="e3_220"></div>
        </div>
      </div>
      <div class="e3_237">
        <span class="e3_196">Mutual Funds</span>
        <div class="e3_221">
          <div class="e3_222"></div>
        </div>
      </div>
      <div class="e3_238">
        <span class="e3_198">Mutual Funds</span>
        <div class="e3_223">
          <div class="e3_224"></div>
        </div>
      </div>
    </div>

    <div class="e5_258">
      <span class="e2_188">Technology</span>
      <div class="e2_186"></div>
      <span class="e3_239">Mobile App</span>
      <span class="e3_240">Web App</span>
      <span class="e3_241">Social Networking</span>
    </div>

    <span class="e3_218">Industries</span>
    <div class="e5_259">
      <div class="e2_189"></div>
      <div class="e3_231">
        <span class="e3_228">add</span>
      </div>
      <span class="e3_229">Real estate</span>
      <span class="e3_230">Fashion</span>
      <span class="e3_232">Cryptocurrency</span>
      <span class="e3_233">Football</span>
      <span class="e5_264">Agriculture</span>
      <span class="e5_265">Healthcare</span>
      <span class="e5_266">Oil & Gas</span>
      <span class="e5_263">Music</span>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</html>