<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">

        <ul class="navbar-nav">
            <li class="nav-item dropdown nav-apps">
                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="grid"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="appsDropdown">
                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">Quick Links</p>
                        <a href="javascript:;" class="text-muted"></a>
                    </div>
                    <div class="dropdown-body">
                        <div class="d-flex align-items-center apps">
                            <a href="{{ route('home') }}"><i class="link-icon" data-feather="box"></i><p>Dashboard</p></a>
                            <a href="{{route('findsubscribers')}}"> <i class="link-icon" data-feather="user-plus"></i><p>Subscribers</p></a>
                            <a href="{{route('codepage')}}"><i class="link-icon" data-feather="send"></i><p>Send Code</p></a>
                            <a href="{{route('videoserver')}}"><i class="link-icon" data-feather="upload-cloud"></i><p>VideoServer</p></a>
                        </div>
                    </div>
                    <!-- <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">View all</a>
                    </div> -->
                </div>
            </li>
            <li class="nav-item dropdown nav-messages">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="messageDropdown">
                    <!-- <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">Subscripers</p>
                        <a href="javascript:;" class="text-muted"></a>
                    </div>
                    <div class="dropdown-body">
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="../assets/images/faces/face2.jpg" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Leonardo Payne</p>
                                    <p class="sub-text text-muted">2 min ago</p>
                                </div>
                                <p class="sub-text text-muted">Project status</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="../assets/images/faces/face3.jpg" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Carl Henson</p>
                                    <p class="sub-text text-muted">30 min ago</p>
                                </div>
                                <p class="sub-text text-muted">Client meeting</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="../assets/images/faces/face4.jpg" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Jensen Combs</p>
                                    <p class="sub-text text-muted">1 hrs ago</p>
                                </div>
                                <p class="sub-text text-muted">Project updates</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="../assets/images/faces/face5.jpg" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Amiah Burton</p>
                                    <p class="sub-text text-muted">2 hrs ago</p>
                                </div>
                                <p class="sub-text text-muted">Project deadline</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="figure">
                                <img src="../assets/images/faces/face6.jpg" alt="userr">
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Yaretzi Mayo</p>
                                    <p class="sub-text text-muted">5 hr ago</p>
                                </div>
                                <p class="sub-text text-muted">New record</p>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">View all</a>
                    </div>
                </div> -->
            </li>
            <li class="nav-item dropdown nav-notifications">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell"></i>
                    <div class="indicator">
                        <div class="circle"></div>
                    </div>
                </a>
                <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                    <!-- <div class="dropdown-header d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium">6 New Notifications</p>
                        <a href="javascript:;" class="text-muted">Clear all</a>
                    </div>
                    <div class="dropdown-body">
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="user-plus"></i>
                            </div>
                            <div class="content">
                                <p>New customer registered</p>
                                <p class="sub-text text-muted">2 sec ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="gift"></i>
                            </div>
                            <div class="content">
                                <p>New Order Recieved</p>
                                <p class="sub-text text-muted">30 min ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="alert-circle"></i>
                            </div>
                            <div class="content">
                                <p>Server Limit Reached!</p>
                                <p class="sub-text text-muted">1 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="layers"></i>
                            </div>
                            <div class="content">
                                <p>Apps are ready for update</p>
                                <p class="sub-text text-muted">5 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item">
                            <div class="icon">
                                <i data-feather="download"></i>
                            </div>
                            <div class="content">
                                <p>Download completed</p>
                                <p class="sub-text text-muted">6 hrs ago</p>
                            </div>
                        </a>
                    </div> -->
                    <!-- <div class="dropdown-footer d-flex align-items-center justify-content-center">
                        <a href="javascript:;">View all</a>
                    </div> -->
                </div>
            </li>
            <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ URL::asset('public/'. Auth::user()->avatar)}}" alt="{{ Auth::user()->name }}">
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <div class="dropdown-header d-flex flex-column align-items-center" >
                        <div class="figure mb-3">
                        <!-- {{ asset('assets/images/faces/face1.jpg') }} -->
                            <img src="{{ URL::asset('public/'. Auth::user()->avatar)}}" alt="{{ Auth::user()->name }}">
                        </div>
                        <div class="info text-center">
                            <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                            <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <!-- <a href="pages/general/profile.html" class="nav-link">
                                    <i data-feather="user"></i>
                                    <span>Profile</span>
                                </a> -->
                            </li>
                            <li class="nav-item">
                                <a href="{{route('edit_profile')}}" class="nav-link">
                                    <i data-feather="edit"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">

                                <a href="javascript:;" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i data-feather="log-out"></i>
                                    <span>Log Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
