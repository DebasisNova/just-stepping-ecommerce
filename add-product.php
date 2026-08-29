<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Just Stepping | Add Product</title>

    <!-- Only this page's CSS -->
    <link rel="stylesheet" href="add-product.css">

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



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="main-content">


        <!-- =================================================
             TOPBAR
        ================================================== -->

        <header class="topbar">

            <div class="page-heading">

                <p class="topbar-label">
                    PRODUCT MANAGEMENT
                </p>

                <h1>Add Product</h1>

                <p class="page-description">
                    Add a new shoe to your store inventory.
                </p>

            </div>


            <div class="topbar-right">

                <button
                    type="button"
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



        <!-- =================================================
             BREADCRUMB
        ================================================== -->

        <div class="breadcrumb">

            <a href="product.php">
                Products
            </a>

            <span>›</span>

            <span>Add Product</span>

        </div>



        <!-- =================================================
             PRODUCT FORM
        ================================================== -->

        <form
            action=""
            method="POST"
            enctype="multipart/form-data"
            id="productForm"
        >


            <div class="form-layout">


                <!-- =================================================
                     LEFT COLUMN
                ================================================== -->

                <div class="left-column">


                    <!-- PRODUCT INFORMATION -->

                    <section class="form-card">

                        <div class="card-header">

                            <div>

                                <h2>Product Information</h2>

                                <p>
                                    Enter the basic details of your shoe.
                                </p>

                            </div>

                        </div>


                        <!-- PRODUCT NAME -->

                        <div class="form-group">

                            <label for="product_name">

                                Product Name

                                <span>*</span>

                            </label>

                            <input
                                type="text"
                                id="product_name"
                                name="product_name"
                                placeholder="e.g. Just Steeping Air Runner"
                                required
                            >

                        </div>


                        <!-- CATEGORY + BRAND -->

                        <div class="form-row">


                            <div class="form-group">

                                <label for="category">

                                    Category

                                    <span>*</span>

                                </label>

                                <select
                                    id="category"
                                    name="category"
                                    required
                                >

                                    <option value="">
                                        Select Category
                                    </option>

                                    <option value="running">
                                        Running Shoes
                                    </option>

                                    <option value="casual">
                                        Casual Shoes
                                    </option>

                                    <option value="sports">
                                        Sports Shoes
                                    </option>

                                    <option value="formal">
                                        Formal Shoes
                                    </option>

                                    <option value="sneakers">
                                        Sneakers
                                    </option>

                                    <option value="boots">
                                        Boots
                                    </option>

                                    <option value="sandals">
                                        Sandals
                                    </option>

                                </select>

                            </div>


                            <div class="form-group">

                                <label for="brand">

                                    Brand

                                    <span>*</span>

                                </label>

                                <input
                                    type="text"
                                    id="brand"
                                    name="brand"
                                    placeholder="e.g. Just Steeping"
                                    required
                                >

                            </div>


                        </div>


                        <!-- DESCRIPTION -->

                        <div class="form-group">

                            <label for="description">

                                Product Description

                                <span>*</span>

                            </label>

                            <textarea
                                id="description"
                                name="description"
                                rows="6"
                                placeholder="Write a detailed description of the shoe..."
                                required
                            ></textarea>

                            <div class="character-count">

                                <span id="descriptionCount">
                                    0
                                </span>

                                / 500 characters

                            </div>

                        </div>


                    </section>



                    <!-- PRICING -->

                    <section class="form-card">

                        <div class="card-header">

                            <div>

                                <h2>Pricing & Inventory</h2>

                                <p>
                                    Set the price and available stock.
                                </p>

                            </div>

                        </div>


                        <div class="form-row three-columns">


                            <!-- PRICE -->

                            <div class="form-group">

                                <label for="price">

                                    Price (₹)

                                    <span>*</span>

                                </label>

                                <div class="input-prefix">

                                    <span>₹</span>

                                    <input
                                        type="number"
                                        id="price"
                                        name="price"
                                        placeholder="2999"
                                        min="0"
                                        step="0.01"
                                        required
                                    >

                                </div>

                            </div>


                            <!-- DISCOUNT -->

                            <div class="form-group">

                                <label for="discount_price">

                                    Sale Price (₹)

                                </label>

                                <div class="input-prefix">

                                    <span>₹</span>

                                    <input
                                        type="number"
                                        id="discount_price"
                                        name="discount_price"
                                        placeholder="2499"
                                        min="0"
                                        step="0.01"
                                    >

                                </div>

                            </div>


                            <!-- STOCK -->

                            <div class="form-group">

                                <label for="stock">

                                    Stock Quantity

                                    <span>*</span>

                                </label>

                                <input
                                    type="number"
                                    id="stock"
                                    name="stock"
                                    placeholder="25"
                                    min="0"
                                    required
                                >

                            </div>


                        </div>


                        <!-- SIZE -->

                        <div class="form-group">

                            <label>

                                Available Sizes

                                <span>*</span>

                            </label>


                            <div class="size-grid">


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="6"
                                    >

                                    <span>6</span>

                                </label>


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="7"
                                    >

                                    <span>7</span>

                                </label>


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="8"
                                    >

                                    <span>8</span>

                                </label>


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="9"
                                    >

                                    <span>9</span>

                                </label>


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="10"
                                    >

                                    <span>10</span>

                                </label>


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="11"
                                    >

                                    <span>11</span>

                                </label>


                                <label class="size-option">

                                    <input
                                        type="checkbox"
                                        name="sizes[]"
                                        value="12"
                                    >

                                    <span>12</span>

                                </label>


                            </div>

                        </div>


                        <!-- COLOR -->

                        <div class="form-group">

                            <label for="color">

                                Primary Color

                            </label>

                            <input
                                type="text"
                                id="color"
                                name="color"
                                placeholder="e.g. Black / White"
                            >

                        </div>


                    </section>



                    <!-- PRODUCT DESCRIPTION DETAILS -->

                    <section class="form-card">

                        <div class="card-header">

                            <div>

                                <h2>Additional Details</h2>

                                <p>
                                    Add additional information about the shoe.
                                </p>

                            </div>

                        </div>


                        <div class="form-row">


                            <div class="form-group">

                                <label for="material">

                                    Material

                                </label>

                                <input
                                    type="text"
                                    id="material"
                                    name="material"
                                    placeholder="e.g. Mesh, Leather"
                                >

                            </div>


                            <div class="form-group">

                                <label for="gender">

                                    Gender

                                </label>

                                <select
                                    id="gender"
                                    name="gender"
                                >

                                    <option value="">
                                        Select Gender
                                    </option>

                                    <option value="men">
                                        Men
                                    </option>

                                    <option value="women">
                                        Women
                                    </option>

                                    <option value="unisex">
                                        Unisex
                                    </option>

                                    <option value="kids">
                                        Kids
                                    </option>

                                </select>

                            </div>


                        </div>


                        <div class="form-row">


                            <div class="form-group">

                                <label for="weight">

                                    Weight

                                </label>

                                <input
                                    type="text"
                                    id="weight"
                                    name="weight"
                                    placeholder="e.g. 650g"
                                >

                            </div>


                            <div class="form-group">

                                <label for="sole">

                                    Sole Material

                                </label>

                                <input
                                    type="text"
                                    id="sole"
                                    name="sole"
                                    placeholder="e.g. Rubber"
                                >

                            </div>


                        </div>


                    </section>


                </div>



                <!-- =================================================
                     RIGHT COLUMN
                ================================================== -->

                <div class="right-column">


                    <!-- PRODUCT IMAGE -->

                    <section class="form-card image-card">

                        <div class="card-header">

                            <div>

                                <h2>Product Image</h2>

                                <p>
                                    Upload a clear image of your shoe.
                                </p>

                            </div>

                        </div>


                        <div
                            class="image-upload-area"
                            id="imageUploadArea"
                        >

                            <div
                                class="upload-icon"
                                id="uploadIcon"
                            >
                                🖼️
                            </div>


                            <div
                                class="image-preview"
                                id="imagePreview"
                            ></div>


                            <h3>
                                Upload Product Image
                            </h3>

                            <p>
                                PNG, JPG or WEBP
                            </p>

                            <span>
                                Maximum file size: 2MB
                            </span>


                            <label
                                for="product_image"
                                class="upload-btn"
                            >
                                Choose Image
                            </label>


                            <input
                                type="file"
                                id="product_image"
                                name="product_image"
                                accept="image/png,image/jpeg,image/webp"
                                hidden
                            >

                        </div>


                        <div
                            class="image-error"
                            id="imageError"
                        ></div>


                    </section>



                    <!-- STATUS -->

                    <section class="form-card">

                        <div class="card-header">

                            <div>

                                <h2>Product Status</h2>

                                <p>
                                    Control product visibility.
                                </p>

                            </div>

                        </div>


                        <div class="status-options">


                            <label class="status-option selected">

                                <input
                                    type="radio"
                                    name="status"
                                    value="active"
                                    checked
                                >

                                <div>

                                    <strong>
                                        Active
                                    </strong>

                                    <span>
                                        Product is visible to customers.
                                    </span>

                                </div>

                            </label>


                            <label class="status-option">

                                <input
                                    type="radio"
                                    name="status"
                                    value="draft"
                                >

                                <div>

                                    <strong>
                                        Draft
                                    </strong>

                                    <span>
                                        Product is saved but hidden.
                                    </span>

                                </div>

                            </label>


                        </div>

                    </section>



                    <!-- PRODUCT SUMMARY -->

                    <section class="form-card summary-card">

                        <div class="card-header">

                            <div>

                                <h2>Quick Summary</h2>

                            </div>

                        </div>


                        <div class="summary-item">

                            <span>
                                Product
                            </span>

                            <strong id="summaryName">
                                —
                            </strong>

                        </div>


                        <div class="summary-item">

                            <span>
                                Category
                            </span>

                            <strong id="summaryCategory">
                                —
                            </strong>

                        </div>


                        <div class="summary-item">

                            <span>
                                Price
                            </span>

                            <strong id="summaryPrice">
                                ₹0
                            </strong>

                        </div>


                        <div class="summary-item">

                            <span>
                                Stock
                            </span>

                            <strong id="summaryStock">
                                0
                            </strong>

                        </div>


                    </section>


                </div>


            </div>



            <!-- =================================================
                 FORM ACTIONS
            ================================================== -->

            <div class="form-actions">


                <a
                    href="product.php"
                    class="cancel-btn"
                >
                    Cancel
                </a>


                <button
                    type="submit"
                    class="save-draft-btn"
                    name="action"
                    value="draft"
                >
                    Save as Draft
                </button>


                <button
                    type="submit"
                    class="add-product-btn"
                    name="action"
                    value="publish"
                >
                    + Add Product
                </button>


            </div>


        </form>


    </main>



    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

    <script>


        /* =================================================
           DESCRIPTION CHARACTER COUNTER
        ================================================== */

        const description =
            document.getElementById("description");

        const descriptionCount =
            document.getElementById("descriptionCount");


        description.addEventListener(
            "input",
            function () {

                descriptionCount.textContent =
                    this.value.length;

            }
        );



        /* =================================================
           IMAGE PREVIEW
        ================================================== */

        const imageInput =
            document.getElementById("product_image");

        const imagePreview =
            document.getElementById("imagePreview");

        const uploadIcon =
            document.getElementById("uploadIcon");

        const imageUploadArea =
            document.getElementById("imageUploadArea");

        const imageError =
            document.getElementById("imageError");


        imageInput.addEventListener(
            "change",
            function () {


                imageError.textContent = "";


                const file =
                    this.files[0];


                if (!file) {

                    return;

                }


                /* Check file type */

                const allowedTypes = [
                    "image/jpeg",
                    "image/png",
                    "image/webp"
                ];


                if (
                    !allowedTypes.includes(
                        file.type
                    )
                ) {

                    imageError.textContent =
                        "Please select a JPG, PNG or WEBP image.";

                    this.value = "";

                    return;

                }


                /* Check file size */

                if (
                    file.size >
                    2 * 1024 * 1024
                ) {

                    imageError.textContent =
                        "Image size must be less than 2MB.";

                    this.value = "";

                    return;

                }


                const reader =
                    new FileReader();


                reader.onload =
                    function (event) {


                        imagePreview.innerHTML =
                            `<img src="${event.target.result}" alt="Product Preview">`;


                        imagePreview.classList.add(
                            "show"
                        );


                        uploadIcon.style.display =
                            "none";


                        imageUploadArea.classList.add(
                            "has-image"
                        );

                    };


                reader.readAsDataURL(file);

            }
        );



        /* =================================================
           LIVE PRODUCT SUMMARY
        ================================================== */

        const productName =
            document.getElementById(
                "product_name"
            );

        const category =
            document.getElementById(
                "category"
            );

        const price =
            document.getElementById(
                "price"
            );

        const stock =
            document.getElementById(
                "stock"
            );


        const summaryName =
            document.getElementById(
                "summaryName"
            );

        const summaryCategory =
            document.getElementById(
                "summaryCategory"
            );

        const summaryPrice =
            document.getElementById(
                "summaryPrice"
            );

        const summaryStock =
            document.getElementById(
                "summaryStock"
            );


        productName.addEventListener(
            "input",
            function () {

                summaryName.textContent =
                    this.value || "—";

            }
        );


        category.addEventListener(
            "change",
            function () {

                if (this.value) {

                    summaryCategory.textContent =
                        this.options[
                            this.selectedIndex
                        ].text;

                } else {

                    summaryCategory.textContent =
                        "—";

                }

            }
        );


        price.addEventListener(
            "input",
            function () {

                summaryPrice.textContent =
                    "₹" +
                    (
                        Number(this.value) || 0
                    ).toLocaleString("en-IN");

            }
        );


        stock.addEventListener(
            "input",
            function () {

                summaryStock.textContent =
                    this.value || "0";

            }
        );



        /* =================================================
           STATUS RADIO UI
        ================================================== */

        const statusOptions =
            document.querySelectorAll(
                ".status-option"
            );


        statusOptions.forEach(
            function (option) {


                const radio =
                    option.querySelector(
                        "input"
                    );


                radio.addEventListener(
                    "change",
                    function () {


                        statusOptions.forEach(
                            function (item) {

                                item.classList.remove(
                                    "selected"
                                );

                            }
                        );


                        if (this.checked) {

                            option.classList.add(
                                "selected"
                            );

                        }

                    }
                );

            }
        );



        /* =================================================
           FORM VALIDATION
        ================================================== */

        document
            .getElementById("productForm")
            .addEventListener(
                "submit",
                function (event) {


                    const sizes =
                        document.querySelectorAll(
                            'input[name="sizes[]"]:checked'
                        );


                    if (sizes.length === 0) {

                        event.preventDefault();


                        alert(
                            "Please select at least one shoe size."
                        );


                        return;

                    }


                    const salePrice =
                        document.getElementById(
                            "discount_price"
                        ).value;


                    const regularPrice =
                        Number(
                            document.getElementById(
                                "price"
                            ).value
                        );


                    if (
                        salePrice &&
                        Number(salePrice) >
                        regularPrice
                    ) {

                        event.preventDefault();


                        alert(
                            "Sale price cannot be higher than the regular price."
                        );


                        return;

                    }

                }
            );


    </script>


</body>

</html>