<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Just Stepping | Settings</title>

    <!-- ONLY SETTINGS CSS -->
    <link rel="stylesheet" href="settings.css">

</head>

<body>


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <!-- LOGO -->

        <div class="admin-logo">

            <div class="logo-icon">
                👟
            </div>

            <div class="logo-text">

                <h2>Just Stepping</h2>

                <span>ADMIN PANEL</span>

            </div>

        </div>


        <!-- NAVIGATION -->

        <nav class="sidebar-menu">


            <a href="dashboard.php" class="menu-item">

                <span class="menu-icon">▦</span>

                <span>Dashboard</span>

            </a>


            <a href="product.php" class="menu-item">

                <span class="menu-icon">👟</span>

                <span>Products</span>

            </a>


            <a href="category.php" class="menu-item">

                <span class="menu-icon">▤</span>

                <span>Categories</span>

            </a>


            <a href="orders.php" class="menu-item">

                <span class="menu-icon">📦</span>

                <span>Orders</span>

            </a>


            <a href="users.php" class="menu-item">

                <span class="menu-icon">👥</span>

                <span>Users</span>

            </a>


            <a href="settings.php" class="menu-item active">

                <span class="menu-icon">⚙</span>

                <span>Settings</span>

            </a>


        </nav>


        <!-- LOGOUT -->

        <div class="sidebar-bottom">

            <a href="index.php" class="menu-item logout">

                <span class="menu-icon">↪</span>

                <span>Logout</span>

            </a>

        </div>


    </aside>



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="main-content">


        <!-- =====================================================
             TOPBAR
        ====================================================== -->

        <header class="topbar">


            <div class="page-heading">

                <p class="topbar-label">
                    SYSTEM CONFIGURATION
                </p>

                <h1>Settings</h1>

                <p class="page-description">
                    Manage your store and administrator settings.
                </p>

            </div>


            <!-- ADMIN PROFILE -->

            <div class="topbar-right">


                <button
                    class="notification-btn"
                    title="Notifications"
                >
                    🔔
                </button>


                <div class="admin-profile">


                    <div class="profile-avatar">
                        A
                    </div>


                    <div class="profile-details">

                        <strong>Admin</strong>

                        <span>Administrator</span>

                    </div>


                </div>


            </div>


        </header>



        <!-- =====================================================
             SETTINGS LAYOUT
        ====================================================== -->

        <div class="settings-layout">


            <!-- =================================================
                 SETTINGS MENU
            ================================================== -->

            <aside class="settings-menu">


                <div class="settings-menu-title">

                    SETTINGS

                </div>


                <button
                    class="settings-tab active"
                    onclick="openTab('profile', this)"
                >

                    <span>👤</span>

                    <div>

                        <strong>Admin Profile</strong>

                        <small>
                            Personal information
                        </small>

                    </div>

                </button>


                <button
                    class="settings-tab"
                    onclick="openTab('store', this)"
                >

                    <span>🏪</span>

                    <div>

                        <strong>Store Information</strong>

                        <small>
                            Store details
                        </small>

                    </div>

                </button>


                <button
                    class="settings-tab"
                    onclick="openTab('password', this)"
                >

                    <span>🔒</span>

                    <div>

                        <strong>Password</strong>

                        <small>
                            Security settings
                        </small>

                    </div>

                </button>


                <button
                    class="settings-tab"
                    onclick="openTab('notifications', this)"
                >

                    <span>🔔</span>

                    <div>

                        <strong>Notifications</strong>

                        <small>
                            Notification preferences
                        </small>

                    </div>

                </button>


                <button
                    class="settings-tab"
                    onclick="openTab('store-status', this)"
                >

                    <span>⚡</span>

                    <div>

                        <strong>Store Status</strong>

                        <small>
                            Availability settings
                        </small>

                    </div>

                </button>


            </aside>



            <!-- =================================================
                 SETTINGS CONTENT
            ================================================== -->

            <section class="settings-content">



                <!-- =================================================
                     PROFILE SETTINGS
                ================================================== -->

                <div
                    class="settings-panel active"
                    id="profile"
                >


                    <div class="panel-header">

                        <div>

                            <h2>Admin Profile</h2>

                            <p>
                                Update your administrator account information.
                            </p>

                        </div>

                    </div>


                    <!-- PROFILE PHOTO -->

                    <div class="profile-photo-section">


                        <div class="large-profile-avatar">
                            A
                        </div>


                        <div class="photo-info">

                            <h3>Profile Picture</h3>

                            <p>
                                JPG, PNG or WEBP. Maximum size 2MB.
                            </p>


                            <button
                                class="secondary-btn"
                                onclick="changePhoto()"
                            >
                                Change Photo
                            </button>

                        </div>


                    </div>


                    <!-- FORM -->

                    <form
                        onsubmit="saveProfile(event)"
                        class="settings-form"
                    >


                        <div class="form-row">


                            <div class="form-group">

                                <label>
                                    First Name
                                </label>

                                <input
                                    type="text"
                                    value="Admin"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Last Name
                                </label>

                                <input
                                    type="text"
                                    value="User"
                                    required
                                >

                            </div>


                        </div>


                        <div class="form-row">


                            <div class="form-group">

                                <label>
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    value="admin@juststeeping.com"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    value="+91 98765 43210"
                                >

                            </div>


                        </div>


                        <div class="form-group">

                            <label>
                                Role
                            </label>

                            <input
                                type="text"
                                value="Administrator"
                                disabled
                            >

                        </div>


                        <div class="form-actions">

                            <button
                                type="reset"
                                class="cancel-btn"
                            >
                                Cancel
                            </button>


                            <button
                                type="submit"
                                class="save-btn"
                            >
                                Save Changes
                            </button>

                        </div>


                    </form>


                </div>



                <!-- =================================================
                     STORE INFORMATION
                ================================================== -->

                <div
                    class="settings-panel"
                    id="store"
                >


                    <div class="panel-header">

                        <div>

                            <h2>Store Information</h2>

                            <p>
                                Manage the basic information of your shoe store.
                            </p>

                        </div>

                    </div>


                    <form
                        onsubmit="saveStore(event)"
                        class="settings-form"
                    >


                        <div class="form-group">

                            <label>
                                Store Name
                            </label>

                            <input
                                type="text"
                                value="Just Steeping"
                                required
                            >

                        </div>


                        <div class="form-row">


                            <div class="form-group">

                                <label>
                                    Store Email
                                </label>

                                <input
                                    type="email"
                                    value="support@juststeeping.com"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Store Phone
                                </label>

                                <input
                                    type="tel"
                                    value="+91 98765 43210"
                                >

                            </div>


                        </div>


                        <div class="form-group">

                            <label>
                                Store Address
                            </label>

                            <textarea
                                rows="4"
                                placeholder="Enter store address"
                            >Bhubaneswar, Odisha, India</textarea>

                        </div>


                        <div class="form-row">


                            <div class="form-group">

                                <label>
                                    Currency
                                </label>

                                <select>

                                    <option selected>
                                        Indian Rupee (₹)
                                    </option>

                                    <option>
                                        US Dollar ($)
                                    </option>

                                    <option>
                                        Euro (€)
                                    </option>

                                </select>

                            </div>


                            <div class="form-group">

                                <label>
                                    Time Zone
                                </label>

                                <select>

                                    <option selected>
                                        India Standard Time
                                    </option>

                                    <option>
                                        UTC
                                    </option>

                                    <option>
                                        Eastern Time
                                    </option>

                                </select>

                            </div>


                        </div>


                        <div class="form-actions">

                            <button
                                type="reset"
                                class="cancel-btn"
                            >
                                Cancel
                            </button>


                            <button
                                type="submit"
                                class="save-btn"
                            >
                                Save Store Details
                            </button>

                        </div>


                    </form>


                </div>



                <!-- =================================================
                     PASSWORD
                ================================================== -->

                <div
                    class="settings-panel"
                    id="password"
                >


                    <div class="panel-header">

                        <div>

                            <h2>Change Password</h2>

                            <p>
                                Keep your administrator account secure.
                            </p>

                        </div>

                    </div>


                    <div class="security-warning">

                        <span>🔐</span>

                        <div>

                            <strong>
                                Security Tip
                            </strong>

                            <p>
                                Use a strong password containing letters,
                                numbers and special characters.
                            </p>

                        </div>

                    </div>


                    <form
                        onsubmit="changePassword(event)"
                        class="settings-form"
                    >


                        <div class="form-group">

                            <label>
                                Current Password
                            </label>

                            <div class="password-input">

                                <input
                                    type="password"
                                    id="currentPassword"
                                    required
                                >

                                <button
                                    type="button"
                                    onclick="togglePassword('currentPassword', this)"
                                >
                                    Show
                                </button>

                            </div>

                        </div>


                        <div class="form-group">

                            <label>
                                New Password
                            </label>

                            <div class="password-input">

                                <input
                                    type="password"
                                    id="newPassword"
                                    minlength="8"
                                    required
                                >

                                <button
                                    type="button"
                                    onclick="togglePassword('newPassword', this)"
                                >
                                    Show
                                </button>

                            </div>

                        </div>


                        <div class="form-group">

                            <label>
                                Confirm New Password
                            </label>

                            <div class="password-input">

                                <input
                                    type="password"
                                    id="confirmPassword"
                                    minlength="8"
                                    required
                                >

                                <button
                                    type="button"
                                    onclick="togglePassword('confirmPassword', this)"
                                >
                                    Show
                                </button>

                            </div>

                        </div>


                        <div class="password-rules">

                            <span>
                                ✓ At least 8 characters
                            </span>

                            <span>
                                ✓ One uppercase letter
                            </span>

                            <span>
                                ✓ One number
                            </span>

                            <span>
                                ✓ One special character
                            </span>

                        </div>


                        <div class="form-actions">

                            <button
                                type="reset"
                                class="cancel-btn"
                            >
                                Cancel
                            </button>


                            <button
                                type="submit"
                                class="save-btn"
                            >
                                Update Password
                            </button>

                        </div>


                    </form>


                </div>



                <!-- =================================================
                     NOTIFICATIONS
                ================================================== -->

                <div
                    class="settings-panel"
                    id="notifications"
                >


                    <div class="panel-header">

                        <div>

                            <h2>Notifications</h2>

                            <p>
                                Choose which notifications you want to receive.
                            </p>

                        </div>

                    </div>


                    <div class="notification-settings">


                        <div class="notification-option">


                            <div>

                                <strong>
                                    New Orders
                                </strong>

                                <p>
                                    Get notified whenever a new order is placed.
                                </p>

                            </div>


                            <label class="switch">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="slider"></span>

                            </label>


                        </div>



                        <div class="notification-option">


                            <div>

                                <strong>
                                    New Users
                                </strong>

                                <p>
                                    Receive alerts when a new customer registers.
                                </p>

                            </div>


                            <label class="switch">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="slider"></span>

                            </label>


                        </div>



                        <div class="notification-option">


                            <div>

                                <strong>
                                    Low Stock
                                </strong>

                                <p>
                                    Get notified when products are running low.
                                </p>

                            </div>


                            <label class="switch">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="slider"></span>

                            </label>


                        </div>



                        <div class="notification-option">


                            <div>

                                <strong>
                                    Order Updates
                                </strong>

                                <p>
                                    Receive notifications about order status changes.
                                </p>

                            </div>


                            <label class="switch">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="slider"></span>

                            </label>


                        </div>



                        <div class="notification-option">


                            <div>

                                <strong>
                                    Promotional Emails
                                </strong>

                                <p>
                                    Receive information about store promotions.
                                </p>

                            </div>


                            <label class="switch">

                                <input
                                    type="checkbox"
                                >

                                <span class="slider"></span>

                            </label>


                        </div>


                    </div>


                    <div class="form-actions">

                        <button
                            class="save-btn"
                            onclick="saveNotifications()"
                        >
                            Save Preferences
                        </button>

                    </div>


                </div>



                <!-- =================================================
                     STORE STATUS
                ================================================== -->

                <div
                    class="settings-panel"
                    id="store-status"
                >


                    <div class="panel-header">

                        <div>

                            <h2>Store Status</h2>

                            <p>
                                Control whether customers can access your store.
                            </p>

                        </div>

                    </div>


                    <!-- STORE STATUS CARD -->

                    <div class="store-status-card">


                        <div class="status-left">


                            <div class="status-icon">
                                ✓
                            </div>


                            <div>

                                <h3>
                                    Store is Online
                                </h3>

                                <p>
                                    Customers can currently browse and purchase products.
                                </p>

                            </div>


                        </div>


                        <label class="switch large-switch">

                            <input
                                type="checkbox"
                                id="storeToggle"
                                checked
                                onchange="toggleStoreStatus()"
                            >

                            <span class="slider"></span>

                        </label>


                    </div>


                    <!-- MAINTENANCE -->

                    <div class="maintenance-box">


                        <h3>
                            Maintenance Mode
                        </h3>


                        <p>
                            Temporarily disable customer access while you
                            perform maintenance or make important changes.
                        </p>


                        <button
                            class="maintenance-btn"
                            onclick="maintenanceMode()"
                        >
                            Enable Maintenance Mode
                        </button>


                    </div>


                    <!-- STORE STATISTICS -->

                    <div class="status-stats">


                        <div>

                            <span>
                                Store Status
                            </span>

                            <strong
                                id="storeStatusText"
                            >
                                Online
                            </strong>

                        </div>


                        <div>

                            <span>
                                Last Updated
                            </span>

                            <strong>
                                Today
                            </strong>

                        </div>


                        <div>

                            <span>
                                Store Version
                            </span>

                            <strong>
                                1.0.0
                            </strong>

                        </div>


                    </div>


                </div>


            </section>


        </div>


    </main>



    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

    <script>


        /* =================================================
           SETTINGS TABS
        ================================================= */

        function openTab(tabId, button) {


            const panels =
                document.querySelectorAll(
                    ".settings-panel"
                );


            panels.forEach(function(panel) {

                panel.classList.remove("active");

            });


            const tabs =
                document.querySelectorAll(
                    ".settings-tab"
                );


            tabs.forEach(function(tab) {

                tab.classList.remove("active");

            });


            document
                .getElementById(tabId)
                .classList.add("active");


            button.classList.add("active");

        }



        /* =================================================
           SAVE PROFILE
        ================================================= */

        function saveProfile(event) {

            event.preventDefault();

            alert(
                "Profile changes saved successfully!"
            );

        }



        /* =================================================
           SAVE STORE
        ================================================= */

        function saveStore(event) {

            event.preventDefault();

            alert(
                "Store information saved successfully!"
            );

        }



        /* =================================================
           CHANGE PHOTO
        ================================================= */

        function changePhoto() {

            alert(
                "Profile image upload will be connected with PHP later."
            );

        }



        /* =================================================
           PASSWORD VISIBILITY
        ================================================= */

        function togglePassword(
            inputId,
            button
        ) {


            const input =
                document.getElementById(inputId);


            if (
                input.type === "password"
            ) {

                input.type = "text";

                button.textContent = "Hide";

            } else {

                input.type = "password";

                button.textContent = "Show";

            }

        }



        /* =================================================
           CHANGE PASSWORD
        ================================================= */

        function changePassword(event) {


            event.preventDefault();


            const newPassword =
                document.getElementById(
                    "newPassword"
                ).value;


            const confirmPassword =
                document.getElementById(
                    "confirmPassword"
                ).value;


            if (
                newPassword !==
                confirmPassword
            ) {

                alert(
                    "New passwords do not match."
                );

                return;

            }


            alert(
                "Password updated successfully!"
            );


            event.target.reset();

        }



        /* =================================================
           SAVE NOTIFICATIONS
        ================================================= */

        function saveNotifications() {

            alert(
                "Notification preferences saved!"
            );

        }



        /* =================================================
           STORE STATUS
        ================================================= */

        function toggleStoreStatus() {


            const toggle =
                document.getElementById(
                    "storeToggle"
                );


            const statusText =
                document.getElementById(
                    "storeStatusText"
                );


            if (toggle.checked) {

                statusText.textContent =
                    "Online";

            } else {

                statusText.textContent =
                    "Offline";

            }

        }



        /* =================================================
           MAINTENANCE MODE
        ================================================= */

        function maintenanceMode() {


            const toggle =
                document.getElementById(
                    "storeToggle"
                );


            const statusText =
                document.getElementById(
                    "storeStatusText"
                );


            toggle.checked = false;

            statusText.textContent =
                "Maintenance";


            alert(
                "Maintenance mode enabled."
            );

        }


    </script>


</body>

</html>