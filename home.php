<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="600">
    <link rel="shortcut icon" href="https://hebertds.com.br/monitor/img/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://hebertds.com.br/monitor/vendor/metro/css/metro-all.min.css"/>
    <link rel="stylesheet" href="https://hebertds.com.br/monitor/css/style.css">
    <title>Hebert DS - COVID Monitor</title>
</head>
<body>
    <!-- Application Container - Start -->
    <div id="app">
        <header data-role="app-bar" class="bg-white" id="app-header">
            <div class="container d-block">
                <a class="brand float-left no-hover">
                    <img src="https://hebertds.com.br/monitor/img/ico.png" class="logo" />
                    <span class="title h4">Hebert DS</span>
                </a>
                <a class="app-bar-item float-right c-pointer" onclick="Metro.dialog.open('#about');">
                    <b class="mif-help mif-2x mr-2"></b><span class="d-none d-block-lg">Sobre</span>
                </a>
                <a class="app-bar-item float-right c-pointer" href="https://hebertds.com.br/category/blog/">
                    <b class="mif-news mif-2x mr-2"></b><span class="d-none d-block-lg">Blog</span>
                </a>
            </div>
        </header>
        <section id="app-container" class="container p-0">
            <div class="grid">
                <!-- Application proposal - Start -->
                <div class="row">
                    <div class="cell-12 cell-lg-6 pb-0">
                        <div class="card info no-border">
                            <p class="p-4">
                                Este é um monitor COVID desenvolvido para mostrar de forma objetiva e 
                                clara as inforamações em tempo real do alastramento do vírus no Brasil 
                                e no mundo.<br>
                                A cada 10 minutos esta página é recarregada!
                                <span class="mif-info mif-2x pos-absolute"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Application proposal - End -->

                <!-- Application metrics - Start -->
                <div class="row">
                    <div class="cell-6 pt-0 pr-0">
                        <info-aggregate 
                        title="COVID no Brasil" icon="https://hebertds.com.br/monitor/img/brazil.png" 
                        :total='brazil_data.confirmed' 
                        :deaths="brazil_data.deaths"
                        :recovered="brazil_data.recovered"
                        classes="card bg-white aggregate p-2"></info-aggregate>
                    </div>
                    <div class="cell-6 pt-0 pl-0">
                        <info-aggregate 
                        title="COVID no Mundo" icon="https://hebertds.com.br/monitor/img/globo.png" 
                        :total='world_data.TotalConfirmed' 
                        :deaths="world_data.TotalDeaths"
                        :recovered="world_data.TotalRecovered"
                        classes="card bg-white aggregate p-2"></info-aggregate>
                    </div>
                    <div class="cell-12 pt-0">
                        <div class="card bg-white aggregate mt-0 p-2">
                            <div class="title"><img class="icon" src="https://hebertds.com.br/monitor/img/alert.png">10 países com mais casos</div>
                            <table class="table striped cell-border row-hover">
                                <thead>
                                    <th>#</th>
                                    <th>País</th>
                                    <th>Casos</th>
                                </thead>
                                
                                <tbody>
                                    <tr v-for="index in 10" :key="index">
                                        <td>{{ index }}</td>
                                        <td>{{ global_ranking[index - 1].country }}</td>
                                        <td class="count">{{ global_ranking[index - 1].confirmed}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Application metrics - Start -->
            </div>
        </section>
        <section class="row bg-dark fg-light p-8" id="app-footer">
            <div class="cell-12 cell-lg-4 text-center">
                
            </div>
            <div class="cell-12 cell-lg-4 text-center">
                Monitor Covid<br>
                Desenvolvido por Hebert Silva
            </div>
            <div class="cell-12 cell-lg-4 text-center">
                <b class="mif-calendar mif-2x mr-2"></b> {{data}}
            </div>
        </section>

        <!-- Application modal Start-->
        <div class="dialog border-radius-2" data-role="dialog" id="about">
            <div class="dialog-content">
                Aplicação construída com a utilização de APIs open source.<br>
                Os dados globais foram retirados do end point <a href="https://covid19api.com/">https://covid19api.com/</a>.<br>
                Os dados regionais foram extraídos do end point 
                <a href="https://covid19-brazil-api-docs.now.sh/">https://covid19-brazil-api-docs.now.sh/</a>.
            </div>
            <div class="dialog-actions">
                <button class="button js-dialog-close bg-base bg-grayMouse-hover fg-light">OK</button>
            </div>
        </div>
        <!-- Application modal End-->

    </div>
    <!-- Application Container - End -->

<!-- By standart the script for vue is loaded before closing body. 
    First the content is loaded in DOM and after vue is activated -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://hebertds.com.br/monitor/scripts/components/info-aggregate.js"></script>
    <script src="https://hebertds.com.br/monitor/vendor/metro/js/metro.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://hebertds.com.br/monitor/scripts/app.js"></script>
    <script>
        $(document).ready(function(){
            $('.count').mask('0.000.000.000', {reverse: true});
        });
    </script>
</body>
</html>
<?php get_footer();?>