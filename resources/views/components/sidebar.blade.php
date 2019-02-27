<!-- Sidebar area -->
<div class="col-md-4 col-sm-5 sidebar">
        <!-- Single widget -->
        <div class="widget-item">
            <form action="#" class="search-form">
                <input type="text" placeholder="Search">
                <button class="search-btn"><i class="flaticon-026-search"></i></button>
            </form>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
            <h2 class="widget-title">Categories</h2>
            <ul>
                @foreach ($categories as $item)
            <li><a href="#">{{$item->category}}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
            <h2 class="widget-title">Instagram</h2>
            <ul class="instagram">
                <li><img src="img/instagram/1.jpg" alt=""></li>
                <li><img src="img/instagram/2.jpg" alt=""></li>
                <li><img src="img/instagram/3.jpg" alt=""></li>
                <li><img src="img/instagram/4.jpg" alt=""></li>
                <li><img src="img/instagram/5.jpg" alt=""></li>
                <li><img src="img/instagram/6.jpg" alt=""></li>
            </ul>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
            <h2 class="widget-title">Tags</h2>
            <ul class="tag">
                <li><a href="">branding</a></li>
                <li><a href="">identity</a></li>
                <li><a href="">video</a></li>
                <li><a href="">design</a></li>
                <li><a href="">inspiration</a></li>
                <li><a href="">web design</a></li>
                <li><a href="">photography</a></li>
            </ul>
        </div>
        
</div>