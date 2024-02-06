<script src="https://kit.fontawesome.com/c292d46b9d.js" crossorigin="anonymous"></script>
<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-1.jpg">

  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      <i><img style="width:100px;" src="{{ asset('img/logo.png') }}"></i>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
        <i class="fa-solid fa-bars"></i>
          <p>{{ __('Menu') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.show') }}">
                <span class="sidebar-mini"> <i class="fa-solid fa-user"></i> </span>
                <span class="sidebar-normal">{{ __('Mi perfil') }} </span>
              </a>
            </li>
            @can('user_index')
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <i class="material-icons">perm_identity</i>
                <span class="sidebar-normal"> Usuarios </span>
              </a>
            </li>
            @endcan
            @can('post_index')
            <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('posts.index') }}">
                <i class="material-icons">library_books</i>
                  <p>{{ __('Posts') }}</p>
              </a>
            </li>
            @endcan
            @can('role_index')
            <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('roles.index') }}">
                <i class="material-icons">account_box</i>
                  <p>{{ __('Roles') }}</p>
              </a>
            </li>
            @endcan
            @can('permission_index')
            <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('permissions.index') }}">
                <i class="material-icons">key</i>
                <p>{{ __('Permissions') }}</p>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
