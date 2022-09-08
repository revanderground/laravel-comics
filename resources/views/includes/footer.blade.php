<div class="footer-nav">
    <div class="footer-content">
        <div class="footer-content-items d-flex ">
            <div class="col pt-4">

                <h4>Dc Comics</h4>
                <ul>
                    @foreach($footerLinks['dcComicsLinks'] as $footerLink)
                    <li>
                        <a  class="link-footertitle"  href="{{ $footerLink['link'] }}">
                            {{ $footerLink['text'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                <h4>Shop</h4>
                    @foreach($footerLinks['dcShopLinks'] as $footerLink)
                        <li>
                            <a class="link-footertitle" href="{{ $footerLink['link'] }}">
                                {{ $footerLink['text'] }}
                            </a>
                        </li>
                    @endforeach
            </div>

            <div class="col pt-4">
                <h4>Dc</h4>
                <ul>
                    @foreach($footerLinks['dcLinks'] as $footerLink)
                    <li>
                        <a class="link-footertitle"  href="{{ $footerLink['link'] }}">
                            {{ $footerLink['text'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col pt-4">
                <h4>Sites</h4>
                <ul>
                    @foreach($footerLinks['dcSiteLinks'] as $footerLink)
                        <li>
                            <a class="link-footertitle"  href="{{ $footerLink['link'] }}">
                                {{ $footerLink['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>


            </div>


            <div class="footer-bg mx-auto">  </div>


        </div>

    </div>

</div>
