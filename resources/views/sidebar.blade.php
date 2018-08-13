@section ('side')
<div id="sidebar"><a href="{{ url ('home') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ Request::is ('home') ?  'active'  : '' }}"><a href="{{ url ('home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu{{ Request::is ('/member') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-signal"></i> <span>Members</span></a>
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Follow Ups</span> <span class="label label-important">3</span></a> -->
      <ul>
        <li><a href="{{ route ('member.index') }}">View Members</a></li>
        <li><a href="{{ route ('member.create') }} ">Add Members</a></li>
      </ul>
    </li>
    <li class= "submenu {{ Request::is ('events/create') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-inbox"></i> <span>Events</span></a>
    <ul>
        <li><a href="{{ route ('events.index') }}">View Events</a></li>
        <li><a href="{{ route ('events.create') }} ">Add Events</a></li>
         <!-- <li><a href="{{ route ('events.create') }} ">Manage Calender</a></li> -->
      </ul>
    </li>
    <li class="submenu {{ Request::is ('pledge/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-th"></i> <span>Pledges</span></a>
    <ul>
        <li><a href="{{ route ('member.index') }}">View Pledges</a></li>
        <li><a href="{{ route ('member.create') }} ">Add Pledges</a></li>
        <li><a href="{{ route ('member.create') }} ">Manage Campaigns</a></li>
    </ul>
    </li>
    <li class="submenu {{ Request::is ('member/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-fullscreen"></i> <span>Contributions</span></a>
    <ul>
        <li><a href="{{ route ('member.index') }}">View Pledges</a></li>
        <li><a href="{{ route ('member.create') }} ">Add Pledges</a></li>
        <li><a href="{{ route ('member.create') }} ">Manage Campaigns</a></li>
    </ul>
    </li>
    <li class="submenu {{ Request::is ('followup/create') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-th-list"></i> <span>Follow Ups</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="{{ route ('followup.index') }}">View Follow ups</a></li>
        <li><a href="form-validation.html">My Follow ups</a></li>
        <li><a href="form-wizard.html">Add Follow ups</a></li>
        <li><a href="form-wizard.html">Manage Follow up Categories</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('report/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-tint"></i> <span>Reports</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">Cash Flow</a></li>
        <li><a href="form-validation.html">Profit / Loss</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('assets/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-pencil"></i> <span>Assets</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">View Assets</a></li>
        <li><a href="form-validation.html">Add Asset</a></li>
        <li><a href="form-wizard.html">Manage Asset Types</a></li>
     </ul>
    </li>
    <li class="submenu {{ Request::is ('message/create') ?  'active'  : '' }}"> <a href="#"><i class="icon icon-file"></i> <span>Messaging</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">Email</a></li>
        <li><a href="form-validation.html">SMS</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('user/create') ?  'active'  : '' }}"> <a href="#"><i class="icon icon-info-sign"></i> <span>Users</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Login Info</span></a></li>
  </ul>
</div>
@endsection

