<main id="main">

    <div class="main-box" >

        <div id="unit-list-div">
            <ul id="unit-ul">
                <li class="unit-li" id="distance-li" onclick="showCategory('distance')">Distance</li>
                <li class="unit-li" id="area-li" onclick="showCategory('area')">Area</li>
                <li class="unit-li" id="volume-li" onclick="">Volume</li>
                <li class="unit-li" id="temperature-li" onclick="showCategory('temperature')">Temperature</li>
                <li class="unit-li" id="weight-li" onclick="">Weight</li>
            </ul>
        </div>

        <div id="unit-calc-div">

            <div>
                <p>From</p>
                <input id="from-amount" class="amount-input" placeholder="amount" type="text" onkeyup="getResult()">
                <select class="unit-select" onclick="getResult()" name="from" id="from-unit"></select>
            </div>

            <div>
                <p>To</p>
                <input id="result" class="amount-input" placeholder="result" type="text" readonly>
                <select class="unit-select" onclick="getResult()" name="to" id="to-unit"></select>
            </div>  

        </div>
    </div>

</main>