// Asynchronous connection

function monitor(monitorApi, otkuda){
    
    var xmlhttp = getXmlHttp(); // Object XMLHTTP
    xmlhttp.open('GET', monitorApi+"?otkuda="+otkuda, true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlhttp.send(); // Отправляем запрос
    
    xmlhttp.onreadystatechange = function() { 
      if (xmlhttp.readyState == 4) { 
      console.log(xmlhttp.status);
        if(xmlhttp.status == 200) { 
          //console.log(xmlhttp.responseText); // response test
        }  
      } 
    }
}
function getXmlHttp() {  
    var xmlhttp;  
    try {  
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");  
    } 
    catch (e) {  
        try {  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");  
        } 
        catch (E) {  
            xmlhttp = false;  
        }  
    }  
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {  
        xmlhttp = new XMLHttpRequest();  
    }  
    return xmlhttp;  
} 