<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

    <div class="overflow-x-hidden bg-gray-100">
            <div class="px-6 py-8">
                <div class="container flex justify-between mx-auto">
                    <div class="w-full lg:w-8/12">
                            <div class="mt-6">

                                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">

                                    <div class="mt-2">
                                        @foreach($errors->all() as $error)
                                            <span class="block text-red-500">{{$error}}</span>
                                        @endforeach
                                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

                                            @csrf
                                            <label for="content" value="Contenu du post"></label>
                                            <textarea id="content" name="content"></textarea>

                                            <button style="display: block !important; " class="mt-5">Créer mon post</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                </div>
            </div>
            </div>
    </div>

</x-app-layout>
