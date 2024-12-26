<!DOCTYPE html>
<html>
<head>
    <title>Resipi Ikan Bulu Ayam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .tab-active {
            border-bottom: 2px solid #ff6b00;
            color: black !important;
        }
        .recipe-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .recipe-card {
            border-bottom: 1px solid #f1f1f1;
            padding: 16px 0;
            background: white;
        }
        .user-img {
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }
        .text-gray {
            color: #666;
        }
        .bookmark-btn {
            border: none;
            background: none;
            float: right;
        }
        .tag {
            background-color: #f1f1f1;
            padding: 2px 8px;
            margin: 2px;
            border-radius: 12px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include 'header.html'; ?>

    <div class="w3-container" style ="background-color: white;">
        <!-- Navigation Tabs -->
        <div class="w3-bar w3-padding-16">
            <a href="#" class="w3-bar-item w3-button tab-active">Terkini</a>
            <a href="#" class="w3-bar-item w3-button">
                <i class="fa fa-star" style="color: orange;"></i> Popular
            </a>
        </div>

        <!-- Recipe Count -->
        <div class="w3-padding-16">
            <span class="text-gray">(10)</span> resipi Ikan bulu ayam
        </div>

        <!-- Recipe List -->
        <div class="w3-row">
            <!-- Left Column - Recipes -->
            <div class="w3-col m8">
                <!-- Recipe 1 -->
                <div class="recipe-card">
                    <div class="w3-row">
                        <div class="w3-col" style="width:120px">
                            <img src="sambal-sira.jpg" class="recipe-img w3-round">
                        </div>
                        <div class="w3-rest w3-padding-left">
                            <button class="bookmark-btn"><i class="fa fa-bookmark-o"></i></button>
                            <h3>Sambal Sira Ikan Kering Bulu Ayam</h3>
                            <div class="w3-text-grey">
                                ikan bulu ayam kering (nipis) • ikan bilis • bawang putih
                                • cili kering
                            </div>
                            <div class="w3-padding-small">
                                <img src="user1.jpg" class="user-img"> Sesimple Loralin
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recipe 2 -->
                <div class="recipe-card">
                    <div class="w3-row">
                        <div class="w3-col" style="width:120px">
                            <img src="goreng-cili.jpg" class="recipe-img w3-round">
                        </div>
                        <div class="w3-rest w3-padding-left">
                            <button class="bookmark-btn"><i class="fa fa-bookmark-o"></i></button>
                            <h3>Ikan Bulu Ayam Goreng Cili Layu</h3>
                            <div class="w3-text-grey">
                                ikan bulu ayam masin • tangkai cili api hijau kering
                                • biji bawang besar
                            </div>
                            <div class="w3-padding-small">
                                <i class="fa fa-clock-o text-gray"></i> 15 minit
                                <i class="fa fa-users text-gray w3-margin-left"></i> 4 orang
                                <img src="user2.jpg" class="user-img w3-margin-left">
                                LATIPAH NAWAWI
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Filter -->
            <div class="w3-col m4 w3-padding-left">
                <div class="w3-container w3-padding w3-round" style="background:#fff9e6">
                    <h4>Filter</h4>
                    <div class="w3-bar-block">
                        <span class="w3-text-grey">Set semula</span>
                        <p>Lihat resipi-resipi dengan:</p>
                        <div class="w3-padding-small">
                            <input class="w3-input w3-border w3-round" type="text" placeholder="Taip bahan-bahan...">
                        </div>
                        <p>Lihat resipi-resipi tanpa:</p>
                        <div class="w3-padding-small">
                            <input class="w3-input w3-border w3-round" type="text" placeholder="Taip bahan-bahan...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
