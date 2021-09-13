var pessoal = function() {
    var div = document.getElementById('pessoal');
    if (div.classList.contains('aaa')) {
        div.classList.remove('aaa');
    }else{
        div.classList.add('aaa');
    }
}

var info = function() {
    var div = document.getElementById('info');
    if (div.classList.contains('bbb')) {
        div.classList.remove('bbb');
    }else{
        div.classList.add('bbb');
    }
}