<script>
    if (window.localStorage.getItem("message") == null) {
        //window.alert("No message was found");
    }
    else {
        var str = window.localStorage.getItem("message");
        //window.alert("Message was found");
    }

    function SetNewPost() {
        var str = document.getElementById("NewPost").value;
        window.localStorage.setItem("message", str);
        //document.getElementById("NewPost")
        //window
        //document.getElementById("NewPost").submit();
    }
</script>

<div class = "section">
    <div class = "baloon">
        <header>
            <p class="head">Admin Panel</p>
        </header>
        <p>Publish new post:</p>
        <div class="input">
            <form>
<textarea id = "NewPost" cols="50" rows="5" placeholder="Enter some text..." name="message"></textarea>
                <div class="button">
                    <input type="submit" value="Send" onclick="" />
                </div>
            </form>
        </div>
    </div>
</div>