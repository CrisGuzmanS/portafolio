@extends('layouts.app')

@section('content')
    <!--
        =========
        PROYECTOS
        =========
    -->
    <div class="container">
        <div class="card-columns">

            <!--
                ===================================
                PROYECTO ZAPATA CAMIONES AEROPUERTO
                ===================================
            -->

            @foreach ($projects as $project)
                <div class="card mt-4 shadow mb-5 bg-white rounded" data-aos="fade-up" data-aos-delay="50" data-aos-anchor=".greeting">
                    <div class="inner">
                        <img src="{{ asset($project->path_cover_page) }}"
                            alt="{{$project->name}}" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fa fa-arrow-circle-right text-success" aria-hidden="true"></i>
                            {{$project->name}}
                        </h5>
                        <hr>
                        <p>
                            <small class="text-muted">Descripción</small>
                        </p>
                        <p class="card-text">
                            {{ Str::limit($project->description, $limit = 170, $end = '...') }}
                        </p>
                        <p class="card-text"><small class="text-muted text-uppercase">📅 {{$project->date}}</small></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            <a href="{{route('projects.show', ['project' => $project])}}"
                                class="btn btn-primary btn-block btn-black border-0 rounded-0 shadow-sm btn-black">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                Ver más
                            </a>
                        </small>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection