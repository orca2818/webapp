<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Video') }}
        </h2>
    </x-slot>

    <label for="roomID">ルーム名</label>
    <input type="text" id="roomID" name="roomID">
    <button type="submit" id="create" name="create" value="create">作成</button>
    <button type="submit" id="connect" name="connect" value="connect">接続</button>
    <button type="submit" id="disconnect" name="disconnect" value="disconnect">切断</button>

    <div id="videoContainer">

    </div>


    <script src="https://cdn.webrtc.ecl.ntt.com/skyway-4.4.1.js"></script>
    <script src="{{ asset('js/skyway-webrtc2.js')}}"></script>

</x-app-layout>
