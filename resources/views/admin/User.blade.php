<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>
    Register Form
</h3>

<div>
    <form action="/admin/ProcessSignup" method="post">
        @csrf
        <label for="fname">Full Name</label>
        <input type="text" id="FullName" name="FullName" placeholder="Your name..">

        <label for="lname">Email</label>
        <input type="text" id="Email" name="Email" placeholder="Your Email..">
        <label for="lname">Phone</label>
        <input type="text" id="Phone" name="Phone" placeholder="Your Phone..">
        <label for="lname">Address</label>
        <input type="text" id="Address" name="Address" placeholder="Your Address..">

        <label for="lname">Identity Card</label>
        <input type="text" id="IdentityCard" name="IdentityCard" placeholder="Your Identity Card..">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
