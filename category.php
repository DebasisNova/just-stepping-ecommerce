<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Just Stepping | Categories</title>

    <!-- ONLY CATEGORY CSS -->
    <link rel="stylesheet" href="category.css">

</head>

<body>


    <!-- ==================================================
         SIDEBAR
    =================================================== -->

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


            <a href="category.php" class="menu-item active">

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



    <!-- ==================================================
         MAIN CONTENT
    =================================================== -->

    <main class="main-content">


        <!-- ==================================================
             TOP HEADER
        =================================================== -->

        <header class="topbar">


            <div class="page-heading">

                <p class="topbar-label">
                    STORE MANAGEMENT
                </p>

                <h1>Categories</h1>

                <p class="page-description">
                    Organize and manage your shoe categories.
                </p>

            </div>


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



        <!-- ==================================================
             CATEGORY STATISTICS
        =================================================== -->

        <section class="category-stats">


            <!-- TOTAL CATEGORIES -->

            <div class="stat-card">

                <div class="stat-icon">
                    🗂️
                </div>

                <div class="stat-content">

                    <span>Total Categories</span>

                    <h3>8</h3>

                </div>

            </div>



            <!-- ACTIVE -->

            <div class="stat-card">

                <div class="stat-icon">
                    ✓
                </div>

                <div class="stat-content">

                    <span>Active Categories</span>

                    <h3>7</h3>

                </div>

            </div>



            <!-- PRODUCTS -->

            <div class="stat-card">

                <div class="stat-icon">
                    👟
                </div>

                <div class="stat-content">

                    <span>Products Assigned</span>

                    <h3>120</h3>

                </div>

            </div>



            <!-- EMPTY -->

            <div class="stat-card">

                <div class="stat-icon">
                    ⚠️
                </div>

                <div class="stat-content">

                    <span>Empty Categories</span>

                    <h3>1</h3>

                </div>

            </div>


        </section>



        <!-- ==================================================
             CATEGORY CONTAINER
        =================================================== -->

        <section class="category-container">


            <!-- TOOLBAR -->

            <div class="category-toolbar">


                <div class="search-box">

                    <span>🔍</span>

                    <input
                        type="text"
                        id="categorySearch"
                        placeholder="Search categories..."
                    >

                </div>


                <button
                    class="add-category-btn"
                    id="openModalBtn"
                >

                    <span>+</span>

                    Add Category

                </button>


            </div>



            <!-- ==================================================
                 CATEGORY TABLE
            =================================================== -->

            <div class="table-wrapper">


                <table class="category-table">


                    <thead>

                        <tr>

                            <th>Category</th>

                            <th>Description</th>

                            <th>Products</th>

                            <th>Status</th>

                            <th>Created</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody id="categoryTable">


                        <!-- CATEGORY 1 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon running">
                                        🏃
                                    </div>

                                    <div>

                                        <h4>Running</h4>

                                        <p>CAT-001</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Shoes designed for running
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    32
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                12 Aug 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Running')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Running')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 2 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon sports">
                                        ⚽
                                    </div>

                                    <div>

                                        <h4>Sports</h4>

                                        <p>CAT-002</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Shoes for sports activities
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    25
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                10 Aug 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Sports')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Sports')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 3 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon casual">
                                        👟
                                    </div>

                                    <div>

                                        <h4>Casual</h4>

                                        <p>CAT-003</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Everyday casual footwear
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    28
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                08 Aug 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Casual')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Casual')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 4 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon basketball">
                                        🏀
                                    </div>

                                    <div>

                                        <h4>Basketball</h4>

                                        <p>CAT-004</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Basketball performance shoes
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    15
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                05 Aug 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Basketball')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Basketball')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 5 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon formal">
                                        👞
                                    </div>

                                    <div>

                                        <h4>Formal</h4>

                                        <p>CAT-005</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Formal and office footwear
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    10
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                02 Aug 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Formal')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Formal')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 6 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon sneakers">
                                        👟
                                    </div>

                                    <div>

                                        <h4>Sneakers</h4>

                                        <p>CAT-006</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Modern lifestyle sneakers
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    7
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                30 Jul 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Sneakers')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Sneakers')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 7 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon hiking">
                                        🥾
                                    </div>

                                    <div>

                                        <h4>Hiking</h4>

                                        <p>CAT-007</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Outdoor and hiking footwear
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    3
                                </strong>

                            </td>


                            <td>

                                <span class="status active-status">
                                    Active
                                </span>

                            </td>


                            <td>
                                28 Jul 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Hiking')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Hiking')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>



                        <!-- CATEGORY 8 -->

                        <tr class="category-row">


                            <td>

                                <div class="category-info">

                                    <div class="category-icon kids">
                                        🧒
                                    </div>

                                    <div>

                                        <h4>Kids</h4>

                                        <p>CAT-008</p>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="description">
                                    Footwear for kids
                                </span>

                            </td>


                            <td>

                                <strong class="product-count">
                                    0
                                </strong>

                            </td>


                            <td>

                                <span class="status inactive-status">
                                    Inactive
                                </span>

                            </td>


                            <td>
                                25 Jul 2026
                            </td>


                            <td>

                                <div class="action-buttons">

                                    <button
                                        class="edit-btn"
                                        onclick="editCategory('Kids')"
                                    >
                                        Edit
                                    </button>

                                    <button
                                        class="delete-btn"
                                        onclick="deleteCategory(this, 'Kids')"
                                    >
                                        Delete
                                    </button>

                                </div>

                            </td>


                        </tr>


                    </tbody>


                </table>


            </div>



            <!-- ==================================================
                 PAGINATION
            =================================================== -->

            <div class="pagination">


                <div class="pagination-info">

                    Showing
                    <strong>1-8</strong>
                    of
                    <strong>8</strong>
                    categories

                </div>


                <div class="page-buttons">

                    <button disabled>
                        ←
                    </button>

                    <button class="current">
                        1
                    </button>

                    <button disabled>
                        →
                    </button>

                </div>


            </div>


        </section>


    </main>



    <!-- ==================================================
         ADD CATEGORY MODAL
    =================================================== -->

    <div class="modal-overlay" id="categoryModal">


        <div class="modal">


            <!-- MODAL HEADER -->

            <div class="modal-header">

                <div>

                    <p class="modal-label">
                        CATEGORY MANAGEMENT
                    </p>

                    <h2>Add New Category</h2>

                </div>


                <button
                    class="close-modal"
                    id="closeModalBtn"
                >
                    ×
                </button>

            </div>



            <!-- FORM -->

            <form id="categoryForm">


                <div class="form-group">

                    <label for="categoryName">
                        Category Name
                    </label>

                    <input
                        type="text"
                        id="categoryName"
                        placeholder="Enter category name"
                        required
                    >

                </div>



                <div class="form-group">

                    <label for="categoryDescription">
                        Description
                    </label>

                    <textarea
                        id="categoryDescription"
                        rows="4"
                        placeholder="Enter category description"
                    ></textarea>

                </div>



                <div class="form-group">

                    <label for="categoryStatus">
                        Status
                    </label>

                    <select id="categoryStatus">

                        <option value="active">
                            Active
                        </option>

                        <option value="inactive">
                            Inactive
                        </option>

                    </select>

                </div>



                <!-- FORM BUTTONS -->

                <div class="modal-actions">

                    <button
                        type="button"
                        class="cancel-btn"
                        id="cancelModalBtn"
                    >
                        Cancel
                    </button>


                    <button
                        type="submit"
                        class="save-btn"
                    >
                        Save Category
                    </button>

                </div>


            </form>


        </div>


    </div>



    <!-- ==================================================
         JAVASCRIPT
    =================================================== -->

    <script>


        /* ================================================
           MODAL ELEMENTS
        ================================================= */

        const modal =
            document.getElementById("categoryModal");

        const openModalBtn =
            document.getElementById("openModalBtn");

        const closeModalBtn =
            document.getElementById("closeModalBtn");

        const cancelModalBtn =
            document.getElementById("cancelModalBtn");



        /* ================================================
           OPEN MODAL
        ================================================= */

        openModalBtn.addEventListener("click", function () {

            modal.classList.add("show");

        });



        /* ================================================
           CLOSE MODAL
        ================================================= */

        function closeModal() {

            modal.classList.remove("show");

        }


        closeModalBtn.addEventListener(
            "click",
            closeModal
        );


        cancelModalBtn.addEventListener(
            "click",
            closeModal
        );



        /* ================================================
           CLOSE WHEN CLICKING OUTSIDE
        ================================================= */

        modal.addEventListener("click", function (event) {

            if (event.target === modal) {

                closeModal();

            }

        });



        /* ================================================
           SEARCH CATEGORY
        ================================================= */

        const searchInput =
            document.getElementById("categorySearch");


        searchInput.addEventListener("input", function () {

            const searchValue =
                this.value.toLowerCase();


            const rows =
                document.querySelectorAll(".category-row");


            rows.forEach(function (row) {

                const categoryName =
                    row
                    .querySelector("h4")
                    .textContent
                    .toLowerCase();


                if (
                    categoryName.includes(searchValue)
                ) {

                    row.style.display = "";

                } else {

                    row.style.display = "none";

                }

            });

        });



        /* ================================================
           DELETE CATEGORY
        ================================================= */

        function deleteCategory(button, categoryName) {


            const confirmation =
                confirm(
                    "Are you sure you want to delete the '" +
                    categoryName +
                    "' category?"
                );


            if (confirmation) {

                button
                    .closest(".category-row")
                    .remove();

                alert(
                    categoryName +
                    " category has been deleted."
                );

            }

        }



        /* ================================================
           EDIT CATEGORY
        ================================================= */

        function editCategory(categoryName) {

            alert(
                "Edit feature for '" +
                categoryName +
                "' will be connected to PHP + MySQL later."
            );

        }



        /* ================================================
           ADD CATEGORY FORM
        ================================================= */

        const categoryForm =
            document.getElementById("categoryForm");


        categoryForm.addEventListener(
            "submit",
            function (event) {

                event.preventDefault();


                const categoryName =
                    document
                    .getElementById("categoryName")
                    .value
                    .trim();


                if (categoryName === "") {

                    alert(
                        "Please enter a category name."
                    );

                    return;

                }


                alert(
                    "Category '" +
                    categoryName +
                    "' added successfully!"
                );


                categoryForm.reset();

                closeModal();

            }
        );


    </script>


</body>

</html>