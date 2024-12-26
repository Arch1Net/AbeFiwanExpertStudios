<?php 
include ('header.php'); 
//include ('popup.php'); 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Legacy Kueh System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .nav-underline .nav-link.active {
            border-bottom: 2px solid #228B22;
        }

        .recipe-card:hover {
            background-color: #f9f9f9;
            transition: background-color 0.3s ease;
        }

        .card-img-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .sticky-filter {
            position: sticky;
            top: 0;
            z-index: 100;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
        }

        .profile-img {
            width: 24px;
            height: 24px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="w3-round-large" style="height: auto; margin-top: 4%">
        <div class="w3-container w3-white" style="margin-top:5px; width: 100%; height: 100%;">
            <div class="container mt-4">
                <ul class="nav nav-underline mb-4">
                    <li class="nav-item">
                        <a class="nav-link active fs-4" href="#">Terkini</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <span class="fs-3">(10)</span>
                            <span class="fs-3 fw-normal">resipi</span>
                            <span class="fs-2 fw-bold">Ikan bulu ayam</span>
                        </div>

                        <!-- Recipe cards -->
                        <div class="recipe-list">
                            <!-- Recipe card template -->
                            <a href="#" class="text-decoration-none">
                                <div class="card recipe-card mb-4 border-0 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="card-img-container">
                                                <img src="sources/sambal.jpg" class="card-img" alt="Sambal Sira Ikan Kering Bulu Ayam">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column h-100">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Sambal Sira Ikan Kering Bulu Ayam</h5>
                                                    <button class="btn btn-link p-0" id="bookmark-btn">
                                                        <i class="bi bi-bookmark fs-4" id="bookmark-icon" style="color: black;"></i>
                                                    </button>
                                                </div>
                                                <p class="card-text text-muted">ikan bulu ayam kering (nipis) • ikan bilis • bawang putih • cili kering (buang biji,direbus)/cili kisar • bawang kisar • halia dan bawang...</p>
                                                <div class="d-flex align-items-center mt-auto">
                                                    <img src="path/to/profile/image.jpg" class="rounded-circle profile-img me-2" alt="Profile">
                                                    <span>Sesimple Loralin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-decoration-none">
                                <div class="card recipe-card mb-4 border-0 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="card-img-container">
                                                <img src="sources/sambal.jpg" class="card-img" alt="Sambal Sira Ikan Kering Bulu Ayam">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column h-100">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Sambal Sira Ikan Kering Bulu Ayam</h5>
                                                    <button class="btn btn-link p-0" id="bookmark-btn">
                                                        <i class="bi bi-bookmark fs-4" id="bookmark-icon" style="color: black;"></i>
                                                    </button>
                                                </div>
                                                <p class="card-text text-muted">ikan bulu ayam kering (nipis) • ikan bilis • bawang putih • cili kering (buang biji,direbus)/cili kisar • bawang kisar • halia dan bawang...</p>
                                                <div class="d-flex align-items-center mt-auto">
                                                    <img src="path/to/profile/image.jpg" class="rounded-circle profile-img me-2" alt="Profile">
                                                    <span>Sesimple Loralin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-decoration-none">
                                <div class="card recipe-card mb-4 border-0 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="card-img-container">
                                                <img src="sources/sambal.jpg" class="card-img" alt="Sambal Sira Ikan Kering Bulu Ayam">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column h-100">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Sambal Sira Ikan Kering Bulu Ayam</h5>
                                                    <button class="btn btn-link p-0" id="bookmark-btn">
                                                        <i class="bi bi-bookmark fs-4" id="bookmark-icon" style="color: black;"></i>
                                                    </button>
                                                </div>
                                                <p class="card-text text-muted">ikan bulu ayam kering (nipis) • ikan bilis • bawang putih • cili kering (buang biji,direbus)/cili kisar • bawang kisar • halia dan bawang...</p>
                                                <div class="d-flex align-items-center mt-auto">
                                                    <img src="path/to/profile/image.jpg" class="rounded-circle profile-img me-2" alt="Profile">
                                                    <span>Sesimple Loralin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-decoration-none">
                                <div class="card recipe-card mb-4 border-0 shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div class="card-img-container">
                                                <img src="sources/sambal.jpg" class="card-img" alt="Sambal Sira Ikan Kering Bulu Ayam">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body d-flex flex-column h-100">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title">Sambal Sira Ikan Kering Bulu Ayam</h5>
                                                    <button class="btn btn-link p-0" id="bookmark-btn">
                                                        <i class="bi bi-bookmark fs-4" id="bookmark-icon" style="color: black;"></i>
                                                    </button>
                                                </div>
                                                <p class="card-text text-muted">ikan bulu ayam kering (nipis) • ikan bilis • bawang putih • cili kering (buang biji,direbus)/cili kisar • bawang kisar • halia dan bawang...</p>
                                                <div class="d-flex align-items-center mt-auto">
                                                    <img src="path/to/profile/image.jpg" class="rounded-circle profile-img me-2" alt="Profile">
                                                    <span>Sesimple Loralin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Filter sidebar -->
                    <div class="col-md-4 sticky-filter" style="margin-top: 67px;">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0">Filter</h5>
                                    <a href="#" class="text-decoration-none">Set semula</a>
                                </div>

                                <div class="mb-4">
                                    <h6>Lihat resipi-resipi dengan:</h6>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-search text-muted"></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0" placeholder="Taip bahan-bahan...">
                                    </div>
                                </div>

                                <div>
                                    <h6>Lihat resipi-resipi tanpa:</h6>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-search text-muted"></i>
                                        </span>
                                        <input type="text" class="form-control border-start-0" placeholder="Taip bahan-bahan...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Bookmark functionality
        const bookmarkBtn = document.getElementById("bookmark-btn");
        const bookmarkIcon = document.getElementById("bookmark-icon");
        
        const isBookmarked = localStorage.getItem("isBookmarked") === "true";
        
        if (isBookmarked) {
            bookmarkIcon.classList.replace("bi-bookmark", "bi-bookmark-fill");
            bookmarkIcon.style.color = "#228B22";
        }
        
        bookmarkBtn.addEventListener("click", function(e) {
            e.preventDefault(); // Prevent the link from navigating
            const isFilled = bookmarkIcon.classList.contains("bi-bookmark-fill");
            
            bookmarkIcon.classList.replace(
                isFilled ? "bi-bookmark-fill" : "bi-bookmark",
                isFilled ? "bi-bookmark" : "bi-bookmark-fill"
            );
            
            bookmarkIcon.style.color = isFilled ? "black" : "#228B22";
            localStorage.setItem("isBookmarked", !isFilled);
        });

        // Sticky filter handling
        window.addEventListener("scroll", function() {
            const filterSidebar = document.querySelector(".sticky-filter");
            const footer = document.querySelector("footer");
            
            if (footer) {
                const footerOffset = footer.offsetTop;
                const windowHeight = window.innerHeight;
                const remainingSpace = footerOffset - window.scrollY - windowHeight;
                
                filterSidebar.style.maxHeight = remainingSpace > 0 
                    ? `${remainingSpace}px` 
                    : "100vh";
            }
        });
    </script>
</body>
</html>

<?php 
include ('footer.php'); 
//include ('popup.php'); 
?>