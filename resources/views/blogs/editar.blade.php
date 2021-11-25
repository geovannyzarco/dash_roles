@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any)
                               <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                   <strong>¡Revise los campos</strong>
                                   @foreach ($errors->all() as $error)
                                       <span class = "badge badge-danger">{{ $error }}</span>
                                   @endforeach
                                   <button type = "button" class="close" data-dismiss="alert" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                           @endif

                            <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="titulo">Titulo</label>
                                        <input type="text" name="titulo" class="form-control" value="{{ $blog->titulo }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-flosting">
                                        <label for="conenido">Contenido</label>
                                        <textarea class="form-control" name="conenido" style="height: 100px">{{ $blog->conenido }}</textarea>

                                    </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
