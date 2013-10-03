<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8' />
</head>
<body>
	<h1>Password reset</h1>
	To reset your password, simply fill in the form below and press "reset."
	{{ URL::route('reset') . '?token=' . $token }}
</body>
</html>