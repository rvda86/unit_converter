let fromSelect = document.getElementById("from-unit")
let toSelect = document.getElementById("to-unit")
let amountInput = document.getElementById("from-amount")
let resultInput = document.getElementById("result")

function resetValues() {
    fromSelect.innerHTML = ''
    toSelect.innerHTML = ''
    amountInput.value = ''
    resultInput.value = ''
    Array.from(document.getElementById('unit-ul').children).forEach((item) => item.style.backgroundColor = "grey")
}

function showDistances() {
    resetValues()
    document.getElementById("distance-li").style.backgroundColor = "white"
    DISTANCES.forEach((unit) => fromSelect.innerHTML += `<option>${unit}</option>`)
    DISTANCES.forEach((unit) => toSelect.innerHTML += `<option>${unit}</option>`)
}

function showTemperatures() {
    resetValues()
    document.getElementById("temperature-li").style.backgroundColor = "white"
    TEMPERATURES.forEach((unit) => fromSelect.innerHTML += `<option>${unit}</option>`)
    TEMPERATURES.forEach((unit) => toSelect.innerHTML += `<option>${unit}</option>`)
}

showDistances()