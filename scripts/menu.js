const pathArray = location.pathname.split('/');

const setActiveMenuItems = () => {
	if (isIndexPathAlternative()) {
		document.querySelectorAll('nav a[href="index"]').forEach(
			(link) => makeMenuItemActive(link)
		)
	}

	// If href points to last part of url, then make active
	document.querySelectorAll('nav a[href="' + pathArray[pathArray.length - 1]).forEach(
		(link) => makeMenuItemActive(link)
	)
};

const isIndexPathAlternative = () => {
	return (
			pathArray[pathArray.length - 1] === ""
			&& pathArray[pathArray.length - 2] === "cs4ms"
		)
		|| pathArray[pathArray.length - 1] === "cs4ms"
};

const makeMenuItemActive = (item) => {
	item.classList.add('w3-white');
	item.classList.remove('w3-hover-white');
};