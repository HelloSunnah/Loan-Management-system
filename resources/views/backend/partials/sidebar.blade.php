<!-- Main Sidebar Start -->
<aside class="main-sidebar text-white sidebar-light-dark elevation-1">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{-- <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">--}}
        <span class="fw-bold px-3 py-2 border rounded">
            <i class="fa-brands fa-algolia"></i>
        </span>
        <span class="pl-2 brand-text font-weight-bold">AcademyCMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if(isset($menu))
                    @foreach ($menu as $menuItem)
                        <li class="nav-item">
                            <a href="{{ isset($menuItem['url']) ? Route::has($menuItem['url']) ? route($menuItem['url']) : '#' : '#' }}" class="nav-link mb-2 {{ $loop->first ? 'active' : '' }}">
                                <i class="{{ $menuItem['icon'] }} nav-icon"></i>
                                <p>{{ $menuItem['label'] }}</p>

                            </a>

                            @if (count($menuItem['submenu']) > 0)
                                <ul class="nav nav-treeview">
                                    @foreach ($menuItem['submenu'] as $childItem)

                                        <li class="nav-item">
                                            <a href="{{ isset($childItem['url']) ? Route::has($childItem['url']) ? route($childItem['url']) : '#' : '#' }}" class="nav-link mb-2 ">
                                                <i class="{{ $childItem['icon'] }} nav-icon"></i>
                                                <p>{{ $childItem['label'] }} </p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif

            </ul>
{{--            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">--}}
{{--                <!-- Add icons to the links using the .nav-icon class--}}
{{--                     with font-awesome or any other icon font library -->--}}

{{--                <!-- nav-item-1 start -->--}}
{{--                <li class="nav-item">--}}
            {{--                    <a href="{{ url('/dashboard') }}" class="nav-link mb-2 active">--}}
            {{--                        <i class="fa-solid fa-home nav-icon"></i>--}}
            {{--                        <p>Dashboard</p>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
{{--                <!-- nav-item-1 end -->--}}

{{--                <!-- nav-item-2 start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fab fa-edge-legacy nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Portal--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Slider</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Notice</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Important Link</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-2 end -->--}}

{{--                <!-- nav-item-3 start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-school nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Academic--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('directors/list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Directors</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('admin_staff/list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Admin Staff</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-3 end -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-school nav-icon"></i>--}}

{{--                        <p> Admission--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('admission.request')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Admission Request</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-4 start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-user-graduate nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Student--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('students.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Students</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-4 end -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-person-chalkboard"></i>--}}
{{--                        <p>--}}
{{--                            Teacher <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('teacher.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Teachers</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <!-- nav-item-5 start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-calendar-days nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Class--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('class.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Class</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('section.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Section</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('subject.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Subject</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-5 end -->--}}

{{--                <!-- nav-item-6 start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-person-dots-from-line nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Exam--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('exam.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Exam Term</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('examType.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Exam System</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-6 end -->--}}

{{--                <!-- nav-item-7 start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-graduation-cap nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Result--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('result.list')}}" class="nav-link mb-2">--}}
{{--                                <i class="fa-solid fa-dot-circle nav-icon"></i>--}}
{{--                                <p>Result</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- nav-item-7 end -->--}}
{{--            </ul>--}}
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Main Sidebar End -->


<script>
    // Function to handle navigation link click
    function handleNavLinkClick(event) {
        // Prevent the default link behavior (preventing navigation)
        // event.preventDefault();

        // Remove the 'active' class from all nav-links
        const navLinks = document.querySelectorAll('.sidebar .nav-link');
        navLinks.forEach((navLink) => {
            navLink.classList.remove('active');
        });

        // Add the 'active' class to the clicked nav-link
        const clickedNavLink = event.currentTarget;
        clickedNavLink.classList.add('active');

        // Call the function to set the background and text color
        setActiveNavLinksBackground();
    }

    // Function to set background and text color for active nav-links
    function setActiveNavLinksBackground() {
        // Select all nav-links
        const navLinks = document.querySelectorAll('.sidebar .nav-link');

        // Define the linear gradient background style for the active nav-link
        const activeLinearGradient = 'linear-gradient(to right, #0c0958, #00228d, #255d9d)';
        // Define the background style for inactive nav-links
        const inactiveBackground = 'none';

        // Iterate through all nav-links
        navLinks.forEach((navLink) => {
            // Check if the nav-link is active
            const isActive = navLink.classList.contains('active');

            // Set background and text color based on whether the nav-link is active or not
            if (isActive) {
                navLink.style.backgroundImage = activeLinearGradient;
                navLink.style.color = 'white'; // Set the text color for active links
            } else {
                navLink.style.backgroundImage = inactiveBackground;
                navLink.style.color = ''; // Reset the text color for inactive links
            }
        });
    }

    // Attach click event listeners to all nav-links
    const navLinks = document.querySelectorAll('.sidebar .nav-link');
    navLinks.forEach((navLink) => {
        navLink.addEventListener('click', handleNavLinkClick);
    });

    // Call the function to set the initial background and text color
    setActiveNavLinksBackground();
</script>

