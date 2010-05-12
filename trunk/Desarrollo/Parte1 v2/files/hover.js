function addEvent(elm, evType, fn, useCapture) {
	if (elm.addEventListener) {
	elm.addEventListener(evType, fn, useCapture);
	return true;
	} else if (elm.attachEvent) {
	var r = elm.attachEvent('on' + evType, fn);
	return r;
	} else {
	elm['on' + evType] = fn;
	}
}

function hover(e) {
	var el;
	if (window.event && window.event.srcElement)
	el = window.event.srcElement;
	if (e && e.target)
	el = e.target;
	if (!el)
	return;

	if (window.event) 
	{
		window.event.cancelBubble = true;
		window.event.returnValue = false;
	}
	if (e && e.stopPropagation && e.preventDefault) 
	{
		e.stopPropagation();
		e.preventDefault();
	}
	el.style.background = "url(../images/nav_contact2.png) no-repeat 0 0";
}

function nohover(e) {
	var el;
	if (window.event && window.event.srcElement)
	el = window.event.srcElement;
	if (e && e.target)
	el = e.target;
	if (!el)
	return;

	if (window.event) 
	{
		window.event.cancelBubble = true;
		window.event.returnValue = false;
	}
	if (e && e.stopPropagation && e.preventDefault) 
	{
		e.stopPropagation();
		e.preventDefault();
	}
	el.style.background = "none";
}

function addListeners() {
		var link1 = document.getElementById('link_home');
		var link2 = document.getElementById('link_about');
		var link3 = document.getElementById('link_contact');
		
		link1.style.background = "none";
		link2.style.background = "none";
		link3.style.background = "none";
		
		addEvent( link1 , "mouseover", hover , false )
		addEvent( link2 , "mouseover" , hover , false )
		addEvent( link3 , "mouseover" , hover , false )
		
		addEvent( link1 , "mouseout", nohover , false )
		addEvent( link2 , "mouseout", nohover , false )
		addEvent( link3 , "mouseout", nohover , false )
}
addEvent(window, 'load', addListeners, false);