function consultaCep(){
    var cep = document.getElementById("cep").value
    var url = " https://viacep.com.br/ws/"+cep+"/json"

    console.log(url)
    console.log(cep)
    $.ajax({ url: url,
            type: "GET",
            success: function(response){
                console.log(response)
                document.log
            }    
           } 
    )

}