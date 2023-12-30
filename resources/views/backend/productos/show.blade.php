@extends('backend.layouts.main')

@section('head')
<title>Mostrar - Producto</title>
@endsection

@section('content')

<div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
    <div class="page-content">
        <div class="transition-all duration-150 container-fluid" id="page_layout">
            <div id="content_layout">

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
                            Mostrar
                        </li>
                    </ul>
                </div>
                <!-- END: BreadCrumb -->

                <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card xl:col-span-2">
                        <div class="card-body flex flex-col p-6">
                            <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                <div class="flex-1">
                                    <div class="card-title text-slate-900 dark:text-white">Mostrar Producto</div>
                                </div>
                            </header>
                            <div class="card-text h-full">
                                <div class="grid md:grid-cols-2 gap-7">
                                    <div class="mb-4">
                                        <strong>Nombre:</strong> {{ $producto->nombre }}
                                    </div>
                                    <div class="mb-4">
                                        <strong>Descripción:</strong> {{ $producto->descripcion }}
                                    </div>
                                    <div class="mb-4">
                                        <strong>Categoría:</strong> {{ $producto->categoria }}
                                    </div>
                                    <div class="mb-4">
                                        <strong>Precio:</strong> {{ $producto->precio }}
                                    </div>
                                    <div class="mb-4">
                                        <strong>Stock:</strong> {{ $producto->stock }}
                                    </div>
                                    <div class="mb-4">
                                        <strong>Proveedor:</strong> {{ $producto->proveedor }}
                                    </div>
                                    <div class="mb-4">
                                        <strong>Imagen:</strong>
                                        <img src="/images/{{ $producto->path_imagen }}" class="img-thumbnail" width="300px" style="border-radius: 8px;" />
                                    </div>
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