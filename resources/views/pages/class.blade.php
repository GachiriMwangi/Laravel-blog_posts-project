<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
       form input{
            font-size: 120%;
            color: blueviolet;
            border: 1px solid grey;
            border-radius: 5px;
            padding: 5px;
            display: block;
        }

        .submit_button{
            width: 100px;
            height: 30px;
            border-radius: 20px;

            color: white;
            background-color: rgb(14, 14, 237);
        }
        .submit_button:hover{
            cursor: pointer;
            opacity: 80%;
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>
                <h3>Personal Details</h3>
                            </legend>
                            <label>
                                Full Name:
                            <input type="text" name="name" size="30" title="name" maxlength="50">
                        </label>
                            <br/><br/>
                            <label>
                                Registration Number
                                <input type="text" name="regno" size="20" title="regno" maxlength="16">
                            </label>

        </fieldset>
        <legend>
            Your review
        </legend>
        <label for="hear_about">How did you hear about us? </label>

        <select name="ref" id="hear_about">
            <option value="google">Google</option>
            <option value="friends">Friends</option>
        </select>
        <p>Would you visit us?</p>
        <pre>
        <label><input type="button" name="visit" value="Yes"></label>  <label><input type="button" name="visit" value="No"></label>
        </pre>
        <button type="button" name="submit_button" class="submit_button" >Submit</button>
    </form>
</body>
</html>
