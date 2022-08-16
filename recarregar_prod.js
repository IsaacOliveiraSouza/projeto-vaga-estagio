function ajax(){
    let req = new XMLHttpRequest()
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('produtos').innerHTML = req.responseText
        }
    }
    //pega o echo q ta no chatenviar.php
    req.open('GET', 'form.php', true)
    req.send()
    //atualiza e coloca o echo a div msgs
    var objDiv = document.getElementById("produtos");
    objDiv.scrollTop = objDiv.scrollHeight;
}
setInterval(function(){ajax()}, 1000)