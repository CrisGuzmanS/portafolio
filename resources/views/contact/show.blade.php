@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card mt-4 shadow-sm rounded-0" data-aos="fade-right" data-aos-delay="50" data-aos-anchor=".greeting">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-uppercase text-primary">Nombre</label>
                            <input type="text" class="form-control rounded-0 border-primary" id="name" placeholder="Coloca tu nombre aquí.">
                        </div>
                        <div class="form-group">
                            <label for="correo" class="text-uppercase text-primary">Correo</label>
                            <input type="email" class="form-control rounded-0 border-primary" id="correo" aria-describedby="emailHelp"
                                placeholder="ejemplo@mail.com">
                            <small id="emailHelp" class="form-text text-muted">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                No compartiré tu correo ni enviaré spam
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="mensaje" class="text-uppercase text-primary">mensaje</label>
                            <textarea type="email" class="form-control rounded-0 border-primary" id="mensaje"
                                placeholder="Escribe el mensaje que deseas enviar" rows="10"></textarea>
                        </div>
                        <hr>
                        <button class="btn btn-primary rounded-0 p-3 pr-5 pl-5 btn-black border-0 float-right">
                            <small>ENVIAR</small>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">

            <div class="row">
                {{-- PHONE --}}
                <div class="col-12">
                    <div class="card rounded-0 shadow-sm mt-4" data-aos="fade-down" data-aos-delay="70" data-aos-anchor=".greeting">
                        <div class="card-body">
                            <span class="text-uppercase text-muted">
                                <small class="text-primary">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    Teléfono
                                </small>
                                <br>
                            </span>
                            +52 55 12 32 81 88
                        </div>
                    </div>
                </div>

                {{-- MAIL --}}
                <div class="col-12">
                    <div class="card rounded-0 shadow-sm mt-4" data-aos="fade-left" data-aos-delay="90" data-aos-anchor=".greeting">
                        <div class="card-body">
                            <span class="text-uppercase text-muted">
                                <small class="text-primary">
                                    {{-- <i class="fa fa-envelope-o" aria-hidden="true"></i> --}}
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    Correo
                                </small>
                                <br>
                            </span>
                            cristian.guzman.contacto@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection