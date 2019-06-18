<div>
    <div class="site-inner container">
        <div class="site-content">
            <nav class="woocommerce-breadcrumb dib">
                <a href="<?=$app_path?>">Trang chủ</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="<?=$app_path.'catalog/?category_id='.$category['categoryID'] ?>"><?=$category['categoryName']?></a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <a href="#"><?=$product['productName']?></a>
            </nav>
            <div class="row">
                <div class="content-area  col-sm-12 col-md-12 col-lg-9  has-sidebar-right">
                    <main class="site-main">
                        <div class="post-45 product type-product status-publish has-post-thumbnail brands-sony product_cat-mobile bottom  product-single first instock shipping-taxable purchasable product-type-simple">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images  pr piko-product-imges">
                                        <figure class="woocommerce-product-gallery__wrapper piko-thumb ">
                                            <img src="<?=$app_path.'images/'.$product['image']?>" width="500px"/>
                                        </figure>    
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="summary entry-summary product-details">
                                        <h1 class="product_title entry-title"><?=$product['productName']?></h1>
                                        <div class="shear-brand mt15">
                                            <p class="price">Giá bán: <?=number_format($product['listPrice'])?> ₫</p>                                            
                                        </div>
                                        <div>
                                            <p class="price">Hãng sản xuất: <?=$product['madeBy']?></p>
                                        </div>
                                        
                                        <div class="woocommerce-product-details__short-description">
                                            <ul>
                                                <?=$product['description']?>
                                            </ul>
                                        </div>
                                        <div class="btn-details-action mt25">
                                            <form class="cart" action="<?=$app_path?>cart" method="get">
                                                <input type="hidden" name="action" value="add">
                                                <input type="hidden" name="product_id" value="<?=$product['productID']?>">
                                                <div class="quantity">              
                                                    <input type="number" class="input-text qty text" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric">
                                                </div>
                                                <button type="submit" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <aside id="secondary" class="widget-area  col-sm-12 col-md-12 col-lg-3 sidebar sidebar-right" role="complementary">
                    <section id="woocommerce_products-3" class="widget woocommerce widget_products">
                        <h4 class="widget-title">Sản phẩm mới về</h4>
                        <ul class="product_list_widget">
                            <li>
                                <a href="http://127.0.0.1:8888/theme4/san-pham/fujifilme-instax-mini-8-instant-film-camera-ultra-hd/">
                                    <img width="300" height="300" src="http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-300x300.jpg 300w, http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-600x600.jpg 600w, http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-150x150.jpg 150w, http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-768x768.jpg 768w, http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-1024x1024.jpg 1024w, http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1-100x100.jpg 100w, http://127.0.0.1:8888/theme4/wp-content/uploads/2018/01/camera3-1.jpg 1200w" sizes="(max-width: 300px) 100vw, 300px">		<span class="product-title">Fujifilme Instax Mini 8 Instant Film Camera Ultra hd</span>
                                </a>
	                            <span class="woocommerce-Price-amount amount">300<span class="woocommerce-Price-currencySymbol">₫</span></span>
	                        </li>
                        </ul>
                    </section>	
                </aside>
            </div>
            
        </div>
    </div>
</div> 
