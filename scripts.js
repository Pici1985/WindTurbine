
function calculate(){                                   // declaring function for check button

    var ul = document.createElement("ul");              // creating a ul element and setting it to a ul variable
    document.getElementById('list').appendChild(ul);    // appending ul to the a div called list 
    ul.classList.add('list-wrp');                       // adding a class property to the ul element
    ul.setAttribute('id', 'note');                      // adding an id property to the ul element

    $.ajax({url:"calc.php",success:function(result)     // doing an ajax call with jQuery to the calc.php file, 
        {                                               // catching the output result in a function
            $("ul").append(result);                     // appending the result to a ul element
        }
    })
}

function reset() {                                      // declaring function for reset button   
    var item = document.getElementById('note');         // getting an element from the DOM with the id of note 
                                                        // and setting it to a var
    item.remove();                                      // deleting it.       
}