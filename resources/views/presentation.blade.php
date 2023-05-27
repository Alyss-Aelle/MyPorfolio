@extends('layouts.portfolio')
@section('main')
 <!-- a propos de moi-->








<!--a propos de moi-->

    <!--Porfolio /travaux par section-->

    @foreach ($productions as $itemProduction )
    <section class="relative pt-12 bg-blueGray-50" id="production">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
            <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{Storage::url($itemProduction->image)}}">
          </div>
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
            <div class="md:pr-12">
              <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300 mt-8">
                <i class="fas fa-rocket text-xl"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>
                </i>
              </div>
              <h3 class="text-3xl font-semibold">{{$itemProduction->name}}</h3>
              <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                {{$itemProduction->description}}
              </p>
              <ul class="list-none mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-fingerprint"></i></span>
                    </div>
                    <div>
                      <h4 class="text-blueGray-500">
                        <a herf="">{{$itemProduction->link}}</a>
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fab fa-html5"></i></span>
                    </div>
                    
                  </div>
                </li>
               
              </ul>
            </div>
          </div>
        </div>
        
        </section>

        @endforeach
        <!--Porfolio /travaux par section-->
        
            
        




<!--footer/contact--
<footer>
    <div class="container-fluid">
      <div class="row footer">
        <div class="bg-blue-400 col-md-12 text-center">
          <h1>Maria<br>
            <span>Ferrero</span></h1>
          <ul class="social-links">
            <li><a href="https://www.free-css.com/free-css-templates"><img src="assets/img/behance.png" alt="website template image"></a></li>
            <li><a href="https://www.free-css.com/free-css-templates"><img src="assets/img/dribbble.png" alt="website template image"></a></li>
            <li><a href="https://www.free-css.com/free-css-templates"><img src="assets/img/twitter.png" alt="website template image"></a></li>
            <li><a href="https://www.free-css.com/free-css-templates"><img src="assets/img/github.png" alt="website template image"></a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </footer>
  <!--footer/contact-->
@endsection