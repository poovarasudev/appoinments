<div class="page-header-inner">
    <div class="page-header-inner">
        <div class="navbar-header">
            <a href="{{ url('/') }}"
               class="navbar-brand">
                @lang('quickadmin.quickadmin_title')
            </a>
        </div>
        <a href="javascript:;"
           class="menu-toggler responsive-toggler"
           data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a>Hi, <b>{{ auth()->user()->name }}</b></a>
                </li>
            </ul>
        </div>
    </div>
</div>

