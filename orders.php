<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Just Steeping | Orders</title>

    <!-- ONLY ORDERS CSS -->
    <link rel="stylesheet" href="orders.css">

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


            <a href="orders.php" class="menu-item active">

                <span class="menu-icon">📦</span>

                <span>Orders</span>

            </a>


            <a href="users.php" class="menu-item">

                <span class="menu-icon">👥</span>

                <span>Users</span>

            </a>


            <a href="settings.php" class="menu-item">

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
                    ORDER MANAGEMENT
                </p>

                <h1>Orders</h1>

                <p class="page-description">
                    Track and manage all customer orders.
                </p>

            </div>



            <!-- ADMIN AREA -->

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
             ORDER STATISTICS
        ====================================================== -->

        <section class="order-stats">


            <!-- TOTAL ORDERS -->

            <div class="stat-card">

                <div class="stat-icon">
                    📦
                </div>

                <div class="stat-content">

                    <span>Total Orders</span>

                    <h3>248</h3>

                    <small class="positive">
                        ↑ 12.5% this month
                    </small>

                </div>

            </div>



            <!-- PENDING -->

            <div class="stat-card">

                <div class="stat-icon pending-icon">
                    ⏳
                </div>

                <div class="stat-content">

                    <span>Pending</span>

                    <h3>18</h3>

                    <small>
                        Need attention
                    </small>

                </div>

            </div>



            <!-- PROCESSING -->

            <div class="stat-card">

                <div class="stat-icon processing-icon">
                    ⚙
                </div>

                <div class="stat-content">

                    <span>Processing</span>

                    <h3>27</h3>

                    <small>
                        Being prepared
                    </small>

                </div>

            </div>



            <!-- DELIVERED -->

            <div class="stat-card">

                <div class="stat-icon delivered-icon">
                    ✓
                </div>

                <div class="stat-content">

                    <span>Delivered</span>

                    <h3>193</h3>

                    <small>
                        Successfully delivered
                    </small>

                </div>

            </div>


        </section>



        <!-- =====================================================
             ORDERS CONTAINER
        ====================================================== -->

        <section class="orders-container">


            <!-- =====================================================
                 TOOLBAR
            ====================================================== -->

            <div class="orders-toolbar">


                <!-- SEARCH -->

                <div class="search-box">

                    <span>🔍</span>

                    <input
                        type="text"
                        id="orderSearch"
                        placeholder="Search order ID or customer..."
                    >

                </div>



                <!-- FILTERS -->

                <div class="filter-area">


                    <select id="statusFilter">

                        <option value="all">
                            All Status
                        </option>

                        <option value="pending">
                            Pending
                        </option>

                        <option value="processing">
                            Processing
                        </option>

                        <option value="shipped">
                            Shipped
                        </option>

                        <option value="delivered">
                            Delivered
                        </option>

                        <option value="cancelled">
                            Cancelled
                        </option>

                    </select>



                    <select id="dateFilter">

                        <option value="all">
                            All Dates
                        </option>

                        <option value="today">
                            Today
                        </option>

                        <option value="week">
                            This Week
                        </option>

                        <option value="month">
                            This Month
                        </option>

                    </select>


                </div>


            </div>



            <!-- =====================================================
                 ORDERS TABLE
            ====================================================== -->

            <div class="table-wrapper">


                <table class="orders-table">


                    <thead>

                        <tr>

                            <th>Order</th>

                            <th>Customer</th>

                            <th>Product</th>

                            <th>Date</th>

                            <th>Total</th>

                            <th>Payment</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>



                    <tbody id="ordersTableBody">


                        <!-- =================================================
                             ORDER 1
                        ================================================== -->

                        <tr class="order-row"
                            data-status="delivered">


                            <td>

                                <div class="order-id">

                                    <strong>#ORD-1024</strong>

                                    <span>1 item</span>

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    <div class="customer-avatar">
                                        RK
                                    </div>

                                    <div>

                                        <strong>Rahul Kumar</strong>

                                        <span>rahul@example.com</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <strong>Nike Air Max</strong>

                                        <span>Size: 9</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="date-info">

                                    <strong>29 Aug 2026</strong>

                                    <span>10:42 AM</span>

                                </div>

                            </td>


                            <td>

                                <strong class="price">
                                    ₹4,999
                                </strong>

                            </td>


                            <td>

                                <span class="payment paid">
                                    Paid
                                </span>

                            </td>


                            <td>

                                <span class="order-status delivered">
                                    Delivered
                                </span>

                            </td>


                            <td>

                                <button
                                    class="view-btn"
                                    onclick="viewOrder('ORD-1024')"
                                >
                                    View
                                </button>

                            </td>


                        </tr>



                        <!-- =================================================
                             ORDER 2
                        ================================================== -->

                        <tr class="order-row"
                            data-status="processing">


                            <td>

                                <div class="order-id">

                                    <strong>#ORD-1023</strong>

                                    <span>2 items</span>

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    <div class="customer-avatar">
                                        AS
                                    </div>

                                    <div>

                                        <strong>Ankit Sharma</strong>

                                        <span>ankit@example.com</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <strong>Adidas Ultraboost</strong>

                                        <span>Size: 10 + 8</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="date-info">

                                    <strong>29 Aug 2026</strong>

                                    <span>09:18 AM</span>

                                </div>

                            </td>


                            <td>

                                <strong class="price">
                                    ₹10,998
                                </strong>

                            </td>


                            <td>

                                <span class="payment paid">
                                    Paid
                                </span>

                            </td>


                            <td>

                                <span class="order-status processing">
                                    Processing
                                </span>

                            </td>


                            <td>

                                <button
                                    class="view-btn"
                                    onclick="viewOrder('ORD-1023')"
                                >
                                    View
                                </button>

                            </td>


                        </tr>



                        <!-- =================================================
                             ORDER 3
                        ================================================== -->

                        <tr class="order-row"
                            data-status="pending">


                            <td>

                                <div class="order-id">

                                    <strong>#ORD-1022</strong>

                                    <span>1 item</span>

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    <div class="customer-avatar">
                                        PS
                                    </div>

                                    <div>

                                        <strong>Priya Singh</strong>

                                        <span>priya@example.com</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <strong>Air Jordan 1</strong>

                                        <span>Size: 7</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="date-info">

                                    <strong>28 Aug 2026</strong>

                                    <span>06:32 PM</span>

                                </div>

                            </td>


                            <td>

                                <strong class="price">
                                    ₹7,499
                                </strong>

                            </td>


                            <td>

                                <span class="payment pending-payment">
                                    Pending
                                </span>

                            </td>


                            <td>

                                <span class="order-status pending">
                                    Pending
                                </span>

                            </td>


                            <td>

                                <button
                                    class="view-btn"
                                    onclick="viewOrder('ORD-1022')"
                                >
                                    View
                                </button>

                            </td>


                        </tr>



                        <!-- =================================================
                             ORDER 4
                        ================================================== -->

                        <tr class="order-row"
                            data-status="shipped">


                            <td>

                                <div class="order-id">

                                    <strong>#ORD-1021</strong>

                                    <span>1 item</span>

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    <div class="customer-avatar">
                                        AM
                                    </div>

                                    <div>

                                        <strong>Aman Mishra</strong>

                                        <span>aman@example.com</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👞
                                    </div>

                                    <div>

                                        <strong>Classic Formal</strong>

                                        <span>Size: 9</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="date-info">

                                    <strong>28 Aug 2026</strong>

                                    <span>02:15 PM</span>

                                </div>

                            </td>


                            <td>

                                <strong class="price">
                                    ₹3,999
                                </strong>

                            </td>


                            <td>

                                <span class="payment paid">
                                    Paid
                                </span>

                            </td>


                            <td>

                                <span class="order-status shipped">
                                    Shipped
                                </span>

                            </td>


                            <td>

                                <button
                                    class="view-btn"
                                    onclick="viewOrder('ORD-1021')"
                                >
                                    View
                                </button>

                            </td>


                        </tr>



                        <!-- =================================================
                             ORDER 5
                        ================================================== -->

                        <tr class="order-row"
                            data-status="delivered">


                            <td>

                                <div class="order-id">

                                    <strong>#ORD-1020</strong>

                                    <span>1 item</span>

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    <div class="customer-avatar">
                                        VS
                                    </div>

                                    <div>

                                        <strong>Vikas Sharma</strong>

                                        <span>vikas@example.com</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <strong>New Balance 574</strong>

                                        <span>Size: 10</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="date-info">

                                    <strong>27 Aug 2026</strong>

                                    <span>11:25 AM</span>

                                </div>

                            </td>


                            <td>

                                <strong class="price">
                                    ₹5,299
                                </strong>

                            </td>


                            <td>

                                <span class="payment paid">
                                    Paid
                                </span>

                            </td>


                            <td>

                                <span class="order-status delivered">
                                    Delivered
                                </span>

                            </td>


                            <td>

                                <button
                                    class="view-btn"
                                    onclick="viewOrder('ORD-1020')"
                                >
                                    View
                                </button>

                            </td>


                        </tr>



                        <!-- =================================================
                             ORDER 6
                        ================================================== -->

                        <tr class="order-row"
                            data-status="cancelled">


                            <td>

                                <div class="order-id">

                                    <strong>#ORD-1019</strong>

                                    <span>1 item</span>

                                </div>

                            </td>


                            <td>

                                <div class="customer">

                                    <div class="customer-avatar">
                                        SK
                                    </div>

                                    <div>

                                        <strong>Simran Kaur</strong>

                                        <span>simran@example.com</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <strong>Puma Runner</strong>

                                        <span>Size: 8</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="date-info">

                                    <strong>26 Aug 2026</strong>

                                    <span>04:47 PM</span>

                                </div>

                            </td>


                            <td>

                                <strong class="price">
                                    ₹3,499
                                </strong>

                            </td>


                            <td>

                                <span class="payment refunded">
                                    Refunded
                                </span>

                            </td>


                            <td>

                                <span class="order-status cancelled">
                                    Cancelled
                                </span>

                            </td>


                            <td>

                                <button
                                    class="view-btn"
                                    onclick="viewOrder('ORD-1019')"
                                >
                                    View
                                </button>

                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>



            <!-- =====================================================
                 PAGINATION
            ====================================================== -->

            <div class="pagination">


                <div class="pagination-info">

                    Showing
                    <strong id="showingCount">1-6</strong>
                    of
                    <strong>248</strong>
                    orders

                </div>


                <div class="page-buttons">

                    <button disabled>
                        ←
                    </button>

                    <button class="current">
                        1
                    </button>

                    <button>
                        2
                    </button>

                    <button>
                        3
                    </button>

                    <button>
                        ...
                    </button>

                    <button>
                        42
                    </button>

                    <button>
                        →
                    </button>

                </div>


            </div>


        </section>


    </main>



    <!-- =====================================================
         ORDER VIEW MODAL
    ====================================================== -->

    <div class="modal-overlay" id="orderModal">


        <div class="order-modal">


            <!-- MODAL HEADER -->

            <div class="modal-header">


                <div>

                    <p class="modal-label">
                        ORDER DETAILS
                    </p>

                    <h2 id="modalOrderId">
                        #ORD-1024
                    </h2>

                </div>


                <button
                    class="close-modal"
                    onclick="closeOrderModal()"
                >
                    ×
                </button>


            </div>



            <!-- CUSTOMER -->

            <div class="detail-section">


                <h3>Customer Information</h3>


                <div class="customer-detail">


                    <div class="large-avatar">
                        RK
                    </div>


                    <div>

                        <strong id="modalCustomer">
                            Rahul Kumar
                        </strong>

                        <span>
                            rahul@example.com
                        </span>

                        <span>
                            +91 98765 43210
                        </span>

                    </div>


                </div>


            </div>



            <!-- ORDER ITEM -->

            <div class="detail-section">


                <h3>Order Item</h3>


                <div class="modal-product">


                    <div class="modal-product-image">
                        👟
                    </div>


                    <div class="modal-product-info">

                        <strong id="modalProduct">
                            Nike Air Max
                        </strong>

                        <span>
                            Size: 9
                        </span>

                        <span>
                            Quantity: 1
                        </span>

                    </div>


                    <strong id="modalPrice">
                        ₹4,999
                    </strong>


                </div>


            </div>



            <!-- ORDER INFORMATION -->

            <div class="detail-section">


                <h3>Order Information</h3>


                <div class="order-detail-grid">


                    <div>

                        <span>Order Date</span>

                        <strong>
                            29 Aug 2026
                        </strong>

                    </div>


                    <div>

                        <span>Payment</span>

                        <strong>
                            Paid
                        </strong>

                    </div>


                    <div>

                        <span>Payment Method</span>

                        <strong>
                            UPI
                        </strong>

                    </div>


                    <div>

                        <span>Status</span>

                        <strong class="modal-status">
                            Delivered
                        </strong>

                    </div>


                </div>


            </div>



            <!-- MODAL ACTIONS -->

            <div class="modal-actions">


                <button
                    class="close-btn"
                    onclick="closeOrderModal()"
                >
                    Close
                </button>


                <button
                    class="update-btn"
                    onclick="updateOrder()"
                >
                    Update Status
                </button>


            </div>


        </div>


    </div>



    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

    <script>


        /* =================================================
           SEARCH ORDERS
        ================================================= */

        const orderSearch =
            document.getElementById("orderSearch");


        orderSearch.addEventListener("input", function () {


            const searchValue =
                this.value.toLowerCase().trim();


            const rows =
                document.querySelectorAll(".order-row");


            let visibleCount = 0;


            rows.forEach(function (row) {


                const text =
                    row.textContent.toLowerCase();


                if (text.includes(searchValue)) {

                    row.style.display = "";

                    visibleCount++;

                } else {

                    row.style.display = "none";

                }

            });


            document.getElementById(
                "showingCount"
            ).textContent = visibleCount;


        });



        /* =================================================
           STATUS FILTER
        ================================================= */

        const statusFilter =
            document.getElementById("statusFilter");


        statusFilter.addEventListener(
            "change",
            filterOrders
        );


        function filterOrders() {


            const selectedStatus =
                statusFilter.value;


            const rows =
                document.querySelectorAll(".order-row");


            let visibleCount = 0;


            rows.forEach(function (row) {


                const rowStatus =
                    row.dataset.status;


                if (
                    selectedStatus === "all" ||
                    rowStatus === selectedStatus
                ) {

                    row.style.display = "";

                    visibleCount++;

                } else {

                    row.style.display = "none";

                }

            });


            document.getElementById(
                "showingCount"
            ).textContent = visibleCount;

        }



        /* =================================================
           VIEW ORDER
        ================================================= */

        function viewOrder(orderId) {


            const modal =
                document.getElementById("orderModal");


            document.getElementById(
                "modalOrderId"
            ).textContent = "#" + orderId;


            modal.classList.add("show");

        }



        /* =================================================
           CLOSE MODAL
        ================================================= */

        function closeOrderModal() {

            document
                .getElementById("orderModal")
                .classList.remove("show");

        }



        /* =================================================
           CLOSE MODAL OUTSIDE
        ================================================= */

        document
            .getElementById("orderModal")
            .addEventListener(
                "click",
                function (event) {

                    if (
                        event.target === this
                    ) {

                        closeOrderModal();

                    }

                }
            );



        /* =================================================
           UPDATE ORDER
        ================================================= */

        function updateOrder() {

            alert(
                "Order status update will be connected to PHP + MySQL later."
            );

        }


        /* =================================================
           DATE FILTER
        ================================================= */

        document
            .getElementById("dateFilter")
            .addEventListener(
                "change",
                function () {

                    alert(
                        "Date filtering will be connected to PHP + MySQL later."
                    );

                }
            );


    </script>


</body>

</html>