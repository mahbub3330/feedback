<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-comments-o fa-fw"></i> Feedback<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.questions') }}"><i class="fa fa-question-circle fa-fw"></i> Make Question</a>

                    </li>
                    <li>
                        <a href="{{ route('admin.index.feedback') }}"><i class="fa fa-comments" aria-hidden="true"></i> Show Feedback</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.show.topfeedback') }}"><i class="fa fa-comments" aria-hidden="true"></i> Top Feedback</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Employee<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.employee.index') }}"><i class="fa fa-table fa-fw"></i> Manage Employee</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>
