

var selecionafiltro = document.querySelector("#filtrar-pizza");
        selecionafiltro.addEventListener("input", function () {
            this.value;
            var perguntas = document.querySelectorAll("#pizzasalgadafilter");
            if (this.value.length > 0) {
                for (var i = 0; i < perguntas.length; i++) {
                    var pergunta = perguntas[i];
                    var titulo = pergunta.querySelector(".ingredientes");
                    var textotitulo = titulo.textContent;
                    var expresao = new RegExp(this.value, "i");
                    if (!expresao.test(textotitulo)) {
                        //pergunta.classList.add("fadeOutRight");
                        pergunta.classList.remove("visivel");
                        pergunta.classList.add("invisivel");               
                    } else {
                        pergunta.classList.remove("invisivel");
                        pergunta.classList.add("visivel");
                    }
                }
                var pizzasfiltradas = document.querySelectorAll(".visivel");
                if(pizzasfiltradas.length <= 0){
                    document.getElementById('encontrado').style.display="none"
                    document.getElementById('naoencontrado').style.display="block"
                }else{
                    document.getElementById('encontrado').style.display="block"
                    document.getElementById('naoencontrado').style.display="none"  
                }
            } else { 
                for (var i = 0; i < perguntas.length; i++) {
                    var pergunta = perguntas[i];
                    pergunta.classList.remove("invisivel");
                }
            }
        });
    