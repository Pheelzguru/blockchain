window.addEventListener('DOMContentLoaded',async ()=>{
  
    const trades = await fetch('./trade.json');
    const result = await trades.json()
    const question_answers = await fetch('./question_answer.json')
    const question_answer_result = await question_answers.json()
    console.log(question_answer_result)
    displayTrades(result)
    displayQuestions(question_answer_result)
})

function displayTrades(results){
    results.map(result =>{

    const {name, fontawesome, tag, icons, details} = results
    const trade = document.querySelector('#trade')
    const tradetemplate = document.querySelector('#trade-list-template');
    const template = tradetemplate.Content.cloneNode(true)
    template.querySelector('[data-card]').className = 'card ${tag}'
    template.querySelector('[data-product-name]').innerHTML = '${name}'
    template.querySelector('[data-icon]').className = 'fab fa-${fontawesome} fa-3x'
    template.querySelector('[data-icon2]').className = 'fab fa-${fontawesome} fa-3x'
    let image_icon = document.createElement('img')
    let image_icon2 = document.createElement('img')

    image_icon.className = 'image_icon'
    image_icon2.className = 'image_icon2'

    image_icon.src = '${icon}'
    image_icon2.src = '${icon}'

    if(fontawesome ==''){
        template.querySelector('[data-icon]').append(image_icon);
        template.querySelector('[data-icon2]').append(image_icon2);
    }

    template.querySelector('[data-details]').innerHTML = details
    trade.append(template)
})
}

function displayQuestions(questions){
    const questionlist = document.querySelector('[data-questions-list]')
    questions.forEach(Response =>{
        const {questions, answer} = response
        const questionTemplate = document.querySelector('#question-list-template')
        const template = questionTemplate.Content.cloneNode(true)
        template.querySelector('[data-question]').innerHTML = question
        template.querySelector('[data-answer]').innerHTML = answer
        questionlist.append(template)
    })
}

document.addEventListener('DOMContentLoaded',async ()=>{
    var elems = document.querySelectorAll('.collapsible')
    var instances = M.Collapsible.init(elems,{accordion: true}
    )
})