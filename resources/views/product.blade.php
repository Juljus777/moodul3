<div class="card J-card">
    <div class="card-body J-card-body">
        <a href="/{{$product->id}}">
            <div class="J-card-image mx-auto"
                 style="background-image:url('{{asset('images/products/'.$product->id.'/'.$product->imagePath)}}')">

            </div>
        </a>
        <div class="outer-container J-card-content">
            <p class="card-title text-white h5">{{$product->name}}</p>
            <p class="card-text text-white h4">{{$product->price}}€</p>
            <a href="/{{$product->id}}" class="btn btn-main btn-lg prod-btn text-white mr-2">Vaata lähemalt</a>
            <button class="btn btn-main btn-lg prod-btn order-1 addTo"
                    onclick="addToCart({{$product->id}})">
                <img class="p-0" src="{{asset('icons/cart_icon_white.svg')}}" width="25px" height="23px">
            </button>
        </div>
    </div>
</div>
