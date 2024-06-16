function getCookie(cname) {
	let name = cname + '=';
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return '';
}

function specialPopup() {
	const popUp = document.querySelector('#popUp');
	const popupClose = document.querySelector('.popupClose');

	if (!popUp || !popupClose) return;

	if (getCookie('specialPopup') === 'true') return;

	setTimeout(() => {
		popUp.classList.add('active');
	}, 3000);

	popupClose.addEventListener('click', () => {
		popUp.classList.remove('active');

		//tomorrow
		const now = new Date();
		now.setDate(now.getDate() + 1);

		document.cookie = 'specialPopup=true; expires=' + now.toUTCString();
	});
}

specialPopup();
