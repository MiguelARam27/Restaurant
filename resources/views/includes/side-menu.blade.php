<div class="side-menu">
    <a href="/" class="logo">
        <img src="{{$logo ?? ''}}">
    </a>
    <div class=" menu">
        <div class="menu-title">
            Bob's
        </div>
        <ul class="links">
            <li>
                <a href="/menu">Menu</a>
            </li>
            <li>
                <a href="/reservations">Reservations</a>
            </li>
            <li>
                <a href="/offers">Offers</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </div>
    <div class="social-icons">
        <a href="{{$facebook ?? ''}}" class="facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="{{$twitter ?? ''}}" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="{{$instagram ?? ''}}" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="{{$youtube ?? ''}}" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
    </div>
    <div class="location">
        <div class="address">
            {{$address1 ?? ''}}<br>
            {{$address2 ?? ''}}
            {{$city ?? ''}} {{$state ?? ''}} {{$zip ?? ''}}
        </div>
        <div class="phone-number">
            <a href="tel:{{$phone_number ?? ''}}">{{$phone_number ?? ''}}</a>
        </div>
    </div>
</div>