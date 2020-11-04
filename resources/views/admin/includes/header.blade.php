<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Skylark Soft Limited SLS</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <!-- /.dropdown -->


    <!-- /.dropdown -->

    <li class="dropdown">


        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            {{--           <span class="caret"></span>--}}
            <i class="fa fa-user fa-fw"></i>  {{ Auth::user()->name ?? '' }}   <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            {{--            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
            {{--            </li>--}}
            {{--            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
            {{--            </li>--}}
            {{--            <li class="divider"></li>--}}
            {{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
            {{--               --}}
            {{--            </a>--}}
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{--                    <i class="fa fa-log fa-fw"></i>Logout--}}
                    <i class="fa fa-sign-out fa-fw"></i>Log out


                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>



