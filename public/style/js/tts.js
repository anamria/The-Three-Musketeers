//Globals
var currentTextInput;
var puzzelArrayData;

//Loads the Crossword
function initializeScreen(){
    var puzzelTable = document.getElementById("puzzel");
    puzzelArrayData = preparePuzzelArray();
    for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
    var row = puzzelTable.insertRow(-1);
    var rowData = puzzelArrayData[i];
    for(var j = 0 ; j < rowData.length ; j++){
        var cell = row.insertCell(-1);
        if(rowData[j] != 0){
        var txtID = String('txt' + '_' + i + '_' + j);
        cell.innerHTML = '<input type="text" class="inputBox" maxlength="1" style="text-transform: lowercase" ' + 'id="' + txtID + '" onfocus="textInputFocus(' + "'" + txtID + "'"+ ')">';
        }else{
        cell.style.backgroundColor  = "orangered";
        }
    }
    }
    addHint();
}

//Adds the hint numbers
function addHint(){
    document.getElementById("txt_1_3").placeholder = "1";
    document.getElementById("txt_3_7").placeholder = "2";
    document.getElementById("txt_4_2").placeholder = "3";
    document.getElementById("txt_4_10").placeholder = "4";
    document.getElementById("txt_7_3").placeholder = "5";
    document.getElementById("txt_10_6").placeholder = "6";
}

//Stores ID of the selected cell into currentTextInput
function textInputFocus(txtID123){
    currentTextInput = txtID123;
}

//Returns Array
function preparePuzzelArray(){
var items = [[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 'n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 'a', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 'g', 0, 0, 0, 'd', 0, 0, 0, 0, 0, 0],
            [0, 0, 's', 'a', 's', 'i', 'r', 'a', 'n', 'g', 'a', 'n', 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 'u', 0, 0, 'l', 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 'n', 0, 0, 'o', 0, 0, 0],
            [0, 0, 0, 'k', 'e', 'r', 'i', 's', 0, 0, 'k', 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 'i', 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 'r', 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0,'h', 'i', 'a', 's', 'a', 'n', 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 'h', 0, 0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
            ];
    return items;
}

//Button ulang
function clearAllClicked(){
    currentTextInput = '';
    var puzzelTable = document.getElementById("puzzel");
    puzzelTable.innerHTML = '';
    initializeScreen();

}
//Button cek jawaban
function checkClicked(){
    for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
        var rowData = puzzelArrayData[i];
        for(var j = 0 ; j < rowData.length ; j++){
            if(rowData[j] != 0){
                var selectedInputTextElement = document.getElementById('txt' + '_' + i + '_' + j);
                if(selectedInputTextElement.value != puzzelArrayData[i][j]){
                    selectedInputTextElement.style.backgroundColor = 'red';
                    
                }else{
                    selectedInputTextElement.style.backgroundColor = 'white';
                }
            }
        }
    }
}

//button petunjuk
function clueClicked(){
    if (currentTextInput != null){
        var temp1 = currentTextInput;
        var token = temp1.split("_");
        var row = token[1];
        var column = token[2];
        document.getElementById(temp1).value = puzzelArrayData[row][column];
        //checkClicked();
    }
}

//button kunci jawaban
function solveClicked(){
    if (currentTextInput != null){
        var temp1 = currentTextInput;
        var token = temp1.split("_");
        var row = token[1];
        var column = token[2];
    
        // Print elements on top
        for(j = row; j >= 0; j--){
            if(puzzelArrayData[j][column] != 0){
            document.getElementById('txt' + '_' + j + '_' + column).value = puzzelArrayData[j][column];
            }else break;
        }
        // Print elements on right
        for(i = column; i< puzzelArrayData[row].length; i++){
            if(puzzelArrayData[row][i] != 0){
            document.getElementById('txt' + '_' + row + '_' + i).value = puzzelArrayData[row][i];
            }else break;
        }
        
        // Print elements below
        for(m = row; m< puzzelArrayData.length; m++){
            if(puzzelArrayData[m][column] != 0){
            document.getElementById('txt' + '_' + m + '_' + column).value = puzzelArrayData[m][column];
            }else break;
        }
        // Print elements on left
        for(k = column; k >= 0; k--){
            if(puzzelArrayData[row][k] != 0){
            document.getElementById('txt' + '_' + row + '_' + k).value = puzzelArrayData[row][k];
            }else break;
        }
    }
}