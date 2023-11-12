<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Send Mail</title>
</head>
<body>
    <form class='form' action="" method="post">
        <div class='left'>
            <img src="resources/img/silky-sending-messages.png" alt="">
            <!-- <img src="resources/img/florid-mailing-list-1.gif" alt=""> -->
        </div>
        <div class='right'>
            <h2>Form</h2>
            <div class="login__field-group">
				<label class="login__label" for="name">Name</label>
				<input class="login__field" id="name" type="text" name="name" />
			</div>
            <div class="login__field-group">
				<label class="login__label" for="email">Email</label>
				<input class="login__field" id="email" type="email" name="email" />
			</div>
            <div class="login__field-group">
                <label class="login__label" for="text">Text</label>
                <textarea class="login__fieldD" id="text" name="text"></textarea>
            </div>

            <button >Send</button>
        </div>
        
    </form>
</body>
</html>