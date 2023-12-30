@extends('backend.layouts.main')

@section('head')
<title>Iglesias</title>
@endsection

@section('content')

<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                    <ul class="m-0 p-0 list-none">
                        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                            <a href="index.html">
                                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                            </a>
                        </li>
                        <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                            Productos
                            <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                        </li>
                        <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                            Crear</li>
                    </ul>
                </div>
                <!-- END: BreadCrumb -->
                <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">


                    <div class="card xl:col-span-2">
                        <div class="card-body flex flex-col p-6">
                            <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                <div class="flex-1">
                                    <div class="card-title text-slate-900 dark:text-white">Crear Asociado</div>
                                </div>
                            </header>
                            <div class="card-text h-full">
                                <form action="{{ route('backend.productos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4" id="typeValidation">

                                    @csrf
                                    <div class="grid md:grid-cols-2 gap-7">
                                        <div class="input-area">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" autofocus>
                                        </div>
                                        <div class="input-area">
                                            <label for="descripcion" class="form-label">Descripción</label>
                                            <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del producto"></textarea>
                                        </div>
                                        <div class="input-area">
                                            <label for="categoria" class="form-label">Categoría</label>
                                            <input id="categoria" name="categoria" type="text" class="form-control" placeholder="Categoría del producto">
                                        </div>
                                        <div class="input-area">
                                            <label for="precio" class="form-label">Precio</label>
                                            <input id="precio" name="precio" type="text" class="form-control" placeholder="Precio del producto">
                                        </div>
                                        <div class="input-area">
                                            <label for="stock" class="form-label">Stock</label>
                                            <input id="stock" name="stock" type="text" class="form-control" placeholder="Cantidad disponible en el inventario">
                                        </div>
                                        <div class="input-area">
                                            <label for="proveedor" class="form-label">Proveedor</label>
                                            <input id="proveedor" name="proveedor" type="text" class="form-control" placeholder="Nombre del proveedor del producto">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Image:</strong>
                                                <input type="file" name="path_imagen" class="form-control" placeholder="image">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn flex justify-center btn-dark">Enviar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection