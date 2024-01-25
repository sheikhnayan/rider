<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
<div class="logo">
  <a href="{{ route('admin.index') }}" class="simple-text">
    Admin Panel
  </a>
</div>
<div class="sidebar-wrapper" id="sidebar-wrapper">
  <ul class="nav">
    <li class="active ">
      <a href="{{ route('admin.index') }}">
        <i class="now-ui-icons design_app"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="">
        <a href="{{ route('admin.vehicle') }}">
          <i class="now-ui-icons design_app"></i>
          <p>Vehicle</p>
        </a>
      </li>
    <li>
      <a href="{{ route('admin.page') }}">
        <i class="now-ui-icons design_app"></i>
        <p>Page</p>
      </a>
    </li>
    <li>
        <a href="{{ route('admin.setting') }}">
          <i class="now-ui-icons design_app"></i>
          <p>Setting</p>
        </a>
      </li>
  </ul>
</div>
</div>
