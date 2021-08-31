$(document).keyup(function(e) {
    const btn = [37, 38, 39, 40];
    btn.forEach(key => {
        if (key == e.keyCode) {
            alert(e.key);
        }
    })
});