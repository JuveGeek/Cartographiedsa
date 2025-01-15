@extends('../layout/' . $layout)

@section('subhead')
    <title>détails - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Détails sur le projet</h2>

    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Datepicker -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Les fonctionnalités</h2>
                </div>
                <div id="input-group-datepicker" class="p-5">
                    
                    <div class="preview">
                    <label class="form-check-label ml-0" for="show-example-2">Show </label>
                    </div>
                </div>
            </div>
            <!-- END: Basic Datepicker -->
            <!-- BEGIN: Input Group -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Les technologies</h2>
                </div>
                <div id="input-group-datepicker" class="p-5">
                    
                    <div class="preview">
                    <label class="form-check-label ml-0" for="show-example-2">Show </label>
                    </div>
                </div>
            </div>
            <!-- END: Input Group -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Daterange Picker -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Les membres du projets</h2>
                </div>
                <div id="input-group-datepicker" class="p-5">
                    
                    <div class="preview">
                    <label class="form-check-label ml-0" for="show-example-2">Show </label>
                    </div>
                </div>
            </div>
            <!-- END: Daterange Picker -->
            <!-- BEGIN: Modal Datepicker -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">La struture porteuse</h2>
                </div>
                <div id="input-group-datepicker" class="p-5">
                    
                    <div class="preview">
                    <label class="form-check-label ml-0" for="show-example-2">Show </label>
                    </div>
                </div>
            </div>
            <!-- END: Modal Datepicker -->
        </div>
    </div>
    
  
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New instance</button>
            
            <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th>
                        <th class="whitespace-nowrap">N°</th>
                        <th class="text-center whitespace-nowrap">Structures</th>
                        <th class="text-center whitespace-nowrap">Déployées</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">Année d'exploitation</th>
                        <th class="text-center whitespace-nowrap">Année de déploiement</th>
                        <th class="text-center whitespace-nowrap">Description</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- @foreach (array_slice($fakers, 0, 9) as $faker)-->
                        <tr class="intro-x">
                            <td class="w-10">
                                
                            </td>
                            <td class="!py-3.5">
                                
                            </td>
                            <td class="text-center">
                                
                            </td>
                            <td class="text-center capitalize"></td>
                            <td class="w-40">
                            
                            </td>
                            <td class="w-40">
                                
                            </td>
                            <td class="w-40">
                               
                            </td>
                            <td class="text-center"></td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                   <!--  @endforeach-->
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevron-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
@endsection
