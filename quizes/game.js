const Question = document.querySelector('#question');
const Choices = Array.from(document.querySelectorAll('.choiceText'));
const progressText= document.querySelector('#progressText');
const scoreText = document.querySelector('#score');
const progressbarFull = document.querySelector('#progressbarFull');

let currentQuestion = {};
let acceptingAnswers = true;
let score = 0;
let questionsCounter = 0;
let availableQuestions = {}
let questions = [
    {
        questions: "what is 2 + 2",
        choice1: '2',
        choice2: '4',
        choice3: '5',
        choice4: '3',
        answer:2,
    },
    {
        questions: "what is 12 - 4",
        choice1: '2',
        choice2: '8',
        choice3: '5',
        choice4: '3',
        answer:2,
    },
    {
        questions: "what is 10 + 6",
        choice1: '16',
        choice2: '33',
        choice3: '22',
        choice4: '10',
        answer:1,
    }
    
]


const SCORE_POINTS = 100;
const MAX_QUESTIONS = 4;

startGame = () => {
    questionsCounter = 0;
    score = 0;
    availableQuestions = [...questions];
    getNewQuestion()
}


getNewQuestion = () => {
    if (availableQuestions.length === 0 || questionsCounter > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score);

        return window.location.assign('/class-cloud-repo/quizes/end.html');
    }

    questionsCounter++;
    progressText.innerText =`Question ${questionsCounter} of ${MAX_QUESTIONS}`;
    progressbarFull.style.width = `${(questionsCounter / MAX_QUESTIONS) * 100}%`;


    const questionsIndex = Math.floor(Math.random() * availableQuestions.length);
    currentQuestion = availableQuestions[questionsIndex];
    Question.innerText = currentQuestion.questions;
    Choices.forEach(choice => {
        const number = choice.dataset['number'];
        choice.innerText = currentQuestion['choice' + number]
    })

    availableQuestions.splice(questionsIndex, 1);
    acceptingAnswers = true;
}


Choices.forEach(choice => {
    choice.addEventListener('click', e => {
        if (!acceptingAnswers) return;

        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];

        let classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';

        if (classToApply == 'correct') {
            incrementScore(SCORE_POINTS);
        }
       

       //selectedChoice.parentElement.classList.add(classToApply);
        
       if(classToApply == 'incorrect')
       selectedChoice.parentElement.style.background = "red";
       else 
            selectedChoice.parentElement.style.background = "green";
        
        
        setTimeout(() => {
                selectedChoice.parentElement.style.backgroundColor = 'rgb(' + 18 + ',' + 93 + ',' + 255 + ')';
                getNewQuestion()
            },1000
        )


    })
})

incrementScore = num => {
    score += num;
    console.log(score);
    scoreText.innerText = score;
}

startGame()