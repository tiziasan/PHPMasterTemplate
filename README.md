# PHPMasterTemplate
## Introduction
**PHPMasterTemplate** helps the developers in creating a web application using already existing components. In addition, the developers can customize a single component or create a new one from an existing component.

## Setup and Installation
In order to use the **PHPMasterTemplate** library, developers must download it from this GitHub repository and insert it into their project. After that, based on the components they want to use, they can import the individual components into their PHP scripts and use them both individually and with other components.

## Components
The components that the library provides are:

- **NEWS** 

News it is a card that allows you to insert news into the Web Application. It is a component that takes as input the following parameters in order as they are written: title, description, button name, button url and category.

```PHP
 function insertNews($title, $description, $btnName,$btnURL,$category,$imgURL)
```
<p align="center">
<img width="518" src="docs/news.png">
</p>

- **DIV2COL**

Div2Col allows you to create a div with 2 columns and already have a pre-set and responsive page formatting, so the developer does not have to worry about anything. All types of components that already exist or those that the developer creates can be inserted inside the div. It takes as input parameters the components that want to be inserted inside the columns. in this case two components.

```PHP
function setTwoColumnDiv($object1, $object2)
```
Below we find all components similar to the one above, but with the number of different columns and the parameters that it takes as input.

-**DIV1COL**

```PHP
function setOneColumnDiv($object1)
```
- **DIV3COL**

```PHP
function setThreeColumnDiv($object1, $object2, $object3)
```
- **DIV4COL**

```PHP
function setFourColumnDiv($object1, $object2, $object3, $object4)
```

- **DIV5COL**

```PHP
function setFiveColumnDiv($object1, $object2, $object3, $object4, $object5)
```

- **DIV6COL**
```PHP
function setSixColumnDiv($object1, $object2, $object3,$object4, $object5, $object6)
```

- **FOOTER**

The Footer component allows you to add a footer to the page.
we created two types of footers:
   - footer it is possible to insert a title, an address, a telephone number, an email, a link to the email, and a         description.
   - footer 2 it is possible to insert a various sections with specific links that lead to the page.

```PHP
function setFooter(string $title, string $completeAddress, $phoneNumber, $email, $mailLink,$description)  
```
```PHP
function insert_footer($arrayButton, $arrayButton1, $arrayButton2, $arrayButton3, $arrayButton4)
```
  
- **GENERAL FORM**

General form it is a generic form, mainly used to send messages, ask for information or things like that. takes as input the action of the form.
```PHP
function createGeneralForm($attributes)
```
- **HEADER MENU'**

Header Menu allows you to insert a menu inside the header. Inside the header we can insert all the menu items that we want through an array that we pass to it as input, together with a title, together with a url, and a search action.
```PHP
function showHeaderMenu($arrayButton,$pageTitle,$homeURL,$actionSearch)
```
- **LIST**

The List component allows you to insert a list within our web application that accepts parameters of any type (string, number, link, etc.). as input it takes an array which can contain elements of any type.
```PHP
function setListElement(array $elements)
```

- **LOGIN FORM**

The Login Form component provide a simple input form, where the user insert username and password. In input takes the attributes that is an action, where the login insert the input of the user.
```PHP
function login($attribute)
```

-**MAP**

The Map component  provide a map, where the user set a location and see where the city is located. This component provide two methos, both take in input a location, but the first allows you to set the city on the map, the second allows you to view the map.
```PHP
function setMap($location)
```
```PHP
function printMap($location)
```

-**PAYMENT FORM**

The Payment form provide a classic form to checkout an order, where the user insert its data(name, surname, date of the birth ecc.). Takes in input the attributes action.
```PHP
function insert_payment_form($attributes)
```

-**PROFILE CARD**

The Profile Card allows you to set a complete user profile, taking as input parameters that allow you to set the data to be displayed within the profile.
```PHP
 function createProfile($name,$role,$where,$btnName,$btnURL,$img)
```

-**RECEIPE CARD**

The Receipe Card allows the possibility to insert on the web application a receipe for a typical meal, the ingredients that compose it, the difficult for its preparation and the preparation time. All elements are take in input by the function showReceipeCard.
```PHP
function showRecipeCard($recipeName, $time, $serving, $difficult, $description, $btnName,$btnURL,$imgURL)
```

-**REGISTRATION FORM**

The Registration Form allows the possibility to insert a form on the web application to register. It is composed of the classic fields of a registration form. like the other forms it takes as input only the action parameter of the form
```PHP
function createRegistrationForm($attributes)
```

-**SECTION**

The Section allows the possibility to insert a section on the web application. The parameter that it takes in input are the title and the body. 
```PHP
function insertSection($title,$body)
```

-**SELECT**

The Select allows the possibility to insert on the web application a selection of something, such as the choice of language. 
```PHP
function insertSelect()
```

-**TABLE**

The Table is a component that allows the possibility to insert on the web application a classic table with rows and columns. Take in input two array one for the columns and one for the rows.
'''PHP
function setTable(array $columns,array $rows)
'''
