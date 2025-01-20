@extends('../layout/' . $layout)

@section('subhead')
    <title>Users Layout - Midone - Tailwind HTML Admin Template</title>
@endsection


@section('subcontent')
    @if (session('success'))
        <script>
            // Attendre que le DOM soit complètement chargé avant d'afficher l'alerte
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: "{{ session('success') }}", // Récupérer le message de succès
                    showConfirmButton: false, // Pas de bouton de confirmation
                    timer: 5000 // La notification disparaît après 5 secondes
                });
            });
        </script>
    @endif

    <h2 class="intro-y text-lg font-medium mt-10">Liste des utilisateurs</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('users-form') }}">
                <button class="btn btn-primary shadow-md mr-2">Ajouter</button>
            </a>
            <div class="hidden md:block mx-auto text-slate-500">Showing {{ $users->firstItem() }} to {{ $users->lastItem() }}
                of {{ $users->total() }} entries</div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>

        <!-- BEGIN: Users Layout -->
        @foreach ($users as $user)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div
                        class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">

                            <img alt="User Profile" class="rounded-full"
                                src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}?d=mp&s=200">

                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <!-- Lien vers le profil de l'utilisateur : route('user-profile', ['id' => $user->id])  -->
                            <a href="" class="font-medium">{{ $user->name }} {{ $user->firstname }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">
                                @foreach ($user->roles as $role)
                                    {{ $role->name }} @if(!$loop->last), @endif
                                @endforeach
                            </div>
                            <i data-lucide="mail" class="w-3 h-3 mr-2"></i> {{ $user->email }}
                        </div>
                        <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Facebook">
                                <i class="w-3 h-3 fill-current" data-lucide="facebook"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Twitter">
                                <i class="w-3 h-3 fill-current" data-lucide="twitter"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Linked In">
                                <i class="w-3 h-3 fill-current" data-lucide="linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                            <div class="flex text-slate-500 text-xs">
                                <div>{{ $user->short_content }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->

        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                {{ $users->links() }} <!-- Pagination -->
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
@endsection
