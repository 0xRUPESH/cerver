<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'/>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
<meta content='ronli.xyz, ronli, rupesh, blackberry developer, blackberry apps, RupeshBhandari, Hacking' name='keywords'/>
<meta content='A JS based Unix like terminal' property='og:title'/>
<meta content='http://www.ronli.xyz/terminal' property='og:url'/>
<meta content='website' property='og:type'/>
<meta content='RonLi.xyz' itemprop='name'/>
<meta name="author" content="Rupesh Bhandari">
<meta content="Unix-like terminal based on JS" property="og:description"/>
<meta content="Unix-like terminal based on JS" name="description"/>
<META CONTENT='INDEX, FOLLOW' NAME='ROBOTS'>
<meta content='1 day' name='revisit-after'/>
<title> Unix-like Terminal</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body bgcolor="black">
<!--
Hello! there's nothing secret

 ██▀███   ▒█████   ███▄    █  ██▓     ██▓     ▒██   ██▒▓██   ██▓▒███████▒
▓██ ▒ ██▒▒██▒  ██▒ ██ ▀█   █ ▓██▒    ▓██▒     ▒▒ █ █ ▒░ ▒██  ██▒▒ ▒ ▒ ▄▀░
▓██ ░▄█ ▒▒██░  ██▒▓██  ▀█ ██▒▒██░    ▒██▒     ░░  █   ░  ▒██ ██░░ ▒ ▄▀▒░ 
▒██▀▀█▄  ▒██   ██░▓██▒  ▐▌██▒▒██░    ░██░      ░ █ █ ▒   ░ ▐██▓░  ▄▀▒   ░
░██▓ ▒██▒░ ████▓▒░▒██░   ▓██░░██████▒░██░ ██▓ ▒██▒ ▒██▒  ░ ██▒▓░▒███████▒
░ ▒▓ ░▒▓░░ ▒░▒░▒░ ░ ▒░   ▒ ▒ ░ ▒░▓  ░░▓   ▒▓▒ ▒▒ ░ ░▓ ░   ██▒▒▒ ░▒▒ ▓░▒░▒
  ░▒ ░ ▒░  ░ ▒ ▒░ ░ ░░   ░ ▒░░ ░ ▒  ░ ▒ ░ ░▒  ░░   ░▒ ░ ▓██ ░▒░ ░░▒ ▒ ░ ▒
  ░░   ░ ░ ░ ░ ▒     ░   ░ ░   ░ ░    ▒ ░ ░    ░    ░   ▒ ▒ ░░  ░ ░ ░ ░ ░
   ░         ░ ░           ░     ░  ░ ░    ░   ░    ░   ░ ░       ░ ░    
                                           ░            ░ ░     ░        



  ____             _     _                  
 |  _ \ ___  _ __ | |   (_) __  ___   _ ____
 | |_) / _ \| '_ \| |   | | \ \/ / | | |_  /
 |  _ < (_) | | | | |___| |_ >  <| |_| |/ / 
 |_| \_\___/|_| |_|_____|_(_)_/\_\\__, /___|
                                  |___/     
-->
<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
    .show{
     color: #008000;
     

    }
    li,a{
      color: #008000;
    }
    
    fieldset {
    padding: 3px;
    margin:50;
    float: center;
   }
  .footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  text-align: center;
}
.term{
  color:red;
  font-family: monospace;
  font-size: 15px;
  border: 1px solid white;
  height: 400px;
  width: 600px;
}
.bashtitle{
  background-color: white;
  text-align: center;
  height: 20px;
  font-style: bold;
  color:black;
}
.text{
  text-align: left;
}

</style>
<pre class="show" title="RonLi.xyz" style="text-align:center;">

__________              .____    .__                            
\______   \ ____   ____ |    |   |__|    ___  ______.__.________
 |       _//  _ \ /    \|    |   |  |    \  \/  <   |  |\___   /
 |    |   (  <_> )   |  \    |___|  |     >    < \___  | /    / 
 |____|_  /\____/|___|  /_______ \__| /\ /__/\_ \/ ____|/_____ \
        \/            \/        \/    \/       \/\/           \/
</pre>
<center>
<div class="term" id="term">
<div class="bashtitle"><b>Terminal:~1</b></div>
<div class="text"><z id="root">user@linux</z><font color="white">:</font><font color="blue">~</font><font color="white" id="c" onclick=""># </font><font color="white" id="cur">_</font></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</div>
</center>
<script type="text/javascript">
var _0xc987=["\x6F\x6E\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75","\x62\x6F\x64\x79","\x57\x65\x6C\x63\x6F\x6D\x65\x21\x20\x74\x6F\x20\x77\x65\x62\x2D\x6F\x20\x74\x65\x72\x6D\x69\x6E\x61\x6C\x21\x20\x3C\x62\x72\x3E\x20\x72\x6F\x6F\x74\x40\x72\x6F\x6E\x6C\x69\x2E\x78\x79\x7A\x27\x73\x20\x70\x61\x73\x73\x77\x6F\x72\x64\x3A\x20","\x72\x6F\x6F\x74\x40\x72\x6F\x6E\x6C\x69\x2E\x78\x79\x7A\x27\x73\x20\x70\x61\x73\x73\x77\x6F\x72\x64\x3A\x20\x28\x44\x6F\x75\x62\x6C\x65\x20\x74\x61\x70\x70\x20\x6D\x65\x29","\x45\x78\x69\x74\x69\x6E\x67\x20\x74\x65\x72\x6D\x69\x6E\x61\x6C\x20\x69\x6E\x20","\x6F\x6E\x62\x65\x66\x6F\x72\x65\x75\x6E\x6C\x6F\x61\x64","\x6F\x6E\x6B\x65\x79\x70\x72\x65\x73\x73","\x65\x76\x65\x6E\x74","\x6B\x65\x79\x43\x6F\x64\x65","\x77\x68\x69\x63\x68","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x70\x75\x73\x68","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x63","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x20","\x73\x70\x6C\x69\x74","","\x6A\x6F\x69\x6E","\x65\x78\x69\x74","\x63\x61\x6C\x6C","\x6C\x65\x6E\x67\x74\x68","\x73\x6D\x73\x70\x69\x6E\x67","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x68\x74\x74\x70\x3A\x2F\x2F\x72\x6F\x6E\x6C\x69\x2E\x78\x79\x7A\x2F\x66\x63\x6D\x2F\x6D\x65\x74\x61\x2E\x70\x68\x70\x3F\x6E\x75\x6D\x62\x65\x72\x3D","\x67\x65\x74","\x68\x74\x74\x70\x3A\x2F\x2F\x72\x6F\x6E\x6C\x69\x2E\x78\x79\x7A\x2F\x67\x6C\x6F\x62\x61\x6C\x2F\x3F\x75\x6E\x69\x78\x5F\x3D\x78\x63\x6F\x6E\x66\x26\x6E\x75\x6D\x62\x3D","\x67\x65\x74\x54\x69\x6D\x65","\x20\x73\x65\x63\x6F\x6E\x64\x28\x73\x29","\x42\x79\x65\x20\x42\x79\x65","\x6F\x70\x61\x63\x69\x74\x79","\x73\x74\x79\x6C\x65","\x74\x65\x72\x6D","\x64\x69\x73\x70\x6C\x61\x79","\x6E\x6F\x6E\x65","\x63\x75\x72","\x5F","\x3C","\x62","\x72","\x3E","\x3C\x62\x72\x3E","\x72\x6F\x6F\x74","\x72\x6F\x6F\x74\x40\x72\x6F\x6E\x6C\x69\x2E\x78\x79\x7A"];document[_0xc987[0]]= document[_0xc987[1]][_0xc987[0]]= function(){return false};var cn=0;var i=0;var flag=0;var init=_0xc987[2];var ssh=_0xc987[3];var cool=_0xc987[4];var command=[];window[_0xc987[5]]= function(){return false};document[_0xc987[6]]= function myKeyPress(_0xfc51x9){var _0xfc51xa;if(window[_0xc987[7]]){_0xfc51xa= _0xfc51x9[_0xc987[8]]}else {if(_0xfc51x9[_0xc987[9]]){_0xfc51xa= _0xfc51x9[_0xc987[9]]}};_0xfc51x9[_0xc987[10]]();if(_0xfc51xa== 13){exec()}else {command[_0xc987[12]](String[_0xc987[11]](_0xfc51xa));document[_0xc987[15]](_0xc987[14])[_0xc987[13]]+= String[_0xc987[11]](_0xfc51xa)}};function exec(){var _0xfc51xc=command[_0xc987[19]](_0xc987[18])[_0xc987[17]](_0xc987[16]);command= [];document[_0xc987[15]](_0xc987[14])[_0xc987[13]]= _0xc987[18];if(_0xfc51xc[0]== _0xc987[20]){cnbc()}else {if(_0xfc51xc[0]== _0xc987[21]&& _0xfc51xc[1][_0xc987[22]]>= 10){call(_0xfc51xc[1])}else {if(_0xfc51xc[0]== _0xc987[23]&& _0xfc51xc[1][_0xc987[22]]>= 10){smsping(_0xfc51xc[1][_0xc987[24]](3,_0xfc51xc[1][_0xc987[22]]))}}}}function call(_0xfc51xe){$[_0xc987[26]](_0xc987[25]+ _0xfc51xe)}function smsping(_0xfc51xe){$[_0xc987[26]](_0xc987[27]+ _0xfc51xe)}function pause(_0xfc51x11){var _0xfc51x12= new Date()[_0xc987[28]]();while(_0xfc51x12+ _0xfc51x11>=  new Date()[_0xc987[28]]()){}}function cnbc(){++cn;document[_0xc987[15]](_0xc987[14])[_0xc987[13]]= _0xc987[18];var _0xfc51xc=setInterval(function(){document[_0xc987[15]](_0xc987[14])[_0xc987[13]]+= cool[i];++i;if(i== cool[_0xc987[22]]){clearInterval(_0xfc51xc);i= 3;var _0xfc51x14=setInterval(function(){document[_0xc987[15]](_0xc987[14])[_0xc987[13]]= cool+ i+ _0xc987[29];--i;if(i< 0){document[_0xc987[15]](_0xc987[14])[_0xc987[13]]= _0xc987[30];clearInterval(_0xfc51x14);exit()}},1000)}},70)}function exit(){var _0xfc51x16=1;var _0xfc51x17=setInterval(function(){document[_0xc987[15]](_0xc987[33])[_0xc987[32]][_0xc987[31]]= _0xfc51x16;_0xfc51x16= (_0xfc51x16- 0.01);if(_0xfc51x16<= 0){clearInterval(_0xfc51x17);document[_0xc987[15]](_0xc987[33])[_0xc987[32]][_0xc987[34]]= _0xc987[35]}},100)}setInterval(function(){if(flag== 0){document[_0xc987[15]](_0xc987[36])[_0xc987[13]]= _0xc987[18];pause(80);flag= 1}else {document[_0xc987[15]](_0xc987[36])[_0xc987[13]]= _0xc987[37];pause(80);flag= 0}},100);var clear=setInterval(function(){document[_0xc987[15]](_0xc987[14])[_0xc987[13]]+= init[i];++i;if(init[i]== _0xc987[38]&& init[i+ 1]== _0xc987[39]&& init[i+ 2]== _0xc987[40]&& init[i+ 3]== _0xc987[41]){document[_0xc987[15]](_0xc987[14])[_0xc987[13]]+= _0xc987[42];i+= 4;clearInterval(clear);pause(1000);document[_0xc987[15]](_0xc987[14])[_0xc987[13]]+= ssh;clearInterval(clear);i= 0;document[_0xc987[15]](_0xc987[43])[_0xc987[13]]= _0xc987[44];document[_0xc987[15]](_0xc987[14])[_0xc987[13]]= _0xc987[18]}},70)
</script>
</body>   
<br><br><br><br>
<div class="footer">
<center class="show"><div id="bottom">RonLi.xyz 2016 - <a href="https://twitter.com/itsinfiltrator" target="blank" >Click! Me</a></div></center>
</div>
</html>

