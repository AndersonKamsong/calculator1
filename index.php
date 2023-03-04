<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form name="Calculator" class="calculator">
<table>   
    <tr>
        <td>
            <input type="text" name="Input" id="sr1">
            <br>
        </td>
    </tr> 
    <tr>
        <td>
            <input type="text" name="Input2" id="sr1">
            <br>
        </td>
    </tr> 
        <tr>
            <td>
            <input id="bt3" type="button" value="C" Onclick="Calculator.Input.value = ''">
            <input id="bt3" type="button" value="AC" Onclick="Calculator.Input2.value = ''">
            <input id="bt3" type="button" value="%" Onclick="Calculator.Input.value = eval(Calculator.Input.value /100)">
            <input id="bt2" type="button" value="/" Onclick="Calculator.Input.value += '/'">
            <br>
            <input id="bt1" type="button" value="7" Onclick="Calculator.Input.value += '7'">
            <input id="bt1" type="button" value="8" Onclick="Calculator.Input.value += '8'">
            <input id="bt1" type="button" value="9" Onclick="Calculator.Input.value += '9'">
            <input id="bt2" type="button" value="*" Onclick="Calculator.Input.value += '*'">
            <br>
            <input id="bt1" type="button" value="4" Onclick="Calculator.Input.value += '4'">
            <input id="bt1" type="button" value="5" Onclick="Calculator.Input.value += '5'">
            <input id="bt1" type="button" value="6" Onclick="Calculator.Input.value += '6'">
            <input id="bt2" type="button" value="-" Onclick="Calculator.Input.value += '-'">
            <br>
            <input id="bt1" type="button" value="1" Onclick="Calculator.Input.value += '1'">
            <input id="bt1" type="button" value="2" Onclick="Calculator.Input.value += '2'">
            <input id="bt1" type="button" value="3" Onclick="Calculator.Input.value += '3'">
            <input id="bt2" type="button" value="+" Onclick="Calculator.Input.value += '+'">
            <br>
            <input id="bt4" type="button" value="0" Onclick="Calculator.Input.value += '0'">
            <input id="bt1" type="button" value="." Onclick="Calculator.Input.value += '.'">
            <input id="bt2" type="button" value="=" Onclick="Calculator.Input2.value = eval(Calculator.Input.value)">
            <br>
            </td>
</tr>    
</table>    
</form>  
<div>
    <p>Design by kamsong Gaton Anderson</p>
</div> 
</body>
</html>
