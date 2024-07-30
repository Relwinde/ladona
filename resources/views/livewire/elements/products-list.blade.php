<div>
    <div class="th-sort-bar">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto">
                <p class="woocommerce-result-count">Recherche</p>
                <input wire:model.live.debounce="search" placeholder="Saisissez un mot clé" type="text" name="" id="">
            </div>

            <div class="col-md-auto">
                <form class="woocommerce-ordering" method="get">
                    <select wire:model.live="category" class="orderby" aria-label="Shop order">
                        <option value="" selected="selected">Selectionner une catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option> 
                        @endforeach
                    </select>

                </form>
            </div>
        </div>
    </div>
    <div class="row gy-40">

        @foreach ($products as $product)
            <div class="col-xl-4 col-md-6">
                <div class="th-product product-grid">
                    <div class="product-img">
                        <img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                        <div class="product-action style1">
                            <a href="cart.html"><span class="action-text">Acheter</span><span class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                            {{-- <a href="wishlist.html"><span class="action-text">wishlist</span><span class="icon"><i class="fal fa-heart"></i></span></a>

                            <a class="popup-content" href="#QuickView"><span class="action-text">Compare</span><span class="icon"><i class="fa-regular fa-eye"></i></span></a> --}}
                        </div>
                    </div>
                    <div class="product-grid_wrapper">
                        <div class="product-content">
                            <h3 class="box-title"><a class="text-inherit" href="shop-details.html">{{ $product->name }}</a>
                            </h3>
                            <div class="product-category"><a href="shop.html">{{ $product->category }}</a></div>
                        </div>
                        {{-- <div class="product-grid_content">
                            <span class="price">$99</span>
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                                    customer rating</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>     
        @endforeach
    </div>                
    <div class="th-pagination text-center pt-50">
        <ul>
            <li><a href="blog.html"><i class="fa-solid fa-arrow-left"></i></a></li>
            <li><a href="blog.html">1</a></li>
            <li><a href="blog.html">2</a></li>
            <li><a href="blog.html"><i class="fa-solid fa-arrow-right"></i></a></li>
        </ul>
    </div>   
</div>
