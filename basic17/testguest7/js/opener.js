window.onload = function () {
    let imgList = document.getElementsByTagName('img');

    for ( let i = 0; i<imgList.length;i++) {
        imgList[i].onclick = function () {
            _opener(this.alt)
        }
    }
}

function _opener (src) {
    let faceImg = opener.document.getElementById('faceimg');
    faceImg.src = src;
    console.log(opener.document.register.face);
    opener.document.register.face.value = src;
}