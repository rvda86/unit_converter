<main id="main">

    <div id="main-box" >

        <div id="unit-list-div">
            <ul id="unit-ul">
                <li class="unit-li" id="distance-li" onclick="showCategory('distance')">Distance</li>
                <li class="unit-li" id="area-li" onclick="showCategory('area')">Area</li>
                <li class="unit-li" id="volume-li" onclick="showCategory('volume')">Volume</li>
                <li class="unit-li" id="temperature-li" onclick="showCategory('temperature')">Temperature</li>
                <li class="unit-li" id="weight-li" onclick="showCategory('weight')">Weight</li>
            </ul>
        </div>

        <div id="unit-calc-div">

            <div>
                <p>From</p>
                <input id="from-amount" type="number" class="amount-input" placeholder="amount" type="text" onkeyup="getResult()" onchange="getResult()">
                <select class="unit-select" onchange="getResult()" name="from" id="from-unit"></select>
            </div>

            <div>
                <p>To</p>
                <input id="result" class="amount-input" placeholder="result" type="text" readonly>
                <select class="unit-select" onchange="getResult()" name="to" id="to-unit"></select>
            </div>  

        </div>
    </div>

</main>