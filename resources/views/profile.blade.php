<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="">
        @if (session('profileChange'))
        <div class="alert alert-warning">
            {{ session('profileChange') }}
        </div>
        @endif
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 max-w-4xl mx-auto">
    <div>
        <div class="flex p-5 m-5 mx-auto max-w-sm bg-white shadow-md">
            <span class="text-xl">ユーザ名　{{Auth::user()->name}}</span>
        </div>
        <div class="flex p-5 m-5 mx-auto max-w-sm bg-white shadow-md">
            <span class="text-xl">メールアドレス　{{Auth::user()->email}}</span>
        </div>
    </div>
    <div>
        <form action="/setting">
            <button type="submit" class="flex hover:bg-yellow-300 text-xl p-5 m-5 w-1/2 mx-auto max-w-sm bg-white shadow-md rounded-xl">基本設定</button>
        </form>
        <div>
            <form action="/password">
                <button type="submit" class="flex hover:bg-yellow-300 text-xl p-5 m-5 w-1/2 mx-auto max-w-sm bg-white shadow-md rounded-xl">パスワード変更</button>
            </form>
            </div>
        <div>
            <form action="#">
                <button type="submit" class="flex hover:bg-yellow-300 text-xl p-5 m-5 w-1/2 mx-auto max-w-sm bg-white shadow-md rounded-xl">参加チーム</button>
            </form>
        </div>
    </div>

    
    </div>





</x-app-layout>
