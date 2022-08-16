function ajax(){
    let req = new XMLHttpRequest()
    req.onreadystatechange = function(){
        if(req.readyState == 4 && req.status == 200){
            document.getElementById('carrinho').innerHTML = req.responseText
        }
    }
    //pega o echo q ta no chatenviar.php
    req.open('GET', 'carrinho.php', true)
    req.send()
    //atualiza e coloca o echo a div msgs
    var objDiv = document.getElementById("carrinho");
    objDiv.scrollTop = objDiv.scrollHeight;
}
setInterval(function(){ajax()}, 1000)