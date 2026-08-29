<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Just Steeping | Products</title>

    <!-- ONLY Product CSS -->
    <link rel="stylesheet" href="product.css">

</head>

<body>


    <!-- =====================================
         SIDEBAR
    ====================================== -->

    <aside class="sidebar">


        <!-- LOGO -->

        <div class="admin-logo">

            <div class="logo-icon">
                👟
            </div>

            <div class="logo-text    ">

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


            <a href="product.php" class="menu-item active">

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



    <!-- =====================================
         MAIN CONTENT
    ====================================== -->

    <main class="main-content">


        <!-- TOP HEADER -->

        <header class="topbar">

            <div>

                <p class="topbar-label">
                    STORE MANAGEMENT
                </p>

                <h1>Products</h1>

                <p class="page-description">
                    Manage all shoes available in your store.
                </p>

            </div>


            <div class="topbar-right">

                <button class="notification-btn">
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



        <!-- =====================================
             PRODUCT STATISTICS
        ====================================== -->

        <section class="product-stats">


            <div class="stat-card">

                <div class="stat-icon">
                    👟
                </div>

                <div class="stat-content">

                    <span>Total Products</span>

                    <h3>120</h3>

                </div>

            </div>



            <div class="stat-card">

                <div class="stat-icon">
                    📦
                </div>

                <div class="stat-content">

                    <span>In Stock</span>

                    <h3>98</h3>

                </div>

            </div>



            <div class="stat-card">

                <div class="stat-icon">
                    ⚠️
                </div>

                <div class="stat-content">

                    <span>Low Stock</span>

                    <h3>12</h3>

                </div>

            </div>



            <div class="stat-card">

                <div class="stat-icon">
                    ❌
                </div>

                <div class="stat-content">

                    <span>Out of Stock</span>

                    <h3>10</h3>

                </div>

            </div>


        </section>



        <!-- =====================================
             PRODUCT TABLE CONTAINER
        ====================================== -->

        <section class="products-container">


            <!-- TOOLBAR -->

            <div class="products-toolbar">


                <!-- SEARCH -->

                <div class="search-box">

                    <span>🔍</span>

                    <input
                        type="text"
                        id="productSearch"
                        placeholder="Search products..."
                    >

                </div>


                <!-- FILTERS -->

                <div class="filter-group">


                    <select id="categoryFilter">

                        <option value="all">
                            All Categories
                        </option>

                        <option value="Running">
                            Running
                        </option>

                        <option value="Sports">
                            Sports
                        </option>

                        <option value="Casual">
                            Casual
                        </option>

                        <option value="Basketball">
                            Basketball
                        </option>

                    </select>


                    <select id="stockFilter">

                        <option value="all">
                            All Stock
                        </option>

                        <option value="in">
                            In Stock
                        </option>

                        <option value="low">
                            Low Stock
                        </option>

                        <option value="out">
                            Out of Stock
                        </option>

                    </select>


                </div>


            </div>



            <!-- =====================================
                 TABLE
            ====================================== -->

            <div class="table-wrapper">

                <table class="products-table">


                    <thead>

                        <tr>

                            <th>Product</th>

                            <th>Category</th>

                            <th>Price</th>

                            <th>Stock</th>

                            <th>Status</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody id="productTable">


                        <!-- PRODUCT 1 -->

                        <tr
                            class="product-row"
                            data-category="Running"
                            data-stock="in"
                        >

                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <h4>Nike Air Max</h4>

                                        <p>SKU: SHOE-001</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="category-tag">
                                    Running
                                </span>

                            </td>


                            <td class="price">
                                ₹4,999
                            </td>


                            <td>
                                25
                            </td>


                            <td>

                                <span class="status in-stock">
                                    In Stock
                                </span>

                            </td>


                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="edit-product.php"
                                        class="edit-btn"
                                    >
                                        Edit
                                    </a>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteProduct(this)"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>

                        </tr>



                        <!-- PRODUCT 2 -->

                        <tr
                            class="product-row"
                            data-category="Running"
                            data-stock="in"
                        >

                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <h4>Adidas Ultraboost</h4>

                                        <p>SKU: SHOE-002</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="category-tag">
                                    Running
                                </span>

                            </td>


                            <td class="price">
                                ₹5,499
                            </td>


                            <td>
                                18
                            </td>


                            <td>

                                <span class="status in-stock">
                                    In Stock
                                </span>

                            </td>


                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="edit-product.php"
                                        class="edit-btn"
                                    >
                                        Edit
                                    </a>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteProduct(this)"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>

                        </tr>



                        <!-- PRODUCT 3 -->

                        <tr
                            class="product-row"
                            data-category="Sports"
                            data-stock="low"
                        >

                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <h4>Puma Runner</h4>

                                        <p>SKU: SHOE-003</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="category-tag">
                                    Sports
                                </span>

                            </td>


                            <td class="price">
                                ₹2,999
                            </td>


                            <td>
                                5
                            </td>


                            <td>

                                <span class="status low-stock">
                                    Low Stock
                                </span>

                            </td>


                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="edit-product.php"
                                        class="edit-btn"
                                    >
                                        Edit
                                    </a>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteProduct(this)"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>

                        </tr>



                        <!-- PRODUCT 4 -->

                        <tr
                            class="product-row"
                            data-category="Casual"
                            data-stock="out"
                        >

                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <h4>New Balance 574</h4>

                                        <p>SKU: SHOE-004</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="category-tag">
                                    Casual
                                </span>

                            </td>


                            <td class="price">
                                ₹6,499
                            </td>


                            <td>
                                0
                            </td>


                            <td>

                                <span class="status out-stock">
                                    Out of Stock
                                </span>

                            </td>


                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="edit-product.php"
                                        class="edit-btn"
                                    >
                                        Edit
                                    </a>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteProduct(this)"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>

                        </tr>



                        <!-- PRODUCT 5 -->

                        <tr
                            class="product-row"
                            data-category="Casual"
                            data-stock="in"
                        >

                            <td>

                                <div class="product-info">

                                    <div class="product-image">
                                        👟
                                    </div>

                                    <div>

                                        <h4>Converse Chuck Taylor</h4>

                                        <p>SKU: SHOE-005</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="category-tag">
                                    Casual
                                </span>

                            </td>


                            <td class="price">
                                ₹3,999
                            </td>


                            <td>
                                32
                            </td>


                            <td>

                                <span class="status in-stock">
                                    In Stock
                                </span>

                            </td>


                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="edit-product.php"
                                        class="edit-btn"
                                    >
                                        Edit
                                    </a>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteProduct(this)"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>

                        </tr>


                    </tbody>


                </table>

            </div>



            <!-- =====================================
                 PAGINATION
            ====================================== -->

            <div class="pagination">


                <div class="pagination-info">

                    Showing
                    <strong>1-5</strong>
                    of
                    <strong>120</strong>
                    products

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
                        →
                    </button>

                </div>


            </div>


        </section>


    </main>



    <!-- =====================================
         JAVASCRIPT
    ====================================== -->

    <script>

        /* ===============================
           SEARCH
        =============================== */

        const searchInput =
            document.getElementById("productSearch");


        searchInput.addEventListener("input", function () {

            filterProducts();

        });



        /* ===============================
           CATEGORY FILTER
        =============================== */

        document
            .getElementById("categoryFilter")
            .addEventListener("change", function () {

                filterProducts();

            });



        /* ===============================
           STOCK FILTER
        =============================== */

        document
            .getElementById("stockFilter")
            .addEventListener("change", function () {

                filterProducts();

            });



        /* ===============================
           FILTER FUNCTION
        =============================== */

        function filterProducts() {

            const search =
                searchInput.value.toLowerCase();

            const category =
                document.getElementById("categoryFilter").value;

            const stock =
                document.getElementById("stockFilter").value;


            const rows =
                document.querySelectorAll(".product-row");


            rows.forEach(function (row) {

                const productName =
                    row
                    .querySelector("h4")
                    .textContent
                    .toLowerCase();


                const rowCategory =
                    row.dataset.category;


                const rowStock =
                    row.dataset.stock;


                const searchMatch =
                    productName.includes(search);


                const categoryMatch =
                    category === "all" ||
                    rowCategory === category;


                const stockMatch =
                    stock === "all" ||
                    rowStock === stock;


                if (
                    searchMatch &&
                    categoryMatch &&
                    stockMatch
                ) {

                    row.style.display = "";

                } else {

                    row.style.display = "none";

                }

            });

        }



        /* ===============================
           DELETE PRODUCT
        =============================== */

        function deleteProduct(button) {

            const productRow =
                button.closest(".product-row");


            const productName =
                productRow
                .querySelector("h4")
                .textContent;


            const confirmation =
                confirm(
                    "Are you sure you want to delete " +
                    productName +
                    "?"
                );


            if (confirmation) {

                productRow.remove();

            }

        }

    </script>


</body>

</html>