@php
$count=0;
@endphp

<section class="slider_part">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        @foreach($sliders as $slider)
        <div class="carousel-inner">
            <div class="carousel-item @if($count==0){ active }@endif">
                <img src="{{asset('public/upload/slider_images/'.$slider->image)}}" class="d-block w-100" alt="">
            </div>
            @php
                $count++
            @endphp

            @endforeach


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</section>