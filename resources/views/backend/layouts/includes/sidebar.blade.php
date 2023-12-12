<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets') }}/images/ist_logo_mini.gif" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Appraisal</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{-- Dashboard --}}
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        @if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
            <li>
                <a href="{{ route('admin.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="menu-title">Admins</div>
                </a>
            </li>
            <li>
                <a href="{{ route('employee.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="menu-title">Employees</div>
                </a>
            </li>
            <li>
                <a href="{{ route('role.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-edit-alt'></i>
                    </div>
                    <div class="menu-title">Roles</div>
                </a>
            </li>
            <li>
                <a href="{{ route('department.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-buildings'></i>
                    </div>
                    <div class="menu-title">Department</div>
                </a>
            </li>

            <li>
                <a href="{{ route('designation.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-arrow-to-right'></i>
                    </div>
                    <div class="menu-title">Designation</div>
                </a>
            </li>
            <li>
                <a href="{{ route('survey-question.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-question-mark'></i>
                    </div>
                    <div class="menu-title">Survey Question</div>
                </a>
            </li>
            <li>
                <a href="{{ route('survey-setup.index') }}">
                    <div class="parent-icon">
                        <i class='bx bx-arrow-to-right'></i>
                    </div>
                    <div class="menu-title">Survey Setup</div>
                </a>
            </li>


            <hr>

            <li>
                <a href="{{ route('reset') }}">
                    <div class="parent-icon">
                        <i class='bx bx-arrow-to-right'></i>
                    </div>
                    <div class="menu-title">Reset</div>
                </a>
            </li>
        @endif

    </ul>
    <!--end navigation-->
</div>
