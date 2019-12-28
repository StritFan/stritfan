let counter = 0;
let score = 0.1;
document.getElementById('but').innerHTML = counter; 
$('#but').click(function() {
    counter++;
    document.getElementById('but').innerHTML = counter.toFixed(1);
});
setInterval(function() {
    document.getElementById('but').innerHTML = (counter += score).toFixed(1);
}, 1000);
$('#butt').click(function() {
    if (counter > 29.9) {
        score += 0.2;
        counter -= 30;
    } else {
        alert ('У вас меньше чем 30!');
    }
});
$('#butto').click(function() {
    if (counter > 59.9) {
        score += 0.4;
        counter -= 60;
    } else {
        alert ('У вас меньше чем 60!');
    }
});
setInterval(function() {
    document.getElementById('sp').innerHTML = score.toFixed(1);
}, 1);