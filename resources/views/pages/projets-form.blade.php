@extends('../layout/' . $layout)

@section('subhead')
    <title> Formulaire d'enregistrement projet </title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add Product</h2>
    </div>
    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
        
        <div class="intro-y col-span-11 2xl:col-span-9">
            <!-- BEGIN: Product Detail -->
            <div class="intro-y box p-5 mt-5">
                <form action="" method="POST">
                    @csrf
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Detail
                        </div>
                        <div class="mt-5">
                            <!-- Product Name -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Name</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                            Include min. 40 characters to make it more attractive and easy for buyers to find, consisting of product type, brand, and information such as color, material, or type.
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-name" name="product_name" type="text" class="form-control" placeholder="Product name" required>
                                    <div class="form-help text-right">Maximum character 0/70</div>
                                </div>
                            </div>

                            <!-- Structure porteur -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Structure porteur</div>
                                            <button class="btn btn-primary w-44" data-tw-toggle="modal" data-tw-target="#new-order-modal-structure-porteur">
                                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Ajouter 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select name="structure" id="structure" class="form-select">
                                        @foreach (array_slice($fakers, 0, 9) as $faker)
                                            <option value="{{ $faker['categories'][0]['name'] }}">{{ $faker['categories'][0]['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Equipe -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Equipe</div>
                                            <button class="btn btn-primary w-44" data-tw-toggle="modal" data-tw-target="#new-order-modal-equipe">
                                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Ajouter 
                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select name="equipe" id="equipe" class="form-select">
                                        @foreach (array_slice($fakers, 0, 9) as $faker)
                                            <option value="{{ $faker['categories'][0]['name'] }}">{{ $faker['categories'][0]['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Condition -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Condition</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="form-check mr-4">
                                            <input id="condition-new" name="condition" class="form-check-input" type="radio" value="new" required>
                                            <label class="form-check-label" for="condition-new">New</label>
                                        </div>
                                        <div class="form-check mr-4 mt-2 sm:mt-0">
                                            <input id="condition-second" name="condition" class="form-check-input" type="radio" value="second">
                                            <label class="form-check-label" for="condition-second">Second</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Description</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <textarea name="product_description" class="form-control" rows="5" required></textarea>
                                    <div class="form-help text-right">Maximum character 0/2000</div>
                                </div>
                            </div>

                            <!-- Product Video -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Video</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input type="file" name="product_video" class="form-control">
                                </div>
                            </div>

                            <!-- Date -->
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="font-medium">Product Date</div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input type="date" name="product_date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                            <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Cancel</button>
                            <button type="submit" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Save & Add New Product</button>
                            <button type="submit" class="btn py-3 btn-primary w-full md:w-52">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END: Product Detail -->
        </div>
    </div>

    <!-- BEGIN: Structure_porteur-->

    <!-- BEGIN: New Order Modal -->
    <div id="new-order-modal-structure-porteur" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Structure porteur</h2>
                </div>
                <form id="myForm" action="" method="">
    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
        <div class="col-span-12">
            <label for="pos-form-1" class="form-label">Nom</label>
            <input id="pos-form-1" name="name" type="text" class="form-control flex-1" placeholder="Nom" required>
        </div>
        <div class="col-span-12">
            <label for="pos-form-2" class="form-label">Adresse</label>
            <input id="pos-form-2" name="address" type="text" class="form-control flex-1" placeholder="Adresse" required>
        </div>
        <div class="col-span-12">
            <label for="pos-form-3" class="form-label">Date</label>
            <input id="pos-form-3" name="date" type="date" class="form-control flex-1" required>
        </div>
    </div>
    <div class="modal-footer text-right">
        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">Annuler</button>
        <button type="submit" class="btn btn-primary w-32">Enregistrer</button>
    </div>
</form>

            </div>
        </div>
    </div>
    <!-- END: New Order Modal -->
     <!-- END: Structure_porteur-->
    <!-- BEGIN: Equipe-->
    <!-- BEGIN: New Order Modal -->
    <div id="new-order-modal-equipe" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Equipe</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Name</label>
                        <input id="pos-form-1" type="text" class="form-control flex-1" placeholder="Customer name">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-2" class="form-label">Table</label>
                        <input id="pos-form-2" type="text" class="form-control flex-1" placeholder="Customer table">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-3" class="form-label">Number of People</label>
                        <input id="pos-form-3" type="text" class="form-control flex-1" placeholder="People">
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-32">Create Ticket</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: New Order Modal -->
     <!-- END: Equipe-->
      
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
