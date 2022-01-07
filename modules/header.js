const header = document.querySelector('.header')
header.innerHTML = `



<header class="cabecalho">
        <nav id="nav">
            <div id="btn-mobile">
                <div class="traco"></div>
                <div class="traco"></div>
                <div class="traco"></div>
            </div>
            <div class="voltar">
               <a href="../../../${voltar}">Voltar</a>
            </div> 
            <ul id="menu">
            <li>
                <a class="${ativo_inicio}" href="${caminho_camada}index.html ">
                    <div>
                        Ínicio
                    </div>
                </a>
            </li>
            <li>
                <a class="${ativo_html}"href="assets/conteudo/${caminho_camada}html5/html.html">
                        <div>
                        <img src="${icon}/image/icon-html.png" width="30" alt="">HTML5
                        </div>
                </a>
            </li>



    
            <li>
                <a class="${ativo_css}" href="assets/conteudo/${caminho_camada}css3/css.html">
                        <div>
                        <img src="${icon}/image/icon-css.png" width="30" alt="">CSS3
                        </div>
                </a>
            </li>




            <li>
                <a class="${ativo_js}" href="assets/conteudo/${caminho_camada}javascript/javascript.html">
                        <div>
                        <img src="${icon}/image/icon-js.png" width="30" alt="">JavaScript
                        </div>
                </a>
            </li>




            <li>
                <a class="${ativo_reactjs}" href="assets/conteudo/${caminho_camada}reactjs/reactjs.html">
                        <div>
                        <img src="${icon}/image/icon-reactjs.png" width="30" alt=""> React Js
                        </div>
                </a>
            </li>




            <li>
                <a class="${ativo_firebase}" href="assets/conteudo/${caminho_camada}firebase/firebase.html">
                        <div>
                        <img src="${icon}/image/icon-fire.png" width="30" alt=""> FireBase
                        </div>
                </a>
            </li>



            <li>
                <a class="${ativo_nodejs}" href="assets/conteudo/${caminho_camada}nodejs/nodejs.html">
                        <div>
                        <img src="${icon}/image/icon-node.png" width="30" alt=""> Node Js
                        </div>
                </a>
            </li>



            <li>
                <a class="${ativo_mongo}" href="assets/conteudo/${caminho_camada}mongo/mongo.html">
                        <div>
                        <img src="${icon}/image/icon-mongo.png" width="30" alt=""> Mongo DB
                        </div>
                </a>
            </li>


            <li>
                <a class="${ativo_conteudo}" href="assets/conteudo/${caminho_camada}topicos.html">
                        <div>
                            Conteudo
                        </div>
                </a>
            </li>

            </ul>
        </nav>
</header>   
`