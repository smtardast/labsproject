<!-- Sidebar area -->
<div class="col-md-4 col-sm-5 sidebar">
        <!-- Single widget -->
        <div class="widget-item">
        <form action="{{route('search')}}" method="post" class="search-form">
            @csrf
                <input type="text" placeholder="Search" name="inputsearcher">
                <button class="search-btn"><i class="flaticon-026-search"></i></button>
            </form>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
            <h2 class="widget-title">Categories</h2>
            <ul>
                @foreach ($categories as $item)
            <li><a href="{{route('filterCategories', ['blogpage'=>$item->id])}}">{{$item->category}}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
            <h2 class="widget-title">Instagram</h2>
            <ul class="instagram">
                @foreach ($instagrams as $item)
                    <li>
                    <img src="{{$item->image}}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- Single widget -->
        <div class="widget-item">
            <h2 class="widget-title">Tags</h2>
            <ul class="tag">
                @foreach ($tags as $item)
                    
            <li><a href="{{route('filterTags', ['blogpage'=>$item->id])}}">{{$item->tag}}</a></li>
                @endforeach
                
            </ul>
        </div>
        <!-- Single widget -->
					<div class="widget-item">

                       
                            <h2 class="widget-title">{{$quotes->quotetitle}}</h2>
                            <div class="quote">
                                <span class="quotation">‘​‌‘​‌</span>
                            <p>{{$quotes->quote}}</p>
                            </div>
                        </div>
        
</div>