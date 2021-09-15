<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('home') }}" class="sidebar-brand">
            Soul<span>Redemp..</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item">
            <li class="nav-item">
                <a href="{{route('findsubscribers')}}" class="nav-link">
                <i class="link-icon" data-feather="user-plus"></i>
                    <span class="link-title">Subscribers</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('codepage')}}" class="nav-link">
                    <i class="link-icon" data-feather="send"></i>
                    <span class="link-title">Send Code</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('videoserver')}}" class="nav-link">
                <i class="link-icon" data-feather="upload-cloud"></i>
                    <span class="link-title">Video Server</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('request.code')}}" class="nav-link">
                <i class="link-icon" data-feather="git-pull-request"></i>
                    <span class="link-title">Request Code</span>
                </a>
            </li>
            <!-- <li class="nav-item nav-category">User</li>
            <li class="nav-item">
                <a href="{{route('videoserver')}}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('videoserver')}}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Change Password</span>
                </a>
            </li> -->

        </ul>
    </div>
</nav>
