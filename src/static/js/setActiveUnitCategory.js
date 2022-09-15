let fromSelect = document.getElementById("from-unit")
let toSelect = document.getElementById("to-unit")
let amountInput = document.getElementById("from-amount")
let resultInput = document.getElementById("result")

function resetValues() {
    fromSelect.innerHTML = ''
    toSelect.innerHTML = ''
    amountInput.value = ''
    resultInput.value = ''
    Array.from(document.getElementById('unit-ul').children).forEach((item) => item.style.backgroundColor = "rgb(218, 218, 218)")
}

constantsArrays = {"distance": DISTANCES, "area": AREAS, "volume": VOLUMES, "weight": WEIGHTS, "temperature": TEMPERATURES}

function showCategory(category) {
    resetValues()
    document.getElementById(`${category}-li`).style.backgroundColor = "white"
    constantsArrays[category].forEach((unit) => fromSelect.innerHTML += `<option>${unit}</option>`)
    constantsArrays[category].forEach((unit) => toSelect.innerHTML += `<option>${unit}</option>`)
}

// default category
showCategory("distance")