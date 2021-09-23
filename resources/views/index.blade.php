@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16 ">
        <div class="popular-movies">
            <h2 class="text-yellow-500 uppercase tracking-wider  text-lg font-semibold">
                Popular Movies
            </h2>
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

        </div> <!-- End popular movies-->

        <div class="now-playing-movies py-24">
            <h2 class="text-yellow-500 uppercase tracking-wider text-lg font-semibold">
                Now Playing
            </h2>
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
        </div><!-- End Now Playing Movie-->

    </div>
@endsection
