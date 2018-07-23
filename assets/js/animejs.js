

let firstRotate = anime({
    targets: '#circleAnim .first',
    rotate: '1turn',
    duration: 30000,
    loop: true,
    easing: 'linear',
});

// let secondRotate = anime({
//     targets: '#circleAnim .second',
//     rotate: '1turn',
//     duration: 15000,
//     loop: true,
//     direction: 'reverse',
//     easing: 'linear',
// });

let firstRotateReverse = anime({
    targets: '#circleAnim2 .first',
    rotate: '1turn',
    duration: 30000,
    loop: true,
    easing: 'linear',
    direction: 'reverse',
});

// let secondRotateReverse = anime({
//     targets: '#circleAnim2 .second',
//     rotate: '1turn',
//     duration: 15000,
//     loop: true,
//     easing: 'linear',
// });




const eventSkills = () => {

    const tabSkill = [

        {skill:"Html", value: 88, colorValue: '49%'},
        {skill:"Css", value:89, colorValue: '50%'},
        {skill:"Php", value:72, colorValue: '43%'},
        {skill:"WordPress", value:70, colorValue: '42%'},
        {skill: "Sql", value:61, colorValue: '35%'},
        {skill:"JavaScript", value: 74, colorValue: '43%'},
        {skill:"JQuery", value:65, colorValue: '38%'},
        {skill: "ReactJs", value:59, colorValue: '34%'}

    ]
    

    for (let i = 0; i < tabSkill.length; i++){
    
        let  = anime({

            delay: 1800,
            targets: '#skill'+tabSkill[i].skill + ' input',
            value: tabSkill[i].skill + ' : ' + tabSkill[i].value + ' %',
            round: 1,
            easing: 'easeOutQuad',
            duration: 8000,
            borderColor: [{
                    value: 'hsl(102, 89%, 79%)'
                },
                {
                    value: 'hsl(102, 89%, '+tabSkill[i].colorValue+')'
                }
            ],
            color: [{
                    value: 'hsl(102, 89%, 79%)'
                },
                {
                    value: 'hsl(102, 89%, '+tabSkill[i].colorValue+')'
                }
            ],
        });
    
    }
}