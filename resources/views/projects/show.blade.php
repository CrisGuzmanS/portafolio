@extends('layouts.app')

@section('content')

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card shadow mb-5 bg-white rounded" data-aos="fade-down" data-aos-delay="50" data-aos-anchor=".greeting">

                    <!--
                        ==================
                        VIDEO DEMOSTRATIVO
                        ==================
                    -->

                    <!-- <div class="embed-responsive card-img-top embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LKEnhS8Cgys" allowfullscreen></iframe>
                    </div> -->

                    <video class="embed-responsive-item card-img-top" controls>
                        <source src="{{ asset( $project->path_video ) }}">
                        Tu navegador no soporta las etiquetas de video HTML.
                    </video>

                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->

                    <!--
                        =================
                        DESCRIPCION VIDEO
                        =================
                    -->

                    <div class="card-body">
                        <h5 class="card-title text-danger">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            {{$project->name}}
                        </h5>
                        <hr>
                        <small class="text-muted text-uppercase">DESCRIPCIÓN</small>
                        <p class="card-text">
                            {{$project->description}}
                        </p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50" data-aos-anchor=".greeting">
                @if ($project->has('features'))
                <h5 class="text-uppercase text-muted"><small>Caracteristicas principales</small></h5>
                <div class="card shadow mb-5 bg-white rounded">
                    <ul class="list-group list-group-flush">
                        @foreach ($project->features as $feature)
                        <li class="list-group-item">
                            <span class="text-success mr-2">
                                {!! $feature->icon !!}
                            </span>
                            {!! $feature->description !!}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>

</html>

@endsection