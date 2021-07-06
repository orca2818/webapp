let localStream;
navigator.mediaDevices.getUserMedia({video: true, audio: true})
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

const peer = new Peer({key: 'b45808cf-75ba-4260-9ed3-7f69b136de78', debug: 3});
peer.on('open', () => {
    document.getElementById('id').textContent = peer.id;
});

document.getElementById('call').onclick = () => {
    const theirID = document.getElementById('their-id').value;
    const mediaConnection = peer.call(theirID, localStream);
    setEventListener(mediaConnection);
};

const setEventListener = mediaConnection => {
    mediaConnection.on('stream', stream => {
        // video要素にカメラ映像をセットして再生
        const videoElm = document.getElementById('their-video')
        videoElm.srcObject = stream;
        videoElm.play();
    });
}

peer.on('call', mediaConnection => {
    mediaConnection.answer(localStream);
    setEventListener(mediaConnection);
});