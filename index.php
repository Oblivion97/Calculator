<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>calculator</title>

        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <div class="calculator_back">
            
                <div class="calculator">

                  <div class="operationScreen">
                      <div class="operationscreen2">
                          25 + 25.6 + 40 + 10 +
                      </div>
                      <div class="operationscreen1">
                          100.6
                      </div>
                      
                  </div>
                      
                  
                  <div class="calculator-keys">

                    <div class="row1">
                        <button type="button" class="percentage" value="%">&#37;</button>
                        <button type="button" class="pluseminuse" value="+/-">+/-</button>
                        <button type="button" class="all-clear" value="all-clear">C</button>
                        <button type="button" class="divider" value="/">&divide;</button>
                    </div>

                    <div>
                        <button type="button" class="seven" value="7">7</button>
                        <button type="button" class="eight" value="8">8</button>
                        <button type="button" class="nine" value="9">9</button>
                        <button type="button" class="multiplier" value="*">&times;</button>    
                    </div>

                    
                    <div>
                        <button type="button" class="four" value="4">4</button>
                        <button type="button" class="five" value="5">5</button>
                        <button type="button" class="six" value="6">6</button>
                        <button type="button" class="minus" value="-">-</button>
                    </div>
                    
                    <div>
                        <button type="button" class="one" value="1">1</button>
                        <button type="button" class="two" value="2">2</button>
                        <button type="button" class="three" value="3">3</button>
                        <button type="button" class="pluse" value="+">+</button>    
                    </div>
                                        
                    <div>
                        <button type="button" class="zero" value="0">0</button>
                        <button type="button" class="comma" value=".">&#44</button>
                        <button type="button" class="equal-sign" value="=">=</button>
                    </div>
                    
                  </div>
                </div>
            
        </div>
    </body>
</html>
<!-- Created By: H. M Mahmudul Hasan -->