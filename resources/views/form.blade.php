<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{route('welcome')}}" method="POST">
        @csrf
      <div>
        <label for="fname"><p>First name:</p></label>
        <input type="text" name="fname" id="fname" /><br />
      </div>
      <div>
        <label for="lname"><p>Last name:</p></label>
        <input type="text" name="lname" id="lname" /><br />
      </div>
      <div>
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="M" />
        <label for="male">Male</label><br />
        <input type="radio" id="female" name="gender" value="F" />
        <label for="female">Female</label><br />
        <input type="radio" id="other-gender" name="gender" value="O" />
        <label for="other-gender">Other</label><br />
      </div>
      <div>
        <label for="nationality"><p>Nationality:</p></label>
        <select id="nationality" name="nationality">
          <option value="IDN">Indonesian</option>
          <option value="SGP">Singaporean</option>
          <option value="MAL">Malaysian</option>
          <option value="AUS">Australian</option>
        </select>
      </div>
      <div>
        <p>Language Spoken:</p>
        <input type="checkbox" id="idn" name="language" value="id" />
        <label for="idn">Bahasa Indonesia</label><br />
        <input type="checkbox" id="eng" name="language" value="en" />
        <label for="eng">English</label><br />
        <input type="checkbox" id="other-lang" name="language" value="other" />
        <label for="other-lang">Other</label><br />
      </div>
      <div>
        <label for="bio"><p>Bio:</p></label>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
      </div>
      <button>Sign Up</button>
    </form>
  </body>
</html>
