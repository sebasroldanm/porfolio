@extends('layouts.base')
@section('content')
<body>
    @include('nav')


    <div class="container sections-wrapper py-5">
        <div class="row">
            <div class="primary col-lg-4 col-12">
                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Contenido</h2>
                        <div class="content">
                            {{-- <ul class="list-unstyled"> --}}
                            <div class="accordion" id="accordionExample">
                                @foreach ($categories as $key => $category)
                                    <div class="btn-group">
                                        <a href="@if(sizeof($category->documentations) != 0)/documentation/{{ $category->documentations[0]->slug_url }}@endif" type="button" class="btn btn-cta-secondary">{{ $category->type }}</a>
                                        <button type="button" class="btn btn-cta-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            @if(sizeof($category->documentations) == 0)
                                                    <li>Sin contenido :( </li>
                                            @else
                                                @foreach ( $category->documentations as $documentation)
                                                    <li><a class="dropdown-item" href="documentation/{{ $documentation->slug_url }}#{{ $documentation->slug }}">{{ $documentation->title }}</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach



                            {{-- </ul> --}}
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

            </div><!--//primary-->
            <div class="secondary col-lg-8 col-12">

                <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Documentación</h2>
                        <div class="content">
                            @foreach ($documentations as $documentation)
                                <div id="{{ $documentation->slug }}" class="item featured">
                                    <div class="d-flex">
                                        <a href="{{ URL::to('/') }}#{{ $documentation->slug }}" class="p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22.548 9l.452-2h-5.364l1.364-6h-2l-1.364 6h-5l1.364-6h-2l-1.364 6h-6.184l-.452 2h6.182l-1.364 6h-5.36l-.458 2h5.364l-1.364 6h2l1.364-6h5l-1.364 6h2l1.364-6h6.185l.451-2h-6.182l1.364-6h5.366zm-8.73 6h-5l1.364-6h5l-1.364 6z"/></svg>
                                        </a>
                                        <h3 class="p-2">{{ $documentation->title }}</h3>
                                        <span class="p-2 level-label copyCode" data-bs-toggle="tooltip" data-bs-placement="top" title="Copiar URL">
                                            <a data-url="{{ URL::to('/') }}#{{ $documentation->slug }}" style="cursor: pointer;">
                                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M14.851 11.923c-.179-.641-.521-1.246-1.025-1.749-1.562-1.562-4.095-1.563-5.657 0l-4.998 4.998c-1.562 1.563-1.563 4.095 0 5.657 1.562 1.563 4.096 1.561 5.656 0l3.842-3.841.333.009c.404 0 .802-.04 1.189-.117l-4.657 4.656c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-1.952-1.951-1.952-5.12 0-7.071l4.998-4.998c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464.493.493.861 1.063 1.105 1.672l-.787.784zm-5.703.147c.178.643.521 1.25 1.026 1.756 1.562 1.563 4.096 1.561 5.656 0l4.999-4.998c1.563-1.562 1.563-4.095 0-5.657-1.562-1.562-4.095-1.563-5.657 0l-3.841 3.841-.333-.009c-.404 0-.802.04-1.189.117l4.656-4.656c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464 1.951 1.951 1.951 5.119 0 7.071l-4.999 4.998c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-.494-.495-.863-1.067-1.107-1.678l.788-.785z"/></svg>
                                            </a>
                                        </span>
                                        <small class="p-3" sty>{{ $documentation->typeDoc->type }}</small>
                                    </div>
                                    <p>{{ $documentation->description }}</p>
                                    <hr>
                                    @foreach ($documentation->contentsDoc as $contentDoc)
                                        <p>{{ $contentDoc->description }}</p>
                                        <div class="featured-image has-ribbon">
                                            <pre>
                                                <code class="language-php">
                                                    {{ $contentDoc->code }}
                                                </code>
                                            </pre>
                                            <div class="ribbon">
                                                <div class="text">{{ $contentDoc->language }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
               </section>

            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

@endsection
