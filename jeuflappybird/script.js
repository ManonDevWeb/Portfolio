const canvasbird = document.getElementById("canvasbird");
const ctx = canvasbird.getContext("2d");
const img = new Image();
img.src = './media/flappy-bird-set.png';

// REGLAGES GENERAL

let gamePlaying = false    //pour savoir si on met l'écran d acceuil
const gravity = .5;
const speed = 6.2;
const size = [51, 36];   // taille de l'oiseau
const jump = -11.5;
const cTenth = (canvasbird.width / 10);

// réglages des tuyaux
const pipeWidth = 78;
const pipeGap = 270;
const pipeLoc = () => (Math.random() * ((canvasbird.height - (pipeGap + pipeWidth)) - pipeWidth)) + pipeWidth;

let index = 0;   // permet de faire un effet d'optique
let bestScore = 0;
let currentScore = 0;
let pipes = [];
let flight;
let flyHeight;

const setup = () => {
    currentScore = 0;
    flight = jump;
    flyHeight = (canvasbird.height / 2) - (size [1] / 2);  // centrer l'oiseau au debut du jeu

    pipes = Array(3).fill().map((a, i) => [canvasbird.width + (i * (pipeGap + pipeWidth)), pipeLoc()]);

}

const render = () => {
    index++;
    // Background première partie
    ctx.drawImage(img, 0, 0, canvasbird.width, canvasbird.height, -((index * (speed / 2)) % canvasbird.width) + canvasbird.width, 0, canvasbird.width, canvasbird.height);

    // Background seconde partie
    ctx.drawImage(img, 0, 0, canvasbird.width, canvasbird.height, -((index * (speed / 2)) % canvasbird.width), 0, canvasbird.width, canvasbird.height);

    // oiseau
    if (gamePlaying) {   //quand on clique gameplaying sur le jeu == true
        ctx.drawImage(img, 432, Math.floor((index %9) / 3 ) * size[1], ...size, cTenth, flyHeight, ...size);
        flight += gravity;
        flyHeight = Math.min(flyHeight + flight, canvasbird.height -size[1]);

    } else {   // ecran d'acceuil avant jeu
    ctx.drawImage(img, 432, Math.floor((index %9) / 3 ) * size[1], ...size, ((canvasbird.width / 2) - size [0] / 2), flyHeight, ...size);
    flyHeight = (canvasbird.height / 2) - (size[1]/2);
    // texte accueil
    ctx.fillText(`Meilleur score : ${bestScore}`, 55, 245);
    ctx.fillText(`Clique pour jouer`,48, 535);
    ctx.font = "bold 30px courier";
    }

    //Affichage des tuyaux
    if (gamePlaying) {
        pipes.map(pipe => {
          pipe[0] -= speed;
          
          //Tuyau du haut
          ctx.drawImage(img, 432, 588 - pipe[1], pipeWidth, pipe[1], pipe[0], 0, pipeWidth, pipe[1]);
          //Tuyau du bas
            ctx.drawImage(img, 432 + pipeWidth, 108, pipeWidth, canvasbird.height - pipe[1] + pipeGap, pipe[0], pipe[1] + pipeGap, pipeWidth, canvasbird.height - pipe[1] + pipeGap);

            if(pipe[0] <= -pipeWidth) {
                currentScore++;
                bestScore = Math.max(bestScore, currentScore);

            // supprimer les tuyaux et en creer des nouveaux
                pipes = [...pipes.slice(1), [pipes[pipes.length-1][0] +pipeGap + pipeWidth, pipeLoc()]];
            }

            // Fin de partie si on tape le tuyaux
            if ([
                pipe[0] <= cTenth + size[0],
                pipe[0] + pipeWidth >= cTenth, 
                pipe[1] > flyHeight || pipe [1] + pipeGap < flyHeight + size [1]
            ].every(elem => elem)) {
                gamePlaying = false;
                setup ()
            }
        })

    }

    document.getElementById('bestScore').innerHTML = `Meilleur : ${bestScore}`;
    document.getElementById('currentScore').innerHTML = `Actuel : ${currentScore}`;

    
    window.requestAnimationFrame(render);
}

setup();
img.onload = render;
document.addEventListener ('click', () => gamePlaying = true);
window.onclick = () => flight = jump;