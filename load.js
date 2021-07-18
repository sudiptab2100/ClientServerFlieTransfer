function load() {
    fetch('data/mylog.txt')
    .then(response => response.text())
    .then((data) => {
        console.log(data)
        document.getElementById('result').innerHTML = data;
        
    })
}
function loadInterval() {
    
    setInterval(load, 1000);
}

loadInterval();