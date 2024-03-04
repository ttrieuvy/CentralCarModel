<div class="row">
    <div class="col-sm-12">
        <div class="related-products">
            <i class="fa-solid fa-circle fa-beat" style="color: #fff;padding-left: 5px;"></i>
            <h4>CÁC SẢN PHẨM CÙNG LOẠI</h4>
        </div>
    </div>
</div>
<div class="row">

    <?php
    $arrProduct_type = product_select_by_type($id_type);

    // tạo 4 sản phẩm cùng loại ngẫu nhiên
    for ($i = 1; $i <= 4; $i++) {

        $rand = array_rand($arrProduct_type);
        $price_sale = $arrProduct_type[$rand]['price'] - ($arrProduct_type[$rand]['price'] * $arrProduct_type[$rand]['sale']) / 100;
        echo '
            <div class="col-sm-3">
        <div class="product">
            <div class="img-product">
                <img src="' . $CONTENT_URL . '/image/product/' . $arrProduct_type[$rand]['avatar'] . '" alt="">
                <div class="icon-hear">
                    <div class="con-like">
                        <input title="like" type="checkbox" class="like">
                        <div class="checkmark">
                            <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                </path>
                            </svg>
                            <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                </path>
                            </svg>
                            <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="10,10 20,20" class="poly"></polygon>
                                <polygon points="10,50 20,50" class="poly"></polygon>
                                <polygon points="20,80 30,70" class="poly"></polygon>
                                <polygon points="90,10 80,20" class="poly"></polygon>
                                <polygon points="90,50 80,50" class="poly"></polygon>
                                <polygon points="80,80 70,70" class="poly"></polygon>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="">' . $arrProduct_type[$rand]['name'] . '</a>
            </div>
            <div class="price-product">
                <span class="default-price">' . number_format($arrProduct_type[$rand]['price']) . '₫</span>
                <span class="promotional-price">' . number_format($price_sale)  . '₫</span>
            </div>
            <a href="../product/product-details.php?id_product=' . number_format($arrProduct_type[$rand]['id_product'])  . '"><i id="search" class="fa-solid fa-magnifying-glass"></i></a>
            <div class="btn-product-cart">
                <button class="button-cart">
                    
                    <a class="button-content" href="'.$CONTROLLER_URL.'/addToCart.php?id_product='.$arrProduct_type[$rand]['id_product'].'&shop-cart">THÊM VÀO GIỎ</a>

                </button>
            </div>
            ';


        if ($arrProduct_type[$rand]['sale'] > 0) {
            echo '<div class="sale-product">
                <img src="' . $CONTENT_URL . '/image/different/sale1.png" alt="">
                </div>';
        }

        if ($arrProduct_type[$rand]['hot'] > 0) {
            echo '<div class="hot-product">
                <img src="' . $CONTENT_URL . '/image/different/hot.png" alt="">
                </div>
                ';
        }

        echo '
            </div>
            </div>';
    }

    // tạo 4 sản phẩm cùng loại cố định

    // foreach ($arrProduct_type as $key_type => $product_type) {
    //     $price_sale = $product_type['price'] - ($product_type['price'] * $product_type['sale']) / 100;
    //     if ($key_type < 4) {
    //         echo '
    //         <div class="col-sm-3">
    //     <div class="product">
    //         <div class="img-product">
    //             <img src="' . $CONTENT_URL . '/image/product/' . $product_type['image'] . '" alt="">
    //             <div class="icon-hear">
    //                 <div class="con-like">
    //                     <input title="like" type="checkbox" class="like">
    //                     <div class="checkmark">
    //                         <svg viewBox="0 0 24 24" class="outline" xmlns="http://www.w3.org/2000/svg">
    //                             <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
    //                             </path>
    //                         </svg>
    //                         <svg viewBox="0 0 24 24" class="filled" xmlns="http://www.w3.org/2000/svg">
    //                             <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
    //                             </path>
    //                         </svg>
    //                         <svg class="celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
    //                             <polygon points="10,10 20,20" class="poly"></polygon>
    //                             <polygon points="10,50 20,50" class="poly"></polygon>
    //                             <polygon points="20,80 30,70" class="poly"></polygon>
    //                             <polygon points="90,10 80,20" class="poly"></polygon>
    //                             <polygon points="90,50 80,50" class="poly"></polygon>
    //                             <polygon points="80,80 70,70" class="poly"></polygon>
    //                         </svg>
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>
    //         <div class="title-product">
    //             <a href="">' . $product_type['name'] . '</a>
    //         </div>
    //         <div class="price-product">
    //             <span class="default-price">' . number_format($product_type['price']) . '₫</span>
    //             <span class="promotional-price">' . number_format($price_sale)  . '₫</span>
    //         </div>
    //         <a href="../product/product-details.php?id_product=' . number_format($product_type['id_product'])  . '"><i id="search" class="fa-solid fa-magnifying-glass"></i></a>
    //         <div class="btn-product-cart">
    //             <button class="button-cart">
    //                 <a class="button-content">THÊM VÀO GIỎ</a>
    //             </button>
    //         </div>
    //         ';


    //         if ($product_type['sale'] > 0) {
    //             echo '<div class="sale-product">
    //             <img src="' . $CONTENT_URL . '/image/different/sale1.png" alt="">
    //             </div>';
    //         }

    //         if ($product_type['hot'] > 0) {
    //             echo '<div class="hot-product">
    //             <img src="' . $CONTENT_URL . '/image/different/hot.png" alt="">
    //             </div>
    //             ';
    //         }

    //         echo '
    //         </div>
    //         </div>';
    //     }
    // }
    ?>

</div>