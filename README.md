Package Name: Contact Us Management
Author: abhijeet9920 <abhijeet@ambab.com>
Licence: Open Source MIT Licence
Description:
This package will help to manage your whole contact us functioanlity.
Package contains a route file, a controller and a facade. Add '/contactus/contact' route to your href tag,
"THIS IS PREDEFIND ROUTE, DO NOT USE THIS ANYWHERE IN YOUR route.php file".
Add a mail.blade.php file with SAME NAME.
Or you can copy following code
==============================================================================
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{!! $sub !!}</h2>

<div>
	<p>From: {!! $name !!}</p>
    <div>{!!$msg!!}</div>
</div>

</body>
</html>
==============================================================================

You can add your own templete