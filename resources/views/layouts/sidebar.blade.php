<div id="sidebar"><a href="{{ url ('home') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ Request::is ('home') ?  'active'  : '' }}"><a href="{{ url ('home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu {{ Request::is ('member', 'member/create') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-user"></i> <span>Members</span></a>
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Follow Ups</span> <span class="label label-important">3</span></a> -->
      <ul>
        <li class="{{ Request::is ('member') ?  'active'  : '' }}"><a href="{{ route ('member.index') }}">View Members</a></li>
        <li class="{{ Request::is ('member/create') ?  'active'  : '' }}"><a href="{{ route ('member.create') }} ">Add Members</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('headofdepartment', 'headofdepartment/create') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-cog"></i> <span>HeadOfDepartments</span></a>
    <ul>
        <li class="{{ Request::is ('headofdepatment') ?  'active'  : '' }}"><a href="{{ route ('headofdepartment.index') }}">View HeadOfDepartment</a></li>
        <li class="{{ Request::is ('headofdepatment/create') ?  'active'  : '' }}"><a href="{{ route ('headofdepartment.create') }} ">Add HeadOfDepartment</a></li>
      </ul>
    </li>
    <li class= "submenu {{ Request::is ('events', 'event/create') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-inbox"></i> <span>Events</span></a>
    <ul>
        <li class="{{ Request::is ('events') ?  'active'  : '' }}"><a href="{{ route ('events.index') }}">View Events</a></li>
        <li class="{{ Request::is ('event/create') ?  'active'  : '' }}"><a href="{{ route ('events.create') }} ">Add Events</a></li>
         <!-- <li><a href="{{ route ('events.create') }} ">Manage Calender</a></li> -->
      </ul>
    </li>
     <li class="submenu {{ Request::is ('campaign', 'campaign/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-th"></i> <span>Campaigns</span></a>
    <ul>
        <li><a href="{{ route ('campaign.index') }}">All Campaign</a></li>
        <li><a href="{{ route ('campaign.create') }} ">Add Campaign</a></li>
    </ul>
    </li>
    <li class="submenu {{ Request::is ('pledge', 'pledge/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-th"></i> <span>Pledges</span></a>
    <ul>
        <li><a href="{{ route ('pledge.index') }}">View Pledges</a></li>
        <li><a href="{{ route ('pledge.create') }}">Add Pledges</a></li>
    </ul>
    </li>
    <li class="submenu {{ Request::is ('contribution', 'contribution/create', 'funds', 'funds/create', 'payment/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-fullscreen"></i> <span>Contributions</span></a>
    <ul>
        <li><a href="{{ route ('contribution.index') }}">View Contributions</a></li>
        <li><a href="{{ route ('contribution.create') }} ">Add Contribution</a></li>
        <li><a href="{{ route ('funds.index') }} ">Manage Funds</a></li>
          <li><a href="{{ route ('payment.create') }} ">Manage Payment Methods</a></li>
    </ul>
    </li>
    <li class="submenu {{ Request::is ('followup', 'followupcategory', 'followup/create') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-th-list"></i> <span>Follow Ups</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="{{ route ('followup.index') }}">View Follow ups</a></li>
        <li><a href="{{ url ('followup/followupcategory') }}">My Follow ups</a></li>
        <li><a href="{{ route ('followupcategory.index') }}">Manage Expenses Type</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('expense', 'expense/data', 'expense/create', 'expensetype') ?  'active'  : '' }}"> <a href="{{ url ('#') }}"><i class="icon icon-th-list"></i> <span>Expenses</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="{{ route ('expense.index') }}">View Expenses</a></li>
        <li><a href="{{ route ('expense.create') }}">Add Expenses</a></li>
        <li><a href="{{ route ('expensetype.index') }}">Manage Expenses Type</a></li>
      </ul>
    </li>
   <!--  <li class="submenu {{ Request::is ('contribution', 'contribution/create', 'funds', 'funds/create', 'payment/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-fullscreen"></i> <span>Contributions</span></a>
    <ul>
        <li><a href="{{ route ('contribution.index') }}">View Expenses</a></li>
        <li><a href="{{ route ('contribution.create') }} ">Add Expenses</a></li>
        <li><a href="{{ route ('funds.index') }} ">Manage Funds</a></li>
          <li><a href="{{ route ('payment.create') }} ">Manage Payment Methods</a></li>
    </ul>
    </li> -->
    <li class="submenu {{ Request::is ('payroll', 'payroll/create', 'staff', 'staff/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-tint"></i> <span>Payroll</span></a>
      <ul>
        <li><a href="{{ route ('payroll.index') }}">View Payroll</a></li>
        <li><a href="{{ route ('payroll.create') }}">Add Payroll</a></li>
        <li><a href="{{ route ('staff.index') }}">Manage Staff</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('reports', 'report/cash_flow', 'report/profit_loss') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-tint"></i> <span>Reports</span></a>
      <ul>
        <li><a href="{{ route ('report.cash_flow') }}">Cash Flow</a></li>
        <li><a href="{{ route ('report.profit_loss') }}">Profit / Loss</a></li>
      </ul>
    </li>
    <li class="submenu {{ Request::is ('assets/create') ?  'active'  : '' }}"><a href="{{ url ('#') }}"><i class="icon icon-pencil"></i> <span>Assets</span></a>
      <ul>
        <li><a href="{{ url ('followup/data') }}">View Assets</a></li>
        <li><a href="#">Add Asset</a></li>
        <li><a href="#">Manage Asset Types</a></li>
     </ul>
    </li>
    <li class="submenu {{ Request::is ('email/create', 'email', 'sms/create', 'sms') ?  'active'  : '' }}"> <a href="#"><i class="icon icon-file"></i> <span>Messaging</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="{{ route ('message.index') }}">Email</a></li>
        <li><a href="{{ route ('message.create') }}">SMS</a></li>
      </ul>
    </li>
    <li class= "{{ Request::is ('settings') ?  'active'  : '' }}"> <a href="#"><i class="icon icon-info-sign"></i> <span>Settings</span> <span class="label label-important">4</span></a>
    </li>
    <li "{{ Request::is ('logged', 'logged/index') ?  'active'  : '' }}"> <a href="{{ route ('logged.index') }}"><i class="icon icon-fullscreen"></i> <span>Login Info</span></a></li>
  </ul>
</div>