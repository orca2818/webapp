<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>

    <form class="my-5 mx-auto max-w-xl" action="/setting/{{Auth::user()->id}}" method="POST">
        @method("POST")
        @csrf
        
        <div class="md:flex md:items-center mb-6">

        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">ユーザ名</label>
        </div>

        <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="name" value="{{Auth::user()->name}}" type="text">
        </div>

        </div>

        <div class="md:flex md:items-center mb-6">
        
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
              メールアドレス
            </label>
        </div>

        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-email" name="email" value="{{Auth::user()->email}}" type="email">
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
