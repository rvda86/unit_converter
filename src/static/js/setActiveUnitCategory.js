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

function showAreas() {
    resetValues()
    document.getElementById("area-li").style.backgroundColor = "white"
    AREAS.forEach((unit) => fromSelect.innerHTML += `<option>${unit}</option>`)
    AREAS.forEach((unit) => toSelect.innerHTML += `<option>${unit}</option>`)
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

constantsArrays = {"distance": DISTANCES, "area": AREAS, "temperature": TEMPERATURES}

function showCategory(category) {
    resetValues()
    document.getElementById(`${category}-li`).style.backgroundColor = "white"
    constantsArrays[category].forEach((unit) => fromSelect.innerHTML += `<option>${unit}</option>`)
    constantsArrays[category].forEach((unit) => toSelect.innerHTML += `<option>${unit}</option>`)
}

// default category
showCategory("distance")