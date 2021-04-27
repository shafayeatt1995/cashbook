
<!-- #END# Left Sidebar
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('backend/images/user.png') }}" width="48" height="48" alt="User" />
            </div>
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
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="material-icons">attach_money</i>
                        <span>Main Balance</span>
                    </a>
                </li>
                <li class="{{ Request::is('income*') ? 'active' : '' }}">
                    <a href="{{ route('income.index') }}">
                        <i class="material-icons">vertical_align_bottom</i>
                        <span>Income</span>
                    </a>
                </li>
                <li class="{{ Request::is('expense*') ? 'active' : '' }}">
                    <a href="{{ route('expense.index') }}">
                        <i class="material-icons">vertical_align_top</i>
                        <span>Expense</span>
                    </a>
                </li>
                <li class="{{ Request::is('earning*') ? 'active' : '' }}">
                    <a href="{{ route('earning.index') }}">
                        <i class="material-icons">vertical_align_top</i>
                        <span>Earning</span>
                    </a>
                </li>
                <li class="header">Setting</li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons">power</i>
                        <span>Sign Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>-->
