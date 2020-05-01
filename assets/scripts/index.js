//This file will handle all of the JS code for my personal page.

//This function will get the data from the API and then return it.
function UserAction() {
    //Setting up to get the API request
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://teamtreehouse.com/michaelcuddy.json", false);
    xhr.send();
    //Setting up a variable to hold the response
    let response = xhr.response
    //parsing the response
    let response_parsed = JSON.parse(response);
    //Returning parsed response
    return response_parsed
}

//This function will create and display the div, h3, and image elements on the page as well as
//pull the data from the Treehouse API. (Yeah does a lot of things!)
function displayInfo(response_parsed){
  // console.log(response_parsed.badges);
  response_length = response_parsed.badges.length;
  for (let i = 0; i < response_length; i++) {

    //Getting the variable to get the main container that all the divs will sit in
    let main_parent = document.getElementById('badge_main_container');
    //Creating the container, text and image elements.
    let container = document.createElement('div');
    let text = document.createElement('h3');
    let image = document.createElement('img');

    //Setting an attribute for the div that will be holding the h3 and img elements.
    container.setAttribute('class', 'badge_area')

    //Setting the src and class attributes for the image
    image.setAttribute("src", response_parsed.badges[i].icon_url);
    image.setAttribute('class', 'image_area')
    //Appending the image to the container
    container.appendChild(image);

    //Getting the text information
    let newContent = document.createTextNode(response_parsed.badges[i].name);
    //Adding the text information
    text.appendChild(newContent);
    //Appending the container div to the main div
    main_parent.appendChild(container);
    //Appending the text to the image
    container.appendChild(text);
  }
}

//This is the main function for the program
function main() {
  response_parsed = UserAction();
  displayInfo(response_parsed);
}

//This fires the main function
window.onload = function(){
  main();
}
