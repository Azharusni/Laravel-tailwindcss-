@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/tom.jpg" alt="tom" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Tom and Jerry(2021)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2"> | </span>
                    <span > Sept 22, 2021 </span>
                    <span class="mx-2"> | </span>
                    <span > Action, Comedy, Adventure </span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit recusandae, vero blanditiis, veniam doloribus at sequi dolores inventore minus deserunt, praesentium a quasi rem harum atque. Deserunt placeat a sit possimus. Blanditiis ex exercitationem commodi illum debitis sequi. Laboriosam perspiciatis repellendus necessitatibus ipsum delectus sequi doloribus amet, asperiores distinctio aliquid dolor veniam voluptatum harum soluta adipisci?
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                       <div>
                           <div>Boong Joon-Ho</div>
                           <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                       </div>
                            <div class="ml-8">
                                <div>Han Jii-woon</div>
                                <div class="text-sm text-gray-400">Screenplay</div>
                            </div>

                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>

            </div>
        </div>
    </div><!--End movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/tom.jpg" alt="tom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Tom and Jerry</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg id="color" enable-background="new 0 0 24 24" height="15" viewBox="0 0 24 24" width="15" xmlns="http://www.w3.org/2000/svg"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2"> | </span>
                            <span > Sept 22, 2021 </span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Adventure
                        </div>

                    </div>
                </div>
        </div>
    </div>
@endsection
