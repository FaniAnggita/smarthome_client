<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Smarthome</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php if ($page == 'index') echo 'active'; ?>">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Device -->
        <li class="menu-item <?php if ($page == 'device') echo 'active'; ?> ">
            <a href="device.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bulb"></i>
                <div data-i18n="device">Device</div>
            </a>
        </li>
        <!-- User -->
        <li class="menu-item  <?php if ($page == 'user') echo 'active'; ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">User</div>
            </a>
            <ul class="menu-sub">
                <?php if ($_SESSION['smarthome_role'] === "1") { ?>
                    <li class="menu-item">
                        <a href="add-user.php" class="menu-link">
                            <div data-i18n="Account">Add User</div>
                        </a>
                    </li>
                <?php } ?>
                <li class="menu-item">
                    <a href="user.php" class="menu-link">
                        <div data-i18n="Notifications">Manage User</div>
                    </a>
                </li>

            </ul>
        </li>
        <!-- Report -->
        <li class="menu-item <?php if ($page == 'report') echo 'active'; ?>">
            <a href="report.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="device">Report</div>
            </a>
        </li>
        <!-- Device -->
        <li class="menu-item <?php if ($page == 'setting') echo 'active'; ?>">
            <a href="user_setting.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="device">Setting</div>
            </a>
        </li>

    </ul>
</aside>