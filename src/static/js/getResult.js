function getResult() {
    let resultInput = document.getElementById('result')
    let amount = document.getElementById('from-amount').value
    let fromUnit = document.getElementById('from-unit').value
    let toUnit = document.getElementById('to-unit').value

    if (amount.length == 0) {
        resultInput.value = ''
    } else {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                resultInput.value = this.responseText
                document.getElementById('result-test').innerHTML = this.responseText
            }
        }
        xmlhttp.open("GET", `controller.php?amount=${amount}&from=${fromUnit}&to=${toUnit}`, true)
        xmlhttp.send()
    }
}