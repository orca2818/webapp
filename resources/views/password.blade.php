<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Password') }}
        </h2>
    </x-slot>

    <div class="">
        @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
        @endif
    </div>

    <form class="my-5 mx-auto max-w-xl" action="/password/{{Auth::user()->id}}" method="POST">
        @method("POST")
        @csrf
        
        <div class="md:flex md:items-center mb-6">

        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="old-password">
                現在のパスワード
            </label>
        </div>

        <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="old-password" name="oldPassword" type="text">
        </div>

        </div>

        <div class="md:flex md:items-center mb-6">
        
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="new-password">
              新しいパスワード
            </label>
        </div>

        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="new-password" name="newPassword" type="text">
        </div>
        </div>

        <div class="md:flex md:items-center">

        <div class="md:w-1/3"></div>

        <div class="md:w-2/3">
          <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
              OK
          </button>
        </div>

        </div>
    </form>
</x-app-layout>
