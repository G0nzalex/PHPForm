<header>
    <h1>Hello there</h1>
    <h2>Type your personal info below !</h2>
</header>
<!-- Form -->
<main>
    <form action="index.php?page=form" method="post">
        <label for="lastname">Your last name : </label><input type="text" name="lastname" id="lastname" maxlength="20"/><br />
        <label for="firstname">Your first name : </label><input type="text" name="firstname" id="firstname" maxlength="20"/><br />
        <label for="adress">Your adress : </label><input type="text" name="adress" id="adress" /><br />
        <label for="pc">Your postal code : </label><input type="number" name="cp" id="cp" maxlength="5" /><br />
        <label for="country">Your country : </label><input type="text" name="country" id="country" maxlength="20" /><br />
        <label for="phone">Your phone number : </label><input type="tel" name="phone" id="phone"  /><br />
        <label for="email">Your email : <label><input type="email" name="email" id="email" /><br />
        <label for="birthdate">Your birthdate : </label><input type="date" name="date" id="date" /><br />
        <input type="reset" value="Erase data" /><input type="submit" value="Send now" />
    </form>
</main>