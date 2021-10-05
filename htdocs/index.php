<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" href = "css/A04styles.css"  href = "css/reset.css" href = "scripts/process.php">

<meta charset="utf-8">
<title>Assignment 4 - Form Processor</title>
</head>
<body>
  <div id = "container" class = "displayLine imgSpacing">
    <img src = "central-park.jpg" alt = "central park" width = "720px">
  </div>
  <div id = "container">
  <table>
    <tr>
      <td colspan="2" class  = "coloring"><h1>PHOTO DETAILS</h1></td>
    </tr>
    <tr>
    <td colspan = "2">
      <div class = "spacing">
        <label for = "title">Title</label>
        <input type="text" id = "title" placeholder = "Give your photo a descriptive Name" class = "textwidth1">
        <label for = "description">Description</label>
        <textarea name = "description" rows = "5" class = "textwidth1" placeholder = "Adding a rich description will help with search results"></textarea>
      </div>
    </td>
    </tr>
    <tr>
      <td class = "displayLine spacing2">
        <label for = "continent">Continent</label>
        <select name = "continent" id = "continent" class = "textwidth2 displayLine">
          <option value = "starter" selected>Choose continent</option>
          <option value = "Africa">Africa</option>
          <option value = "Antartica">Antartica</option>
          <option value = "Asia">Asia</option>
          <option value = "Australia">Australia</option>
          <option value = "Europe">Europe</option>
          <option value = "North America">North America</option>
          <option value = "South America">South America</option>
        </select>
      </td>
      <td class = "displayLine spacing2">
        <label for = "country">Country</label>
        <select name = "country" id = "country" class = "textwidth2 displayLine">
          <option value = "starter" selected>Choose country</option>
          <option value = "Germany">Germany</option>
          <option value = "United Kingdom">United Kingdom</option>
          <option value = "Greece">Greece</option>
          <option value = "France">France</option>
          <option value = "Switzerland">Switzerland</option>
        </select>
      </td>
      <td  class = "displayLine spacing2">
        <label for = "city">City</label>
        <input type="text" id = "city" class = "displayLine">
      </td>
      <td>
          <div class = "radioAndCheck">
            <h3>Copyright</h3>
            <input type="radio" name="rights" value="1">
            <label for = "rights">All Rights reserved</label>
            <br>
            <input type="radio" name="commons" value="2" checked>
            <label for = "Creative Commons">Creative Commons</label>
          </div>
          <div class = "radioAndCheck">
            <h3>Creative Commons Types</h3>
            <input type="checkbox" name="attribution" value="1">
            <label for = "attribution">Attribution</label>
            <br>
            <input type="checkbox" name="noncommmercial" value="2">
            <label for = "noncommmercial">Noncommercial</label>
            <br>
            <input type="checkbox" name="works" value="2">
            <label for = "works">No Derivative Works</label>
          </div>
      </td>
    </tr>
  <tr>
    <td colspan = "2">
      <div class = "coloring licenseSpacing">
        <label for = "Lisence">I accept the software license</label>
        <input type="checkbox" name="License" value="1">
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class = "spacing">
        <label for = "rate">Rate this Photo:</label>
        <input type="number" id = "rate" min = "1" max = "5" class = "displayLine">
        <br>
        <label for = "color">Color Collection:</label>
        <input type="color" id = "color" class = "displayLine">
      </div>
    </td>
      <td>
        <div class = "dateAndTime">
          <div class = "spacing">
            <label for = "calendar">Date Taken:</label>
            <input type="date" id = "calendar" class = "displayLine">
            <br>
            <label for="appt">Time Taken:</label>
            <input type="time" id="appt" name="appt" class = "displayLine">
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan = "2">
        <div class = "buttonSpacing">
          <button type = "button">Submit</button>
          <button type = "button">Clear Form</button>
        </div>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
