<table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
    <thead class=" border-t border-slate-100 dark:border-slate-800">
        <tr>

            <th scope="col" class=" table-th ">
                #
            </th>
            <th scope="col" class=" table-th ">
                Nombres
            </th>
            <th scope="col" class=" table-th ">
                Precio
            </th>
            <th scope="col" class=" table-th ">
                Descripción
            </th>
            <th scope="col" class=" table-th ">
                Categoría
            </th>
            <th scope="col" class=" table-th ">
                Stock
            </th>
            <th scope="col" class=" table-th ">
                Proveedor
            </th>
            <th scope="col" class=" table-th ">
                Imagen
            </th>
            <th scope="col" class=" table-th ">
                Acción
            </th>

        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
        @foreach($productos as $producto)

        <tr>
            <td class="table-td">
                {{ $loop->index + 1 }}
            </td>
            <td class="table-td ">
                {{ $producto->nombre }}
            </td>
            <td class="table-td">
                {{ $producto->descripcion }}
            </td>
            <td class="table-td ">
                {{ $producto->categoria }}
            </td>
            <td class="table-td ">
                {{ $producto->precio }}
            </td>
            <td class="table-td ">
                {{ $producto->stock }}
            </td>
            <td class="table-td ">
                {{ $producto->proveedor }}
            </td>
            <td class="table-td ">
                <img src="/images/{{ $producto->path_imagen }}" width="100px">
            </td>
            <td class="table-td ">
                <div>
                    <div class="relative">
                        <div class="dropdown relative">
                            <button class="text-xl text-center block w-full " type="button" id="invoiceDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                            </button>
                            <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                  shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                <li>
                                    <a href="invoive-add.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer first:rounded-t flex space-x-2
                                      items-center rtl:space-x-reverse ">
                                        <span class="text-base">
                                            <iconify-icon icon="heroicons:paper-airplane"></iconify-icon>
                                        </span>
                                        <span class="text-sm">Send</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="invoive-preview.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center
                                      rtl:space-x-reverse ">
                                        <span class="text-base">
                                            <iconify-icon icon="heroicons:eye"></iconify-icon>
                                        </span>
                                        <span class="text-sm">View</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="invoive-preview.html" class=" hover:bg-slate-900 hover:text-white dark:hover:bg-slate-600 dark:hover:bg-opacity-50 w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer flex space-x-2 items-center
                                      rtl:space-x-reverse ">
                                        <span class="text-base">
                                            <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                        </span>
                                        <span class="text-sm">Edit</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" bg-danger-500 text-danger-500 bg-opacity-30 hover:bg-opacity-100 hover:text-white w-full border-b
                                      border-b-gray-500 border-opacity-10 px-4 py-2 text-sm last:mb-0 cursor-pointer last:rounded-b flex space-x-2 items-center
                                      rtl:space-x-reverse ">
                                        <span class="text-base">
                                            <iconify-icon icon="heroicons:trash"></iconify-icon>
                                        </span>
                                        <span class="text-sm">Delete</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>