const sectionLogica = document.querySelector('.section-logica-de-programacao')
sectionLogica.innerHTML = `
<div class="name-linguage">
            <img src="../../image/icon-js.png" width="40px" alt="">
            <h2>JavaScript - Lógica de Programação</h2>
</div>
<div class="container">
    <ul>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Operadpres-de-comparacao.html">Operadores de comparação</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/operadores-logicos.html">Operadores lógicos</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Valores-Falsy.html">Valores Falsy</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/short-circuit.html">Short-Circuit</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/if,else-if-e-else.html">if, else if e else</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/target.html">target</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/value.html">value</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/createElement().html">createElement()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/classList.add().html">classList.add()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/appendChild().html">appendChild()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercício1.html">Exercício</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/operacções-ternarias.html">Operações ternárias</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/object-date.html">Objeto Date</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/swith-case.html">Swith - Case</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercício-com-Swith-Case.html">Exercício com Swith - Case</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/toLocaleString.html">toLocaleString</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercício-com-toLocaleString.html">Exercício-com-toLocaleString</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/diferenças-entre-var,let-e-const.html">Diferenças entre var, let e const</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/atribuicoes-via-desestruturacao-array.html">Atribuição via desestruturação - Array</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Atribuição-via-desestruturação-Objetos.html">Atribuição via desestruturação - Objetos</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/for.html">For</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercícios-com-for.html">Exercícios com for</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/dom-e-a-arvore-do-dom.html">DOM e a árvore do DOM</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/for-in.html">For in</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/for-of.html">For of</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/forEach()-basico.html">forEach() - basico</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/getComputedStyle().html">getComputedStyle()</a></li> 
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/style.html">style</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/querySelectorAll().html">querySelectorAll()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercício-com-NodeList.html">Exercício com NodeList</a></li> 
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/while-e-do-while.html">While e Do While</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/break-e-continue.html">Break e Continue</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Execício com-logica-de-programação-1.html">Execício com lógica de programação 1</a></li> 
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Execício com-logica-de-programação-2.html">Execício com lógica de programação 2</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Execício com-logica-de-programação-3.html">Execício com lógica de programação 3</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/tratando-e-lancando-erros-try-catch-throw.html">Tratando e lançando erros (try, catch, throw)</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/tratando-e-lancando-erros-try-catch-finally.html">Tratando e lançando erros (try, catch, finally)</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/setInterval-e-setTimeout.html">setInterval e setTimeout</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/classList.remove().html">classList.remove()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/classList.contains().html">classList.contains()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercício-Criando-um-timer.html">Exercício - Criando um timer</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/keyCode.html">keyCode</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/focus().html">focus()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/setAttribute().html">setAttribute()</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/parentElement.html">parentElement</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/trim().html">trim()</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/JSON-stringify().html">JSON.stringify()</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/JSON-parse().html">JSON.parse()</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/localStorage-setItem().html">localStorage.setItem()</a></li>
                    <li><a class="inativo" href="${diretorioArquivoConteudo}/javascript/logica de programacao/localStorage-getItem().html">localStorage.getItem()</a></li>
                    <li><a class="basico" href="${diretorioArquivoConteudo}/javascript/logica de programacao/Exercício-Criando-uma-lista-de-tarefas.html">Exercício - Criando uma lista de tarefas</a></li>
                    

    </ul>

</div>
`
