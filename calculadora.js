function calcular() { 
    var num1 = parseFloat(document.getElementById("num1").value); 
    var num2 = parseFloat(document.getElementById("num2").value); 
    var operacao = document.getElementById("operation").value; 
    var resultadoCampo = document.getElementById("resultado"); 
    var resultado; 
    switch (operacao) { 
        case "+": resultado = num1 + num2; 
        break; 
        case "-": 
        resultado = num1 - num2; 
        break; 
        case "*": resultado = num1 * num2; 
        break; 
        case "/": 
        resultado = num1 / num2; 
        break; 
        default: 
        resultado = "Erro"; 
    } 
    resultadoCampo.value = resultado; 
    // Resetar estilos 
    resultadoCampo.classList.remove("positivo", "negativo", "zero"); 
    // Definir estilo baseado no valor 
    if (resultado > 0) { 
        resultadoCampo.classList.add("positivo"); 

    } else if (resultado < 0) { 
        resultadoCampo.classList.add("negativo"); 

    } else { 
        resultadoCampo.classList.add("zero"); 
    } 
    }