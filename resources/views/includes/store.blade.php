@php
    $storeLinks = [

                        [
                            'name' => 'digital comics',
                            'image' => 'assets/images/buy-comics-digital-comics.png',
                            'link' => '#'
                        ],

                        [
                            'name' => 'dc merchandise',
                            'image' => 'assets/images/buy-comics-merchandise.png',
                            'link' => '#'
                        ],

                        [
                            "name" => "subscription",
                            "image" => "assets/images/buy-comics-subscriptions.png",
                            "link" => "#"
                        ],

                        [
                            "name" => "comic shop locator",
                            "image" => "assets/images/buy-comics-shop-locator.png",
                            "link" => "#"
                        ],

                        [
                            "name" => "dc power visa",
                            "image" => "assets/images/buy-dc-power-visa.svg",
                            "link" => "#"
                        ],


                    ];

@endphp

<section class="dc-store">
        <div class="box-main">
            <ul class="d-flex justify-content-center py-4">

            @foreach ($storeLinks as $storeLink)
                <li class="store-link px-2 pt-3">

                    <a class="d-flex px-2" href="#">
                        <img class="px-2" src="{{ $storeLink['image'] }}" >
                        <p class="pt-2">{{ $storeLink['name'] }}</p>
                    </a>

                </li>
            @endforeach

            </ul>

        </div>

</section>
