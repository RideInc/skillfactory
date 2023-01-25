let text = 'Это срабатывает JS'

console.log('connection')
let div = document.createElement('div')
div.innerHTML = `<span id=\"unique\">${text}</span>`
let unique_p = document.getElementById('unique_p')
document.body.insertBefore(div, unique_p)
