<main id="home">
    <section class="section current" id="1">
        <div class="content px-5 py-5 d-flex" style="background-image: url(/app/resources/assets/img/lines.png); background-size: 50%; background-position: right; background-repeat: no-repeat;">
            <img src="" alt="">
            <div class="row m-auto">
                <div class="col-lg-5">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, sequi nobis? Placeat libero quasi cumque non cum delectus alias aut!</p>
                    <a class="btn btn-primary" href="#info">Mais detalhe</a>
                </div>
                <div class="col door-area">
                    <div class="d-flex w-100 h-100">

                        <!-- <div class="doorframe mx-auto" tabindex="0" style="height: 100%;">
                            <div class="door"></div>
                            <div class="someone">
                                <img src="/app/resources/assets/img/background.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section" id="2">
        <div class="content px-5 py-5 d-flex">
            <div class="row m-auto">
                <div class="col-lg-6">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, sequi nobis? Placeat libero quasi cumque non cum delectus alias aut!</p>
                    <a class="btn btn-primary" href="#info">Mais detalhe</a>
                </div>
            </div>
        </div>
    </section>
   
    <section class="section" id="3">
        <div class="content px-5 py-5 d-flex">
            <div class="row m-auto">
                <div class="col">
                    <div class="text-center">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, sequi nobis? Placeat libero quasi cumque non cum delectus alias aut!</p>
                        <a class="btn btn-primary" href="#info">Mais detalhe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="content">
            <div class="header">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a class="" href="" onclick="showHideProjects()">Voltar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="section-header my-5 px-3">
                    <h4>Projetos</h4>
                </div>
                <div class="row">
                    
                    <?php
                        
                        $projects = [
                            [
                                'title' => 'Grid Catch',
                                'image' => 'http://dashboard.lh/storage/images/projects/grid-catch/thumb/image.png'
                            ],
                            [
                                'title' => 'Grid Catch',
                                'image' => 'http://dashboard.lh/storage/images/projects/grid-catch/thumb/image.png'
                            ],
                            [
                                'title' => 'Grid Catch',
                                'image' => 'http://dashboard.lh/storage/images/projects/grid-catch/thumb/image.png'
                            ],
                            [
                                'title' => 'Grid Catch',
                                'image' => 'http://dashboard.lh/storage/images/projects/grid-catch/thumb/image.png'
                            ],
                            [
                                'title' => 'Grid Catch',
                                'image' => 'http://dashboard.lh/storage/images/projects/grid-catch/thumb/image.png'
                            ],
                            [
                                'title' => 'Grid Catch',
                                'image' => 'http://dashboard.lh/storage/images/projects/grid-catch/thumb/image.png'
                            ],
                        ]
                    
                    ?>

                    <?php foreach($projects as $project) { ?>
                        <div class="col-lg-3 mb-5">
                            <div class="card" style="background-image: url(<?php  $project['image'] ?>);">
                                <a href="#" class="stretched-link"><?= $project['title'] ?></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <div class="action-bar">
        <div class="container">
            <div class="d-flex justify-content-between">
                <button tabindex="0" class="btn btn-outline btn-prev disabled" onclick="peviousSection()">Voltar</button>
                <button class="btn btn-outline open-projects" onclick="showHideProjects()">Ver projetos</button>
                <button tabindex="0" class="btn btn-outline btn-next" onclick="nextSection()">Next</button>
            </div>
        </div>
    </div>
</main>

<script>

    let content = 1;
    
    document.getElementById(content).classList.add('current');

    function setContent(){

        document.querySelector('.btn-prev').classList.remove('disabled');

        document.querySelector('.section.current').classList.remove('current');
        
        if(!!document.getElementById(content)){
            // if getElement dont returns null
            document.getElementById(content).classList.add('current');
        }else {
            content = 1;
            document.getElementById(content).classList.add('current');
            document.querySelector('.btn-prev').classList.add('disabled')
        }

    }

    function nextSection(){
        content = content + 1;
        setContent(content);
    }
  
    function peviousSection(){
        content = content - 1;
        setContent(content);
    }

    function showHideProjects(){
        document.querySelector('.projects').classList.toggle('show')
    }

    window.addEventListener('keyup', (e) => {
        if(e.code == 'ArrowRight'){
            content = content + 1;
            setContent(content);
        } else if(e.code == 'ArrowLeft'){
            content > 1 ? content = content - 1 : content = 1;
            setContent(content);
        }
    })
</script>
