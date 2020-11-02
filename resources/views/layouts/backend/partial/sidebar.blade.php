<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
{{--            <div class="image">--}}
{{--                <img src="" width="48" height="48" alt="User" />--}}
{{--            </div>--}}
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>

            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
{{--start admin section--}}
                @if(Request::is('admin*'))

                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>




                <li class="header">System</li>


                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{--                                {{ __('Logout') }}--}}
                            <i class="material-icons">input</i>
                            <span>Logout</span>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
{{--end admin section--}}
{{--                start author section--}}

                @if(Request::is('employee*'))
                    <li class="{{ Request::is('employee/dashboard') ? 'active':'' }}">
                        <a href="{{ route('employee.dashboard') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>


                    <li class="header">System</li>
{{--                    <li class="{{ Request::is('author/settings*') ? 'active' : '' }}">--}}
{{--                        <a href="#">--}}
{{--                            <i class="material-icons">settings</i>--}}
{{--                            <span>Settings</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{--                                {{ __('Logout') }}--}}
                            <i class="material-icons">input</i>
                            <span>Logout</span>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </li>

                @endif

{{--end author section--}}

            </ul>
        </div>

    </aside>
    <!-- #END# Left Sidebar -->

</section>
