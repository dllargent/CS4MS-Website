let x = window.matchMedia("(min-width: 700px)");
window.onscroll = function () { scrollFunction(x) };
function scrollFunction(x) {
	// var width = Math.max(window.screen.width, window.innerWidth);
	if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250 && window.innerWidth > 700) {
		document.getElementById("sidenav").style.left = "0";
		document.getElementById("shiftDIV").style.marginLeft = "200px";


	} else {
		document.getElementById("sidenav").style.left = "-160px";
		document.getElementById("shiftDIV").style.marginLeft = "20px";
	}
	if (window.innerWidth < 500) {
		document.getElementById("sidenav").style.left = "-160px";
		document.getElementById("shiftDIV").style.marginLeft = "20px";
	}
}
x.addListener(scrollFunction)