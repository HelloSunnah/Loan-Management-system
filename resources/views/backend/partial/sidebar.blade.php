<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-official" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Official</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-official" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('staff.list')}}">
                        <i class="bi bi-circle"></i><span>Staff List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('fees.create')}}">
                        <i class="bi bi-circle"></i><span>Fees</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('incoming.transection')}}">
                        <i class="bi bi-circle"></i><span>Income</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('outgoing.transection')}}">
                        <i class="bi bi-circle"></i><span>Expense</span>
                    </a>
                </li>

            </ul>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Account</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{route('personal.list')}}">
                        <i class="bi bi-circle"></i><span>Personal Account</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('official.list')}}">
                        <i class="bi bi-circle"></i><span>Compnay Based Account</span>
                    </a>
                </li>

            </ul>

        </li>
        <!-- <li class="nav-item">
            <a class="nav-link " href="{{route('staff.list')}}"><i class="fa-solid fa-users"></i> <span>Staff</span></a>
        </li> -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-fdr" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>FDR</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-fdr" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{route('fdr.list.all')}}">
                        <i class="bi bi-circle"></i><span>All FDR</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('fdr.list')}}">
                        <i class="bi bi-circle"></i><span>Closed FDR</span>
                    </a>
                </li>

            </ul>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-dps" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>DPS</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-dps" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                {{-- <li>
                    <a href="{{route('dps.list')}}">
                <i class="bi bi-circle"></i><span>All DPS</span>
                </a>
        </li> --}}

        <li>
            <a href="{{route('dps.list.all')}}">
                <i class="bi bi-circle"></i><span>Running Dps</span>
            </a>
        </li>
        <li>
            <a href="{{route('dps.list')}}">
                <i class="bi bi-circle"></i><span>Matured</span>
            </a>
        </li>

    </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('loan.list')}}">
            <i class="bi bi-menu-button-wide"></i><span>Loan</span></i>
        </a>


    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('transection.history')}}">
            <i class="bi bi-menu-button-wide"></i><span>Transection History</span></i>
        </a>


    </li>


    </ul>


</aside><!-- End Sidebar-->