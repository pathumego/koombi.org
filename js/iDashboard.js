$(document).ready(function(e) {
    setLayout();
});

$( window ).resize(function() {
	setLayout();
});

function goPage( route )
{
	location.href=route;
}

function setLayout()
{	
	$(".iRight").height($(".iMainContainer").height()+2);
	$(".iLeft").height($(".iMainContainer").height());
}

