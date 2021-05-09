# Wind Turbine damage checker. 

Thoughtprocess of building the app:

  - first I created the damageCalc() function in php wich would simply echo the results
  - created the html scaffolding around it 
  - pulled in jQuery and my own stylesheet to be able to do the ajax call and add styles 
  - attached the .js file with the calculate() function and moved the damageCalc() function to a separate file
  - updated the output of damageCalc() to echo a list item with a span element inside as well so that $serialNR can be styled separately
  - added some more functionality to the calculate() function in .js so that it gives a class and an id to the ul element so that it`s easier to style and delete   
  - added the reset button to the application so that the list with the results could be easily deleted 

Update ideas: 

  - the design of the app should be improved az it`s not fully resposive
  - there could be a checkbox on each list item individually wich would on check delete the line if theres no damage to only keep the damaged ones 
  - updated list data could be turned to a JSON array which contains the serial nr and the damage type and sent to the repair team 
   

     
