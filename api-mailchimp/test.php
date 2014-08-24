<form id="signup" action="index.html" method="get">
    <input type="hidden" name="ajax" value="true" />
    First Name: <input type="text" name="fname" id="fname" />
    Last Name: <input type="text" name="lname" id="lname" />
    email Address (required): <input type="email" name="email" id="email" />
    HTML: <input type="radio" name="emailtype" value="html" checked="checked" />
    Text: <input type="radio" name="emailtype" value="text" />
    <input type="submit" id="SendButton" name="submit" value="Submit" />
</form>
<div id="message"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

$(document).ready(function() 
{
    $('#signup').submit(function() 
    {
        $("#message").html("Adding your email address...");
        $.ajax(
        	{
            url: 'store-address.php', // proper url to your "store-address.php" file
            data: $('#signup').serialize(),
            success: function(msg) 
            {
                $('#message').html(msg);
            }
        });
        return false;
    });
});
</script>