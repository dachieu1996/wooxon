<?php include '../view/header.php'; ?>
<div>
    <div class="site-inner container">
        <div class="site-content">
            <div class="row">
                <div class="content-area  col-sm-12">
                    <main class="site-main">
                        <article class="post-8 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" action="http://127.0.0.1:8888/theme4/gio-hang/" method="post">
	                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng</th>
                                                    <th class="product-remove"><i class="fa fa-trash" aria-hidden="true"></i></th>
                                                </tr>
                                            </thead>
		                                    <tbody>
                                            <?php foreach ($cart as $product_id => $item) : ?>
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
						                            <td class="product-thumbnail">
                                                        <a href="<?=$app_path.'catalog/?product_id='.$product['productID']?>">
                                                            <img width="300" height="300" src="<?=$app_path.'images/'.$item['image']?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                                        </a>
                                                    </td>
						                            <td class="product-name">
                                                        <?=$item['name']?>
                                                    </td>                                                
						                            <td class="product-price">
                                                        <span class="woocommerce-Price-amount amount"><?=number_format($item['list_price'])?><span class="woocommerce-Price-currencySymbol">₫</span></span>
                                                    </td>
						                            <td class="product-quantity">
                                                        <div class="quantity">               
                                                            <input type="number" class="input-text qty text" name="items[<?=$product_id; ?>]" value="<?=$item['quantity']?>" >
                                                        </div>
	                                                </td>
                                                    <td class="product-subtotal">
                                                        <span class="woocommerce-Price-amount amount"><?=number_format($item['line_price'])?><span class="woocommerce-Price-currencySymbol">₫</span></span>						</td>
                                                        <td class="product-remove pr">
                                                            <a href="http://127.0.0.1:8888/theme4/gio-hang/?remove_item=6c8349cc7260ae62e3b1396831a8398f&amp;_wpnonce=c78e613cdb" class="remove mfp-close icon-cross2" aria-label="Xóa sản phẩm này" data-product_id="45" data-product_sku="">×</a>						
                                                        </td>
                                                    </tr>
                                            <?php endforeach?>
	
                                            <tr>
                                                <td colspan="7" class="actions">
                                                    <button type="submit" class="button f_r_md" name="update_cart" value="Cập nhật giỏ hàng" disabled="">Cập nhật giỏ hàng</button>		
                                                </td>
                                            </tr>
					                        </tbody>
	                                    </table>
	                                </form>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>           
        </div>
    </div>
</div> 

<?php include '../view/footer.php'; ?>