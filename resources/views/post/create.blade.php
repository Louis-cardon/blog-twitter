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
                                    <div class="flex items-center justify-between">
                                        <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                                            categorie
                                        </a>
                                    </div>
                                    <div class="mt-2">
                                        @foreach($errors->all() as $error)
                                            <span class="block text-red-500">{{$error}}</span>
                                        @endforeach
                                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

                                            @csrf

                                            <label for="title" value="Titre du post"></label>
                                            <input id="title" name="title"/>
                                            <label for="content" value="Contenu du post"></label>
                                            <textarea id="content" name="content"></textarea>
                                            <label for="image" value="Image du post"></label>
                                            <input id="image" type="file" name="image"></input>

                                            <label for="category" value="Categorie du post"></label>
                                            <select name="category" id="category">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            <button style="display: block !important;" class="mt-5">Créer mon post</button>
                                        </form>
                                    </div>
                                    <div class="flex items-center justify-between mt-4"><a href="#"
                                                                                           class="text-blue-500 hover:underline">Read more</a>
                                        <div><a href="#" class="flex items-center"><img
                                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                                <h1 class="font-bold text-gray-700 hover:underline">username</h1>
                                            </a></div>
                                    </div>
                                </div>

                            </div>
                </div>
            </div>
            </div>
    </div>

</x-app-layout>
