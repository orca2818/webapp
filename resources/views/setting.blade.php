<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>

    <div class="flex p-5 m-5 mx-auto max-w-sm bg-white shadow-md">
    <form action="#">
    <div>
        <label for="name" class="m-3">ユーザ名</label>
        <input type="text" name="name" id="name" value="{{Auth::user()->name}}">
    </div>
    <div>
        <label for="email" class="m-3">メールアドレス</label>
        <input type="text" name="email" id="email" value="{{Auth::user()->email}}">
    </div>
    <button type="submit" class="flex hover:bg-yellow-300 p-2 m-5 w-1/5 mx-auto max-w-sm bg-white shadow-md rounded-xl">OK</button>
    </form>
    </div>

</x-app-layout>
