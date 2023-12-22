<li class="nav-item {{ Request::url() == route('admin.profile.index') ? 'active' : '' }}">
    <a href="{{ route('admin.profile.index') }}" class="nav-link" >Edit Profile</a>
</li>
<li class="nav-item {{ Request::url() == route('admin.security.update') ? 'active' : '' }}">
    <a href="{{ route('admin.security.update') }}" class="nav-link" >Security</a>
</li>
