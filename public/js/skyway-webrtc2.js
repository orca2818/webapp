let localStream = null;
let peer = null;
let existingCall = null

let constraints = {
    video: {},
    audio: true
}

constraints.video.width = {
    min: 320,
    max: 320
}

constraints.video.height = {
    min: 240,
    max: 240
}

document.getElementById('create').onclick = () => {
    const video = document.createElement('video');
    video.setAttribute('id', 'video');
    document.getElementById('videoContainer').appendChild(video);

    navigator.mediaDevices.getUserMedia(constraints)
    .then( stream => {
        // 成功時にvideo要素にカメラ映像をセットし、再生
        const videoElm = document.getElementById('video');
        videoElm.srcObject = stream;
        videoElm.play();
        // 着信時に相手にカメラ映像を返せるように、グローバル変数に保存しておく
        localStream = stream;
    }).catch( error => {
        // 失敗時にはエラーログを出力
        console.error('mediaDevice.getUserMedia() error:', error);
        return;
    });
};

//peerの作成
peer = new Peer({key: 'b45808cf-75ba-4260-9ed3-7f69b136de78', debug: 3});

peer.on('open', () => {
    //document.getElementById('roomID').value = peer.id;
    //$('#roomID').val(peer.id);
    console.log(peer.id);
});

peer.on('call', (call) => {
    call.answer(localStream);
    setupCallEventHandlers(call);
});

peer.on('error', (error) => {
    console.log(`${error.type}: ${error.message}`);
});


//ボタンイベント
document.getElementById('connect').onclick = (e) => {
    e.preventDefault();
    let roomID = document.getElementById('roomID').value
    if (!roomID) {
        console.log('not found')
        return;
    }
    const call = peer.joinRoom(roomID,{mode: 'sfu', stream: localStream});
    setupCallEventHandlers(call);
};

document.getElementById('disconnect').onclick = () => {
    existingCall.close();
};

function setupCallEventHandlers(call) {
    if (existingCall) {
        existingCall.close()
    }
    existingCall = call

    call.on('stream', (stream) => {
        addVideo(call, stream);
        //setupEndCallUI();
    });

    call.on('peerLeave', (peerId) => {
        removeVideo(peerId);
    });

    call.on('close', () => {
        removeAllVideo();
        //setupMakeCallUI();
    });

}

function addVideo(call, stream) {
    const peer = document.createElement('video');
    peer.setAttribute('id', call.remoteId);
    peer.srcObject = stream;
    document.getElementById('videoContainer').appendChild(peer);
}

function removeVideo(peerID) {
    document.getElementById('videoContainer').removeChild(peerID);
}

function removeAllVideo() {
    document.getElementByID('videoContainer') = null;
}