<div class="      ">

    <div class="container">
        <div id="slider" class="slider relative">
            @foreach ($sliders as $item)
                <div class="slider-item active"><img src="{{ '/storage/img/sliders/' . $item->slider_image }}"
                        alt="" class="img-fluid"></div>
            @endforeach
            <ul id="dots" class="list-inline dots  text-center"></ul>
        </div>
    </div>
</div>
