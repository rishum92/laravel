<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
*/

Route::get('/', function () 
{
    return view('login');
});
Route::post('userregistration','UserRegistrationController@index');
Route::post('myprofile','UserLoginController@index');

Route::get('/myprofile', function()
{
	return view('myprofile');
});
Route::get('myprofile', 'MyProfileController@index');
Route::post('/editprofile','UpdateProfileController@update');

Route::get('/userlist', function()
{
	return view('userlist');
});
Route::get('userlist', 'UserListController@userlist');
Route::get('userdetail/{id}', 'UserDetailController@userdetail');
Route::post('addfriend/{id}', 'AddFriendController@addfriend');


Route::get('myfriends','MyFriendController@myfriend');

Route::get('/myinbox', function()
{
  return redirect('inboxview');
});
Route::get('logout', 'UserLogoutController@logout');
Route::post('sendmail','SendMessageController@sendmessage');

// 
Route::get('/inboxview','MailInboxController@mailinbox');



//Important Mail Started
Route::get('importantdata/{id}','ImportantMailController@importantdata');
//Important Mail Ended

Route::get('importantview','ImportantMailController@importantview');

Route::get('editimportant/{id}','ImportantMailController@editimportant');



//Sent Inbox Started
Route::get('inboxsent','InboxSentController@inboxsent');
//Sent Inbox Ended

//Draft Mail Started
Route::get('/inboxdraft','InboxDraftController@draft'); 
Route::get('draftmessage/{id}','DraftMessageController@draftmessage');
//Draft Mail Ended

//Delete Mail Ended
//Route::post('deletesent','InboxTrashController@deletesent');
Route::get('inboxtrash','InboxTrashController@inboxtrash');

//Delete Sent mail Started


Route::get('/friendrequest', function()
{
 return view('friendrequest');
});
Route::get('friendrequest','FriendRequestController@friendrequest');
Route::post('friendrequest/{id}','FriendRequestController@requestresult');

// Profile Picture Upload
Route::post('fileupload', 'UserFileUploadController@upload');
//End of Profile Picture Upload

//Start Multiple Image Upload
Route::post('imageupload','MultipleImageController@multipleupload');
//End Multiple Image Upload

//Gallery View Started
Route::get('galleryview/{id}','GalleryViewController@galleryview');
//Gallery View Ended

//Start About Us
Route::post('store','InsertAboutUsController@insertabout');
//End About Us

//About Us View Started
Route::get('aboutusview/{id}','ViewAboutUsController@viewaboutus');
//About Us View Ended

//Friend Profile Started
Route::get('myfriendview/{id}','MyFriendViewController@myfriendview');
//Friend Profile Ended

//Delete Mail Started
Route::post('deletemail','DeleteMailController@deletemail');
//Delete Mail Ended

//Delete Sent Mail Started
Route::post('sentdeletemail','DeleteMailController@sentdeletemail');
//Delete Sent Mail Ended

// Delete Trash Mail Started
Route::post('trashdeletemail','DeleteMailController@trashdelete');
//Delete Trash Mail Ended

//Activation Link
Route::get('activation/{id}','ActivationController@activation');

//Change Password Started
Route::post('changepassword','ChangePasswordController@changepassword');
//Change Password Ended

//Forget Password Link Started
Route::post('forgetpassword', 'ForgetPasswordController@forgetpassword');
//Forget Password Link Ended
