console.log('%c Why me and not someone else ?', 'background: #222; color: red')
console.log("%c you are looking for one web dev and I'm the perfect mix between your 'prerequisites' and what I can get from you", 'background: #222; color: yellow ')
console.log('%c See my code here : https://github.com/leersmathieu/internshipRequest', 'background: #222; color: green')

window.onbeforeunload = () => {
    window.scrollTo(0,0)
}

window.onload = () => { 

    // creation des buttons 'Next bloc' en js

    let page = document.querySelector('#page')
    let centerDiv = document.querySelectorAll('.centerDiv')

    let form = document.querySelector('form .centerDIv')
    
    let button = document.createElement('button')
    button.innerText='Why this site ?'
    button.addEventListener('click', next)
    centerDiv[0].appendChild(button)
    
    button = document.createElement('button')
    button.innerText = 'Why me ?'
    button.addEventListener('click', next)
    centerDiv[1].appendChild(button)

    button = document.createElement('button')
    button.innerText = 'My skills'
    button.setAttribute('id','eventSkills')
    button.addEventListener('click', next)
    button.addEventListener('click', eventSkills)
    centerDiv[2].appendChild(button)

    button = document.createElement('button')
    button.innerText = 'Contact'
    button.addEventListener('click', next)
    centerDiv[3].appendChild(button)

    button = document.createElement('button')
    button.innerText = 'Return'
    button.addEventListener('click', returnTop)
    centerDiv[5].appendChild(button)
    
}

let html = document.documentElement

const constantHeight = window.innerHeight
let screenHeight = constantHeight

// scrolling animation

const next = () => { 

    TweenLite.to(window,2,{scrollTo:screenHeight})
    screenHeight = screenHeight + constantHeight 
    
}

const returnTop = () => {
    
    TweenLite.to(window,2,{scrollTo:0})
    
    screenHeight = 0
    screenHeight = screenHeight + constantHeight
    
}



