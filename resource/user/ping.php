
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XIMING PING值测试 -Shadowsocks  - www.ximing.cf</title>
<style>
html {
	height: 100%;
	overflow: hidden;
}
body {
	background: #000;
	color: #C0C0C0;
	font-weight: bold;
	font-size: 14px;
	font-family: Lucida Console;
	height: 100%;
	margin: 0 0 0 5px;
}
#divInput {
	height: 10%;
}
#divContent {
	height: 90%;
	overflow: auto;
}
#txtTimeout {
	width: 40px;
}
button {
	margin-left: 10px;
}
</style>
</head>

<body>
<div id="divInput"> <span>节点IP:</span>
    <input id="txtURL" type="text" />
    <span>Timeout:</span>
    <input id="txtTimeout" type="text" value="2000" />
    <input id="btnSwitch" type="button" value="Start" onclick="handleBtnClick()" />
	有偏高，实际以在本机运行里输入ping <span id='ip'></span> -t 结果为准。
    <hr/>
</div>
<div id="divContent"></div>
<script>  
var intStartTime;   
var objIMG = new Image();    
var intTimerID;
  
objIMG.onload =   
objIMG.onerror =    
function()   
{   
    /*   
     * 有回应,取消超时计时   
     */   
    clearTimeout(intTimerID);   
  
    if(!bolIsRunning || bolIsTimeout)   
        return;   
  
    var delay = new Date() - intStartTime;   
  
    println("Reply from " +   
            strURL.substring(7)  +   
            " time" +   
            ((delay<1)?("<1"):("="+delay)) +   
            "ms");   
    arrDelays.push(delay);   
  
    /*   
     * 每次请求间隔限制在1秒以上   
     */   
    setTimeout(ping, delay<1000?(1000-delay):1000);   
}   
  
function ping()   
{   
    /*   
     * 发送请求   
     */   
    intStartTime = +new Date();   
    intSent++;   
  
    objIMG.src = strURL + "/" + intStartTime;   
    bolIsTimeout = false;   
  
    /*   
     * 超时计时   
     */   
    intTimerID = setTimeout(timeout, intTimeout);   
}   
  
function timeout()   
{   
    if(!bolIsRunning)   
        return;   
  
    bolIsTimeout = true;   
    objIMG.src = "X:\\";   
  
    println("Request timed out.");   
    ping();   
}   
</script> 
<script>  
var $ = function(v){return document.getElementById(v)};   
  
var arrDelays = [];   
var intSent;   
  
var bolIsRunning = false;   
var bolIsTimeout;   
var strURL;   
var intTimeout;   
var intTimerID;   
  
var objBtn = $("btnSwitch");   
var objContent = $("divContent");   
var objTxtURL = $("txtURL");   
function getParameter(param)
{
	var query = window.location.search;
	var iLen = param.length;
	var iStart = query.indexOf(param);
	if (iStart == -1)
		return "";
	iStart += iLen + 1;
	var iEnd = query.indexOf("&", iStart);
	if (iEnd == -1)
		return query.substring(iStart);
	return query.substring(iStart, iEnd);
}
var ip=getParameter('ip');
if (ip!='')
{
	objTxtURL.value = ip;
	handleBtnClick();
}else{
	objTxtURL.value = window.location.host;
}
$("ip").innerText=objTxtURL.value;
function handleBtnClick()   
{   
    if(bolIsRunning)   
    {   
        /*   
         * 停止   
         */   
        var intRecv = arrDelays.length;   
        var intLost = intSent-intRecv;   
        var sum = 0;   
  
        for(var i=0; i<intRecv; i++)   
            sum += arrDelays[i];   
  
        objBtn.value = "开始测PING";   
        bolIsRunning = false;   
  
        /*   
         * 统计结果   
         */   
        println("　");   
        println("Ping statistics for " + strURL.substring(7) + ":");   
        println("　　Packets: Sent = " +   
                intSent +   
                ", Received = " +   
                intRecv +   
                ", Lost = " +   
                intLost +   
                " (" +   
                Math.floor(intLost / intSent * 100) +   
                "% loss),");   
  
        if(intRecv == 0)   
            return;   
  
        println("Approximate round trip times in milli-seconds:");   
        println("　　Minimum = " +   
                Math.min.apply(this, arrDelays) +   
                "ms, Maximum = " +   
                Math.max.apply(this, arrDelays) +   
                "ms, Average = " +   
                Math.floor(sum/intRecv) +   
                "ms");   
    }   
    else   
    {   
        /*   
         * 开始   
         */   
        strURL = objTxtURL.value;   
  
        if(strURL.length == 0)   
            return;   
  
        if(strURL.substring(0,7).toLowerCase() != "http://")   
            strURL = "http://" + strURL;   
  
        intTimeout = parseInt($("txtTimeout").value, 10);   
        if(isNaN(intTimeout))   
            intTimeout = 2000;   
        if(intTimeout < 1000)   
            intTimeout = 1000;   
  
        objBtn.value = "停止 ";   
        bolIsRunning = true;   
  
        arrDelays = [];   
        intSent = 0;   
  
        cls();   
        println("Pinging " + strURL.substring(7) + ":");   
        println("　");   
        ping();   
    }   
}   
  
function println(str)   
{   
    var objDIV = document.createElement("div");   
  
    if(objDIV.innerText != null)   
        objDIV.innerText = str;   
    else   
        objDIV.textContent = str;   
  
    objContent.appendChild(objDIV);   
    objContent.scrollTop = objContent.scrollHeight;   
}   
  
function cls()   
{   
    objContent.innerHTML = "";   
}   
</script>
</body>
</html>
