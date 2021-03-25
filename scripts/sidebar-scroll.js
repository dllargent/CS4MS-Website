let queryList = window.matchMedia("(min-width: 700px)");
window.onscroll = function () { scrollFunction(queryList) };
function scrollFunction(queryList) {
	// var width = Math.max(window.screen.width, window.innerWidth);
	if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250 && window.innerWidth > 700) {
		document.getElementById("sidenav").style.width = "200px";
		document.getElementById("sidenav-fixed").style.position="fixed";
	} else {
		document.getElementById("sidenav").style.width = "0";
		document.getElementById("sidenav-fixed").style.position="static";
	}
	if (window.innerWidth < 500) {
		document.getElementById("sidenav").style.width= "static";
		document.getElementById("sidenav-fixed").style.position="static";
	}
}
queryList.addEventListener('change', scrollFunction);
