document.getElementById('homePage__button').onclick = function() {
    document.getElementById('popup').classList.add('active');
    document.getElementById('bacg-body').classList.add('active');
}

document.getElementById('contacts__button').onclick = function() {
    document.getElementById('popup').classList.add('active');
    document.getElementById('bacg-body').classList.add('active');
}

document.getElementById('popup__close').onclick = function(e) {
    e.preventDefault()
    document.getElementById('popup').classList.remove('active');
    document.getElementById('bacg-body').classList.remove('active');
}


// const div = document.getElementById('popup');
 
// document.addEventListener( 'click', (e) => {
// 	const withinBoundaries = e.composedPath().includes(div);
 
// 	if ( ! withinBoundaries ) {
// 		div.style.display = 'none'; // скрываем элемент т к клик был за его пределами
// 	}
// })

