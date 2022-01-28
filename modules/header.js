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
                <img src="${icon}/image/icon-home.png" width="35" alt="">
                </div>
                </a>
            </li>
            <li>
                <a class="${ativo_html}"href="assets/conteudo/${caminho_camada}html5/html.html">
                        <div>
                        <img src="${icon}/image/icon-html.png" width="35" alt="">
                        </div>
                </a>
            </li>



    
            <li>
                <a class="${ativo_css}" href="assets/conteudo/${caminho_camada}css3/css.html">
                        
                        <div>
                        <img  src="${icon}/image/icon-css.png" width="35" alt="">
                        </div>

                        
                </a>
            </li>

            <li>
                <a class="${ativo_git}" href="assets/conteudo/${caminho_camada}git/git.html">
                        <div>
                        <img src="${icon}/image/icon-git.png" width="35" alt="">
                        </div>
                </a>
            </li>




            <li>
                <a class="${ativo_js}" href="assets/conteudo/${caminho_camada}javascript/javascript.html">
                        <div>
                        <img src="${icon}/image/icon-js.png" width="35" alt="">
                        </div>
                </a>
            </li>

            <li>
            <a class="${ativo_ts}" href="assets/conteudo/${caminho_camada}typescript/typescript.html">
                    <div>
                    <img src="${icon}/image/icon-typescript.png" width="35" alt="">
                    </div>
            </a>
        </li>


            <li>
                <a class="${ativo_reactjs}" href="assets/conteudo/${caminho_camada}reactjs/reactjs.html">
                        <div>
                        <img src="${icon}/image/icon-reactjs.png" width="35" alt="">
                        </div>
                </a>
            </li>
            <li>
                <a class="${ativo_reactN}" href="assets/conteudo/${caminho_camada}reactN/reactN.html">
                        <div>
                        <img src="${icon}/image/icon-reactN.png" width="36" alt="">
                        </div>
                </a>
            </li>




            <li>
                <a class="${ativo_firebase}" href="assets/conteudo/${caminho_camada}firebase/firebase.html">
                        <div>
                        <img src="${icon}/image/icon-fire.png" width="30" alt="">
                        </div>
                </a>
            </li>



            <li>
                <a class="${ativo_nodejs}" href="assets/conteudo/${caminho_camada}nodejs/nodejs.html">
                        <div>
                        <img src="${icon}/image/icon-node.png" width="35" alt="">
                        </div>
                </a>
            </li>



            <li>
                <a class="${ativo_mongo}" href="assets/conteudo/${caminho_camada}mongo/mongo.html">
                        <div>
                        <img src="${icon}/image/icon-mongo.png" width="35" alt="">
                        </div>
                </a>
            </li>


            <li>
                <a class="${ativo_conteudo}" href="assets/conteudo/${caminho_camada}topicos.html">
                        <div>
                        <img src="${icon}/image/icon-conteudo.png" width="35" alt="">
                        </div>
                </a>
            </li>

            </ul>
        </nav>
</header> 

<div style="width: 100%; height: 40px; display: flex; justify-content: space-between; align-items: center; padding: 0 20px; margin-top: 55px; position: absolute;">
<div><a href="${anterior}.html"> <img src="${icon}/image/setaEs.png" width="35" alt=""> </a></div>
    <div><a href="${proximo}.html"> <img src="${icon}/image/setaDi.png" width="35" alt=""> </a></div>
</div>

`