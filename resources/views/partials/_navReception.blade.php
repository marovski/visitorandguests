
<li class="{{ Request::is('dashboard') ? "active" : "" }}"><a href="/dashboard">   <span class="glyphicon glyphicon-stats"></span> Dashboards</a></li>
<li ><a href="{{ route('meetings.index') }}"><i class="fa fa-group"></i> Meetings</a></li>
<li><a href="{{ route('delivers.index') }}"><i class="fa fa-truck"></i> Delivers</a></li>
<li><a href="{{ route('drops.index') }}"><span class="glyphicon glyphicon-gift"></span> Drops</a></li>
<li><a href="{{ route('losts.index') }}"><span class="losticon"></span> Lost/Found</a></li>



                 
                