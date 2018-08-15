<link rel="stylesheet" href="homestyle.css" type="text/css"/>
<script src='slide1.js'></script>

<script>
var regx=/\S/;
var regx1=/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;


function empty_check(cnt_id)
{
var cnt_value=document.getElementById(cnt_id).value;
//if(cnt_value=="")
if(!cnt_value.match(regx))
//if(cnt_value.trim().length==0)
{
alert("Empty error");
}
}



function empty_check1(cnt_id,span_id)
{
var cnt_value=document.getElementById(cnt_id).value;

var regx=/\S/;
if(!cnt_value.match(regx))
{
document.getElementById(span_id).style.visibility="visible";
}
else
{

document.getElementById(span_id).style.visibility="hidden";
}
}
function error_check(cnt_id,span_id,err_no)
{
var cnt_value=document.getElementById(cnt_id).value;
switch(err_no)
{
case 1:reg=regx;break;
case 2:reg=regx1; break;
}
if(!cnt_value.match(reg))
{
document.getElementById(span_id).style.visibility="visible";

}
else
{
document.getElementById(span_id).style.visibility="hidden";
}
}




function error_check1(cnt_id,span_id,err_no)
{
var cnt_value=document.getElementById(cnt_id).value;
switch(err_no)
{
case 1:reg=regx;break;
case 2:reg=regx1; break;
}
if(!cnt_value.match(reg))
{
document.getElementById(span_id).style.visibility="visible";
return false;
}
else
{
document.getElementById(span_id).style.visibility="hidden";
return true;
}
}
function frm_check()
{
var flag1=error_check1('email','email_span',2);
var flag2=error_check1('pwd','pwd_span',1);
if(flag1==true && flag2==true)
{
return true;
}
else{
return false;
}
}


</script>