<main id="grid-catch">
    <section id="start-section">
        <div class="back-drop">
            <div class="lose-message">Voce perdeu</div>
        </div>
        <div class="score">0</div>
        <div class="progress-bar">
            <span></span>
        </div>
        <div class="grid-container" id="board">
            <!-- <div class="box box-1" style="--delay: 0s">1</div>
            <div class="box box-2" style="--delay: .3s">2</div>
            <div class="box box-3" style="--delay: .6s">3</div>
            <div class="box box-4" style="--delay: .9s">4</div>
            <div class="box box-5" style="--delay: .12s">5</div>
            <div class="box box-6" style="--delay: .15s">6</div>
            <div class="box box-7" style="--delay: .18s">7</div> -->
        </div>
    </section>
</main>

<script>

    let loseBar = 0;
    let score = 0
    document.querySelector('.progress-bar span').style.width = loseBar * 10  +'%'
    const myInterval = setInterval(function(){

        box = document.createElement('div')

        box.classList.add('box')
        box.style.gridColumn = Math.floor(Math.random() * 4) + 1 + ' / span ' + Math.floor(Math.random() * 4) + 1
        box.style.gridRow =  Math.floor(Math.random() * 4) + 1 + ' / span ' + Math.floor(Math.random() * 4) + 1
        box.innerHTML = 'My Box'
        loseBar = loseBar + 1
        document.querySelector('.progress-bar span').style.width = loseBar * 10  +'%'

        box.addEventListener('click', (e) => {
            e.target.remove()
            
            loseBar = loseBar - 1
            document.querySelector('.progress-bar span').style.width = loseBar * 10  +'%'

            score = score + 1
            document.querySelector('.score').innerHTML = score
        })

        document.getElementById('board').appendChild(box)

        if((document.querySelectorAll('.box').length) == 10){
            clearInterval(myInterval)
            document.querySelector('.back-drop').style.display = 'block'
            document.getElementById('start-section').classList.add('lose')
        }

        
    if(loseBar > 5 && loseBar < 8){
        document.querySelector('.progress-bar span').style.backgroundColor = 'yellow'
    }else if(loseBar >= 8) {
        document.querySelector('.progress-bar span').style.backgroundColor = 'red'
    } else {
        document.querySelector('.progress-bar span').style.backgroundColor = 'green'    
    }


    }, 1000);


    const el = document.querySelectorAll('.box')
    el.forEach((i) => {
        i.addEventListener('click', (e) => {
            e.target.remove()
            loseBar = loseBar - 1
            document.querySelector('.progress-bar span').style.width = loseBar * 10  +'%'
            score = score + 1
            document.querySelector('.score').innerHTML = score
        })
    })

</script>
