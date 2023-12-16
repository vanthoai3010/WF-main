<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Wine Shop</title>
    @vite('resources/css/app.css')
</head>
<style>
    .carousel-open:checked + .carousel-item {
        position: static;
        opacity: 100;
    }
    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }
    #carousel-1:checked ~ .control-1,
    #carousel-2:checked ~ .control-2,
    #carousel-3:checked ~ .control-3 {
        display: block;
    }
    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }
    #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
    }
</style>
<body class="bg-gray-100 font-mono">
<!-- Navigation -->
<nav>
    @include('navigation')
</nav>

<!-- Hero Section -->
<section class="py-20 bg-cover bg-center h-screen flex items-center justify-center z-50"
         style="background-image: url('https://i.pinimg.com/originals/48/a1/c3/48a1c3c3a2c198a7773500c5583ffc9f.jpg');">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-extrabold text-white mb-4">Indulge in Luxury Wines</h1>
        <p class="text-lg text-white">Discover a collection of exquisite wines from renowned vineyards.</p>
        <a href="#"
           class="mt-8 bg-white text-black py-3 px-8 rounded-full inline-block hover:bg-gray-300 transition duration-300">Explore
            Our Wines</a>
    </div>
</section>

{{--<section class="mt-5">--}}
{{--    <div class="carousel relative shadow-2xl bg-white flex justify-center">--}}
{{--        <div class="carousel-inner relative overflow-hidden w-1/2 rounded">--}}
{{--            <!--Slide 1-->--}}
{{--            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">--}}
{{--            <div class="carousel-item absolute opacity-0" style="height:50vh;">--}}
{{--                <img src="https://chaumette.com/wp-content/uploads/2020/03/wine-gone-bad.jpg" class="w-full" alt="">--}}
{{--            </div>--}}
{{--            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
{{--            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

{{--            <!--Slide 2-->--}}
{{--            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">--}}
{{--            <div class="carousel-item absolute opacity-0" style="height:50vh;">--}}
{{--                <img src="https://static.millesima.com/s3/attachements/editorial/h412px/how-many-ounces-in-a-glass-of-wine.jpg" class="w-full" alt="">--}}
{{--            </div>--}}
{{--            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
{{--            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

{{--            <!--Slide 3-->--}}
{{--            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">--}}
{{--            <div class="carousel-item absolute opacity-0" style="height:50vh;">--}}
{{--                <img src="https://render.fineartamerica.com/images/rendered/search/poster/10/10/break/images-medium-5/standing-water-matthew-trudeau.jpg" class="w-full" alt="">--}}
{{--            </div>--}}
{{--            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
{{--            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

{{--            <!-- Add additional indicators for each slide-->--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li class="inline-block mr-3">--}}
{{--                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
{{--                </li>--}}
{{--                <li class="inline-block mr-3">--}}
{{--                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
{{--                </li>--}}
{{--                <li class="inline-block mr-3">--}}
{{--                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>--}}
{{--                </li>--}}
{{--            </ol>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- Product Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-10 text-center">Featured Wines</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Sample Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://i.pinimg.com/originals/48/a1/c3/48a1c3c3a2c198a7773500c5583ffc9f.jpg" alt="Wine"
                     class="w-full h-72 object-cover object-center">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Premium Red Wine</h3>
                    <p class="text-gray-600">Elegant and rich flavor profile that delights the senses.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-gray-800 font-bold">$99.99</span>
                        <button
                            class="bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="bg-black text-white py-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 LuxuryWines. All Rights Reserved.</p>
    </div>
</footer>
<script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>
