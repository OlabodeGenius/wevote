<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt blue"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog green"></i>
              <p>
                Manage Candidiate
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route("candidate") }}" class="nav-link">
                  <i class="fas fa-unlock-alt nav-icon"></i>
                  <p>Add Candidiate</p>
                </a>
              </li>

              <li class="nav-item">
            <a href="{{ url('/presidential/candidate') }}" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave cyan"></i>
              <p>
                Presidential Candidiate
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ url('/governoship/candidate') }}" class="nav-link">
              <i class="nav-icon fas fa-users-cog purple"></i>
              <p>
                Governorship Candidiate
              </p>
            </a>
          </li>
            
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('/parties') }}" class="nav-link">
              <i class="nav-icon fas fa-users-cog purple"></i>
              <p>
                Parties
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ url('/vote') }}" class="nav-link">
              <i class="nav-icon fas fa-users-cog purple"></i>
              <p>
                Cast Vote
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                       <i class="nav-icon fas fa-power-off red"></i>
                         <p>{{ __('Logout') }}</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
             </form>
          </li>
        </ul>