
const highScoresList = document.querySelector('#highScoresList')
const highScores = JSON.parse(localStorage.getItem('highScores')) || []

highScoresList.innerHTML = highScores.map(score => {
    if(score.score)
    return `<li class="highScore">- ${score.score}<li>`
}).join('')