var distance=188;
var speed=5000;
var f=1;
var animator1;
function autoScroll(el)
{
	var currentY = $("#"+el+"").scrollTop();
	var yPos = currentY + distance;
	
		var i=currentY;
		
		/*var x=setInterval(function(){
			if(i<=yPos){
				$("#"+el+"").scrollTop(i);
				i++;
				 
			}
			else{
				clearInterval(x);
				}
		},1);*/
	$("#"+el+"").scrollTop(yPos);
	var height = $("#"+el+"").children().height();
	if(yPos > (height+188))
	{
		currentY=0;
		yPos=0;
		$("#"+el+"").scrollTop(currentY);
		
	}
	
	if(f==1){
	animator1=setInterval('autoScroll(\''+el+'\')',speed);
	f=0;	
	}
}
function stop1()
{
	clearInterval(animator1);
}
function start1()
{
	animator1=setInterval('autoScroll(\'d1\')',speed);
}