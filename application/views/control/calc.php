<?php
/**
 * Created by PhpStorm.
 * User: GaoComet
 * Date: 12/20/2017
 * Time: 8:14 PM
 */
?>
<style>
    input[type="number"]::-webkit-inner-spin-button{
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<div class="container" style="padding-top: 3%;">
    <h2 style="text-align: center; padding-bottom: 2%; font-family: 'Times New Roman'">Flight Time Calculator</h2>
    <div class="col-md-5">
        <div class="row" style="background-color: #3486b6; text-align: center;">
            <div class="col-md-6"><h4 style="color: white;">Distance(Km)</h4></div>
            <div class="col-md-6"><h4 style="color: white;">Distance(Nmi)</h4></div>
        </div>
        <div class="row">
            <input type="number" id="dcalc-km-01" step="any" onchange="d_calculator1()" style="background-color: lightyellow; width: 50%; padding: 0 0 0 3%; margin-right: -1%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
            <input type="number" id="dcalc-nmi-01" step="any" readonly style="background-color: lightgray; width: 50%; padding: 0 0 0 3%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
        </div>
        <div class="row" style="background-color: #3486b6; text-align: center;">
            <div class="col-md-6"><h4 style="color: white;">Speed(KT)</h4></div>
            <div class="col-md-6"><h4 style="color: white;">Flying Time</h4></div>
        </div>
        <div class="row">
            <input type="number" id="speed-01" step="any" onchange="d_calculator1()" style="background-color: lightyellow; width: 50%; padding: 0 0 0 3%; margin-right: -1%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
            <input type="text" id="flying-time-01" readonly style="background-color: lightgray; width: 50%; padding: 0 0 0 3%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <div class="row" style="background-color: #7cc7e6; text-align: center;">
            <div class="row" style="background-color: #3486b6; text-align: center;">
                <div class="col-md-6"><h4 style="color: white;">Distance(Nmi)</h4></div>
                <div class="col-md-6"><h4 style="color: white;">Distance(Km)</h4></div>
            </div>
            <div class="row">
                <input type="number" id="dcalc-nmi-02" step="any" onchange="d_calculator2()" style="background-color: lightyellow; width: 50%; padding: 0 0 0 3%; margin-right: -1%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
                <input type="number" id="dcalc-km-02" step="any" readonly style="background-color: lightgray; width: 50%; padding: 0 0 0 3%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
            </div>
            <div class="row" style="background-color: #3486b6; text-align: center;">
                <div class="col-md-6"><h4 style="color: white;">Speed(KT)</h4></div>
                <div class="col-md-6"><h4 style="color: white;">Flying Time</h4></div>
            </div>
            <div class="row">
                <input type="number" id="speed-02" step="any" onchange="d_calculator2()" style="background-color: lightyellow; width: 50%; padding: 0 0 0 3%; margin-right: -1%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
                <input type="text" id="flying-time-02" readonly style="background-color: lightgray; width: 50%; padding: 0 0 0 3%; height: 50px; border-style: solid; border-width: 2px; font-size: 30px; text-align: center;">
            </div>
        </div>
    </div>
</div>
<div class="calculator-table" style="margin-top: 3%; padding-left: 2%;padding-bottom: 5%;">
    <div class="row" style="height: 40px; width: 100%;">
        <div class="col-md-6 calc-table-line1">Input Data</div>
        <div class="col-md-6 calc-table-line1">Output Data</div>
    </div>
    <div class="row" style="height: 40px; width: 100%;">
        <div class="col-md-6 calc-table-line1">
            <div class="col-md-3"></div>
            <div class="col-md-3">Degress(&deg;)</div>
            <div class="col-md-3">Minutes(')</div>
            <div class="col-md-3">Seconds(")</div>
        </div>
        <div class="col-md-6 calc-table-line1">
            <div class="col-md-4" style="text-align: center;">Decimal Degrees</div>
            <div class="col-md-8" style="text-align: center;">Degrees & Decimal Minutes</div>
        </div>
    </div>
    <div class="row" style="height: 40px; width: 100%; padding: 0;">
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0;">
            <div class="col-md-2 calc-table-line2" style="background-color: #3486b6;">latitude</div>
            <div class="col-md-1 calc-table-line2" style="height100%;padding:0;">
                <input type="text" id="lat-01" onchange="latitude1()" style="background-color: lightgray;width: 100%; height: 100%; text-align: center;" value="N">
            </div>
            <div class="col-md-3 calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="lat-deg-01" onchange="latitude1()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0">
            </div>
            <div class="col-md-3 calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="lat-min-01" onchange="latitude1()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0">
            </div>
            <div class="col-md-3 calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="lat-sec-01" onchange="latitude1()" step="any" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0.000">
            </div>
        </div>
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0; background-color: lightyellow">
            <div class="col-md-4  calc-table-line2" id="decimal-01" style="background-color: lightgray">0.0000000</div>
            <div class="col-md-4  calc-table-line2" id="decimal-02" style="background-color: lightgray">0.0000000</div>
            <div class="col-md-4  calc-table-line2" id="decimal-03" style="background-color: lightgray">0.0000000</div>
        </div>
    </div>
    <div class="row" style="height: 40px; width: 100%; padding: 0;">
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0;">
            <div class="col-md-2 calc-table-line2" style="background-color: #3486b6;">longitude</div>
            <div class="col-md-1 calc-table-line2" style="height100%;padding:0;">
                <input type="text" id="long-01" onchange="longitude1()" style="background-color: lightgray;width: 100%; height: 100%; text-align: center;" value="E">
            </div>
            <div class="col-md-3 calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="long-deg-01" onchange="longitude1()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0">
            </div>
            <div class="col-md-3 calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="long-min-01" onchange="longitude1()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0">
            </div>
            <div class="col-md-3 calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="long-sec-01" onchange="longitude1()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0.000">
            </div>
        </div>
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0; background-color: lightyellow">
            <div class="col-md-4  calc-table-line2" id="decimal-11" style="background-color: lightgray">0.0000000</div>
            <div class="col-md-4  calc-table-line2" id="decimal-12" style="background-color: lightgray">0.0000000</div>
            <div class="col-md-4  calc-table-line2" id="decimal-13" style="background-color: lightgray">0.0000000</div>
        </div>
    </div>
</div>
<div class="calculator-table" style="padding-left: 2%;padding-bottom: 5%;">
    <div class="row" style="height: 40px; width: 100%;">
        <div class="col-md-6 calc-table-line1">Output Data</div>
        <div class="col-md-6 calc-table-line1">
            <div class="col-md-4">Input Data</div>
            <div class="col-md-8">Output Data</div>
        </div>
    </div>
    <div class="row" style="height: 40px; width: 100%;">
        <div class="col-md-6 calc-table-line1">
            <div class="col-md-3"></div>
            <div class="col-md-3">Degress(&deg;)</div>
            <div class="col-md-3">Minutes(')</div>
            <div class="col-md-3">Seconds(")</div>
        </div>
        <div class="col-md-6 calc-table-line1">
            <div class="col-md-4" style="text-align: center;">Decimal Degrees</div>
            <div class="col-md-8" style="text-align: center;">Degrees & Decimal Minutes</div>
        </div>
    </div>
    <div class="row" style="height: 40px; width: 100%; padding: 0;">
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0;">
            <div class="col-md-2 calc-table-line2" style="background-color: #3486b6;">latitude</div>
            <div class="col-md-1 calc-table-line2" id="lat-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">S/N</div>
            <div class="col-md-3 calc-table-line2" id="lat-deg-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">0</div>
            <div class="col-md-3 calc-table-line2" id="lat-min-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">0</div>
            <div class="col-md-3 calc-table-line2" id="lat-sec-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">0.000</div>
        </div>
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0; background-color: lightyellow">
            <div class="col-md-4  calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="decimal-21" step="any" onchange="latitude2()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0.0000000">
            </div>
            <div class="col-md-4  calc-table-line2" id="decimal-22" style="background-color: lightgray">0.0000000</div>
            <div class="col-md-4  calc-table-line2" id="decimal-23" style="background-color: lightgray">0.0000000</div>
        </div>
    </div>
    <div class="row" style="height: 40px; width: 100%; padding: 0;">
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0;">
            <div class="col-md-2 calc-table-line2" style="background-color: #3486b6;">longitude</div>
            <div class="col-md-1 calc-table-line2" id="long-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">W/E</div>
            <div class="col-md-3 calc-table-line2" id="long-deg-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">0</div>
            <div class="col-md-3 calc-table-line2" id="long-min-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">0</div>
            <div class="col-md-3 calc-table-line2" id="long-sec-02" style="background-color:lightgray;height100%;padding:8px 0 0 0;">0.000</div>
        </div>
        <div class="col-md-6" style="height: 100%; padding-left: 0; padding-right: 0; background-color: lightyellow">
            <div class="col-md-4  calc-table-line2" style="height: 100%; padding: 0;">
                <input type="number" id="decimal-31" step="any" onchange="longitude2()" style="background-color:lightyellow; width: 100%; height: 100%; text-align: center;" value="0.0000000">
            </div>
            <div class="col-md-4  calc-table-line2" id="decimal-32" style="background-color: lightgray">0.0000000</div>
            <div class="col-md-4  calc-table-line2" id="decimal-33" style="background-color: lightgray">0.0000000</div>
        </div>
    </div>
</div>