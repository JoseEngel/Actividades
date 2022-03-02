<header>
       <div class="container mt-3">
           <h2>Activities</h2>
           <p>Turn the nav menu into navigation tabs with the .nav nav-tabs class. Add the active class to the active/current link. If you want the tabs to be togglable, see the last example on the tutorial page.</p>
           <ul class="nav nav-tabs">
               <li class="nav-item">
                   <a class="nav-link" href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{route('daily-actv.index')}}" class="{{request()->routeIs('tareas.*') ? 'active' : ''}}">Actividades</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Tabla1</a>
               </li>
           </ul>
       </div>

</header>
