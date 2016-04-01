Package Name: Contact Us Management<br>
Author: abhijeet9920 <br>
Licence: Open Source MIT Licence<br>
Description:
This package will help to manage your whole contact us functioanlity.<br>
Package contains a route file, a controller and a facade.<br>
Follow steps:
<ul>
  <li>Add this code snippet {{url('/contactus/contact') }} to contact us anchor tag. </li>
  <li>This is predefind route. "DO NOT USE THIS ELSE WHERE. </li>
  <li>I've added basic mail templete. Save this file to views/emails folder.
  You can alter it's content as per your conventions, but DO NOT DELETE THIS FILE. Also DO NOT CHANGE variables used in mail templete</li>
  <li>Add "Abhijeet\Contact\ContactServiceProvider::class" this to config/app.php in providers array</li>
  <li>Add 'Contact'   => Abhijeet\Contact\Facade\Contact::class, this to config/app.php in aliases array</li
  <li>Add MAIL_RECIEVER=yourmailid to env file. This constant is used to recieve contact us mails.</li>
  <li>You can configure your mail setup in env file.</li>
</ul>
<br>
Drop me a mail if you found any issue on installling this abhijeet.umbarkarcmpn2@gmail.com.
