<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://globalcyberlife.com">
	<link rel="pingback" href="http://www.globalcyberlife.com">
	<meta name="google-site-verification" content="googlea5c95dd896db6cc6.html" />
<meta name="title" content="global cyberlife globalcyberlife cyberlife shopping Online shopping in Nepal | Buy online in Nepal | Online store nepal | Online clothing store in Nepal" />
<meta name="description" content="The biggest online shopping store in Nepal / shop cross-boarder products from all global countries ,men,women,kids clothes,watches,shoes,electronics,apparel,jewelry,beauty products online in Nepal" />
<meta name="keywords" content="Online shopping in Nepal, Nepal online shopping, Laptop prices in Nepal, Mobile phone prices in Nepal, Buy clothes online in Nepal, Buy shoes online in Nepal, Men&#039;s shopping in Nepal, Women&#039;s shopping in Nepal, Kids &amp; baby online shopping in Nepal, Health &amp; beauty products in Nepal" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="" content="IE=edge,chrome=1" />
    <title>E-commerce Project</title>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/styleHome.css">
    <script data-ad-client="ca-pub-8393057782741615" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  cyberlife </a>

    <div class="form-container">
    
        <form action="{{route('products.search')}}" method="GET">
                            <input name="query" placeholder="search products" type="search" id="search">
                          
                            <button type="submit" for="search" class="fas fa-search"> </button>
                        </form>
                       
    </div>

</div>

<div class="header-2">

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="/">home</a></li>
            @foreach($categories as $category)
            <li>
                        <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i
                                    class="pe-7s-angle-right"></i></a>

                                    @php
                                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                    @endphp

                               @if($children->isNotEmpty())
                                <div class="category-menu-dropdown">

                                    @foreach ($children as $child)
                                        <div class="category-dropdown-style category-common3">
                                            <h4 class="categories-subtitle">
                                                <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                {{$child->name}}
                                                </a>

                                              </h4>
                                            @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                                <ul>
                                                    @foreach ($grandChild as $c)
                                                        <li><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    @endforeach


                                </div>

                              @endif
                        </li>
            @endforeach
<li>
<a href="{{ route('posts.index') }}">post</a>
</li>
        </ul>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="{{ route('cart.index') }}" class="fas fa-shopping-cart"></a>
        <a href="{{ route('login') }}" class="fas fa-user"></a>
    </div>

</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">



</section>

<!-- home section ends -->

<!-- arrival section starts  -->

<section class="arrival" id="arrival">

<h1 class="heading"> <span>new arrivals</span> </h1>

<div class="box-container">
@foreach ($products as $product)

    <div class="box">
        <div class="image">
        <img src="{{asset('storage/'.$product->image)}}" class="img-responsive">
        </div>
        <div class="info">
            <h3>{{ $product->name }}</h3>
            <div class="subInfo">
                <strong class="price"> {{ $product->selling_price }}  </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="{{route('cart.add', $product->id)}}" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="{{route('products.show', $product)}}" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    @endforeach
   
</div>
 <br><br>
    <h2 style="text-align: center;">
 {{ $products->onEachSide(5)->links() }}
</h2>
</section>

<!-- arrival section ends -->

<!-- featured section starts  -->

<section class="feature" id="featured">

<h1 class="heading"> <span> featured product </span> </h1>
@foreach ($feature as $product)
<div class="row">

    <div class="image-container">

        <div class="big-image">
        <img src="{{asset('storage/'.$product->image)}}" class="img-responsive">
        </div>


        @if($product->product_images != null)
     @foreach(json_decode($product->product_images) as $images)
        <div class="small-image">
            <img src="{{ Voyager::image( $images ) }}" alt="">
    
        </div>
     @endforeach
     @endif
    </div>

    <div class="content">

        <h3>{{$product->name}}</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>Rating</span>
        </div>
        <p>{{ $product->description }}</p>
        <strong class="price">{{ $product->selling_price }}<span>{{ $product->selling_price }}</span> </strong>
        <a class="fas fa-shopping-cart" href="{{route('cart.add', $product->id)}}"><button class="btn">add to cart</button></a>

    </div>

</div>
@endforeach
</section>


<!-- featured section ends -->

<section class="gallery" id="gallery">

<h1 class="heading"> <span> product gallery </span> </h1>

<ul class="controls">
    <li class="btn button-active" data-filter="all">all</li>
    <li class="btn" data-filter="phone">Hemp</li>
    <li class="btn" data-filter="laptop">Folding Item</li>
    <li class="btn" data-filter="headphone">Cultural Product</li>
    <li class="btn" data-filter="shoes">Cosmetics</li>
</ul>

<div class="image-container">
@foreach($hemps as $product)
    <div class="box phone">
        <div class="image">
           <a href="{{route('products.show', $product->id)}}">  
        <img src="{{asset('storage/'.$product->image)}}" >
        </a>
        </div>
        <div class="info">
              <h3>{{ $product->name }}</h3>
            <div class="subInfo">
                <strong class="price">{{ $product->selling_price }}</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach
   
@foreach($foldings as $product)
    <div class="box laptop">
       <div class="image">
            
 <a href="{{route('products.show', $product->id)}}">  
        <img src="{{asset('storage/'.$product->image)}}" >
        </a>
        </div>
        <div class="info">
            <h3>{{ $product->name }}</h3>
            <div class="subInfo">
                <strong class="price">{{ $product->selling_price }}</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach($cosmetics as $product)
    <div class="box shoes">
       <div class="image">
            
        <a href="{{route('products.show', $product->id)}}">  
        <img src="{{asset('storage/'.$product->image)}}" >
        </a>
        </div>
        <div class="info">
            <h3>{{ $product->name }}</h3>
            <div class="subInfo">
                <strong class="price">{{ $product->selling_price }}</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach
   
@foreach($culturals as $product)
    <div class="box headphone">
       <div class="image">
            
       <a href="{{route('products.show', $product->id)}}">  
        <img src="{{asset('storage/'.$product->image)}}" >
        </a>
        </div>
        <div class="info">
            <h3>{{ $product->name }}</h3>
            <div class="subInfo">
                <strong class="price">{{ $product->selling_price }}</strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>  
@endforeach
   
</div>

</section>
<!-- gallery section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

<h1 class="heading"> <span> best deals </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/deal1.jpg" alt="">
        <div class="content">
            <h3>latest laptop</h3>
            <p>upto 25% off on first purchase</p>
            <a href="#"><button class="btn">explore</button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/deal2.jpg" alt="">
        <div class="content">
            <h3>new headphone</h3>
            <p>upto 25% off on first purchase</p>
            <a href="#"><button class="btn">explore</button></a>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

    <div class="icons">
        <i class="fas fa-user-clock"></i>
        <h3>24 x 7 support</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

    <div class="icons">
        <i class="fas fa-money-check-alt"></i>
        <h3>easy payments</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

    <div class="icons">
        <i class="fas fa-box"></i>
        <h3>10 days replacements</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
    </div>

</div>

</section>

<!-- deal section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <h1>newsletter</h1>
    <p>get in touch for latest discounts and updates</p>
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->


<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i> cyberlife </a>
            <p>welcome to global cyberlife where your shopping is made easier and more secure</p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">arrival</a>
            <a href="#">featured</a>
            <a href="#">gallery</a>
            <a href="#">deal</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
               kaushaltar,bahktapur
            </p>
            <p> <i class="fas fa-phone"></i>
                9849594857
            </p>
            <p> <i class="fas fa-globe"></i>
              www.globalcyberlife.com
            </p>
        </div>

    </div>



</section>

<!-- footer section ends -->






<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="/js/home.js"></script>
    
</body>
</html>