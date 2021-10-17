// Javascript code for addEntry.php
//
var form = document.getElementById('form');
var titleBox = document.getElementById('titleBox');
var textBox = document.getElementById('textBox');

var previewCount = 0;

// Event processing for addEntry.php Clear button
//
form.addEventListener('reset', (e)=>{
    var response = window.confirm('Are you sure you want to clear the fields?');

    if(response == false){
        e.preventDefault();
    }
});

// Event processing for Submit button
//
var submitButton = document.getElementById('postButton');
submitButton.addEventListener("click", resetPreview);

function resetPreview(){
    previewCount = 0;
}

form.addEventListener('submit', (e)=>{
    var error = 0;

    if(titleBox.value === '' || titleBox.value == null){
        error += 1;
        titleBox.className = titleBox.className + " error";
    }
    else{
        titleBox.className = titleBox.className.replace(" error","");
    }


    if(textBox.value === '' || textBox.value == null){
        error +=1;
        textBox.className = textBox.className + " error";
    }
    else{
        textBox.className = textBox.className.replace(" error", "");
    }

    if(error>0){
        e.preventDefault();
        window.alert("You cannot submit while leaving any fields empty!");
    }
    if(previewCount >0){
        e.preventDefault();
    }


});



//Code for Preview and confirmation
//
var previewButton = document.getElementById('previewButton');

previewButton.addEventListener("click", previewFunc);

function previewFunc(){
    var error = 0;

    if(titleBox.value === '' || titleBox.value == null){
        titleBox.className = titleBox.className + " error";
        error += 1;
    }
    else{
        titleBox.className = titleBox.className.replace(" error","");
    }


    if(textBox.value === '' || textBox.value == null){
        textBox.className = textBox.className + " error";
        error += 1;
    }
    else{
        textBox.className = textBox.className.replace(" error", "");
    }

    var conf = window.confirm("Click 𝐎𝐊 to post the blog, or 𝐂𝐚𝐧𝐜𝐞𝐥 to review your blog:: 𝐓𝐢𝐭𝐥𝐞: "+titleBox.value +" 𝐓𝐞𝐱𝐭: "+textBox.value);
    previewCount=1;

    if (conf && error == 0){
        form.submit();
    }

    if(error>0 && conf){
        window.alert("You cannot submit while leaving any fields empty!");
    }
}


// End of addEntry.js