<!-- create html file -->
<! DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="@vite('resources/css/app.css')">
<script>
    document.getElementById("btn-home").addEventListener("click", function() {
      window.location.href = "{{ route('home') }}";
    });
    document.getElementById("btn-login").addEventListener("click", function() {
      window.location.href = "{{ route('login') }}";
    });
    document.getElementById("btn-register").addEventListener("click", function() {
      window.location.href = "{{ route('register') }}";
    });
</script>

  
<body>
    <div class="navbar">
        <button>
            <a href="{{ route('home') }}">Home</a>
          </button>
          
          <button>
            <a href="{{ route('login') }}">Login</a>
          </button>
          
          <button>
            <a href="{{ route('register') }}">Register</a>
          </button>
        @yield('bladenavbar')
    </div>
</body>
</html>