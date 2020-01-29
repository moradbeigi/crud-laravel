<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
<a class="navbar-brand" href="#">Books</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('create')}}">Addnew</a>
        </li>

        @auth
            @if (Auth::user()->role == 1)
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}"> panel admin </a>
                </li>
            @endif
        @endauth
       
  
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Users</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="{{ route('register') }}">register</a>
           <a class="dropdown-item" href="{{ route('login') }}">login</a>

          <a class="dropdown-item" href="{{route('show')}}">show your book</a>


          </div>
        </li>
  
      </ul>
      <!-- Links -->
  
      
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->